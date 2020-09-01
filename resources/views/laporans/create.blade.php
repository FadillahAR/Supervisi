@extends('laporans.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Laporan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('laporans.index') }}"> Back</a>
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
   
<form action="{{ route('laporans.store') }}" method="POST">
    @csrf
  
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Materi :</span>
            </div>
            <input type="text" class="form-control" name="materi" aria-label="Default" aria-describedby="materi">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>
            <input type="text" class="form-control" name="mapel" aria-label="Default" aria-describedby="mapel">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Rombel :</span>
            </div>
            <input type="text" class="form-control" name="rombel" aria-label="Default" aria-describedby="rombel">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Author :</span>
            </div>
            <input type="text" class="form-control" name="author" aria-label="Default" aria-describedby="author">
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi : </strong>
                <textarea type="text" name="deskripsi" class="form-control"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
   
</form>
@endsection