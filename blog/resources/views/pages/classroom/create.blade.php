@extends('layout/global')
@section('pages')
    <h1>ADD Data classroom</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form</h6>
        </div>
        <div class="card-body">
            <form action="{{route('classroom.store')}}" method="post">
             @csrf
             <div class="form-group">
                <label>Nama Classroom</label>
                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Kelas">
             </div>
             <div class="form-group">
                 <label>Kode Ruangan</label>
                 <input type="text" name="room" class="form-control" placeholder="Masukan Kode Ruangan Kelas">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
