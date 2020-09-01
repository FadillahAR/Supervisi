@extends('gurus.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit guru</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('gurus.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('gurus.update',$guru->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >NIP :</span>
            </div>
            <input type="text" class="form-control" name="nip" aria-label="Default" aria-describedby="nip">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="nama">Nama :</label>
            </div>
            <input type="text" class="form-control" name="nama" aria-label="Default" aria-describedby="nama">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                <textarea type="text" name="alamat" class="form-control"></textarea>
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Jenis Kelamin :</span>
            </div>
            <input type="text" class="form-control" name="jk" aria-label="Default" aria-describedby="jk">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
        </div>
   
    </form>
@endsection