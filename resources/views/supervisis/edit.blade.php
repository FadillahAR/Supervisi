@extends('supervisis.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Supervisi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('supervisis.index') }}"> Back</a>
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
  
    <form action="{{ route('supervisis.update',$supervisi->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Materi :</label>
            </div>
            <input type="text" class="form-control" name="materi" value="{{ $supervisi->materi }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>
            <input type="text" class="form-control" name="mapel" value="{{ $supervisi->mapel }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Rombel :</label>
            </div>
            <select name="rombel" id="rombel" class="custom-select">
                `<option selected disabled hidden>{{ $supervisi->rombel }}</option>
                 <option value="10">X</option>
                 <option value="11">XI</option>
                 <option value="12">XII</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Author :</label>
            </div>
            <input type="text" class="form-control" name="author" value="{{ $supervisi->author }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" >Status :</label>
            </div>
            <select name="status" id="status" class="custom-select">
                 <option selected hidden disable></option>
                 <option value="Reject">Rejected</option>
                 <option value="Accept">Accepted</option>
            </select>
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