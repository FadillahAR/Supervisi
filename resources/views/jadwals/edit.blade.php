@extends('halaman.halaman')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Jadwal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('jadwals.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('jadwals.update',$jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Tanggal :</label>
                <input type="date" class="form-control" name="tanggal" value="{{ $jadwal->tanggal }}">
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="guru">Guru :</label>
            </div>
            <input type="text" class="form-control" name="guru" value="{{ $jadwal->guru }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Supervisor :</label>
            </div>
            <input type="text" class="form-control" name="supervisor" value="{{ $jadwal->supervisor }}">
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
   
    </form>
@endsection