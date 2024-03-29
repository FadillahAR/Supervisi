@extends('halaman.halaman')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah supervisi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('supervisis.index') }}"> Back</a>
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
   
<form action="{{ route('supervisis.store') }}" method="POST">
    @csrf
  
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Materi :</label>
            </div>
            <input type="text" class="form-control" name="materi" aria-label="Default" aria-describedby="materi">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>
            <select name="mapel" id="mapel" class="custom-select">
                 <option selected disabled hidden></option>
                 <option value="Matematika">Matematika</option>
                 <option value="English">English</option>
                 <option value="Indonesia">Bahasa Indonesia</option>
                 <option value="Indonesia">Produktif RPL</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Rombel :</label>
            </div>
            <select name="rombel" id="rombel" class="custom-select">
                `<option selected disabled hidden></option>
                 <option value="10">X</option>
                 <option value="11">XI</option>
                 <option value="12">XII</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Author :</label>
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