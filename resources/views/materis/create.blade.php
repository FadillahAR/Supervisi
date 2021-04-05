@extends('halaman.halaman')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Materi Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('materis.index') }}"> Back</a>
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
   
<form action="{{ route('materis.store') }}" method="POST">
    @csrf
  
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text">Materi :</label>
            </div>
            <input type="text" class="form-control" name="materi" >
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>
            <select name="mapel" id="mapel" class="custom-select">
                 <option selected hidden disable></option>
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
                `<option selected hidden disable></option>
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


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Upload : </label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">Choose file</label>
            </div>
        </div>
        <script type="application/javascript">
            $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
            });
         </script>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Submit</button>
        </div>
    </div>
   
</form>
@endsection