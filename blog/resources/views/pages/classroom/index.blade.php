@extends('layout/global')
@section('pages')
    <h1>Data classroom</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('classroom.create')}}" class="btn btn-primary mb-4"> Add Classroom </a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Ruangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        <tr>
                            <th>{{  $key + 1 }}</th>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->room}}</td>
                            <td>
                                <a href="{{ route('classroom.edit', [$item->id]) }}" class="btn btn-warning">Update</a>
                                {{--<a href="#" class="btn btn-danger">Delete</a>--}}
                                <form action="{{ route('classroom.destroy', [$item->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="flex btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
