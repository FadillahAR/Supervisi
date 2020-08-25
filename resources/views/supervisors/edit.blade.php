@extends('supervisors.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit materi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('supervisors.index') }}"> Back</a>
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
  
    <form action="{{ route('supervisors.update',$supervisor->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Materi :</span>
            </div>
            <input type="text" class="form-control" name="materi" aria-label="Default" aria-describedby="materi" value="{{ $supervisor->materi }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>      
            <select name="mapel" id="mapel" class="custom-select">
                 <option selected disabled>{{ $supervisor->mapel }}</option>
                 <option value="Matematika">Matematika</option>
                 <option value="English">English</option>
                 <option value="Indonesia">Bahasa Indonesia</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="rombel">Rombel :</label>
            </div>
            <select name="rombel" id="rombel" class="custom-select">
                 <option selected disabled>{{ $supervisor->rombel }}</option>
                 <option value="10">X</option>
                 <option value="11">XI</option>
                 <option value="12">XII</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Author :</span>
            </div>
            <input type="text" class="form-control" name="author" aria-label="Default" aria-describedby="author" value="{{ $supervisor->materi }}">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi</strong>
                    <textarea type="text" name="deskripsi" value="{{ $supervisor->deskripsi }}" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </div>
   
    </form>
@endsection