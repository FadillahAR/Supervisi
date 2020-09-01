@extends('materis.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit materi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('materis.index') }}"> Back</a>
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
  
    <form action="{{ route('materis.update',$materi->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Materi :</span>
            </div>
            <input type="text" class="form-control" name="materi" aria-label="Default" aria-describedby="materi" value="{{ $materi->materi }}">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="mapel">Mapel :</label>
            </div>
            <select name="mapel" id="mapel" class="custom-select">
                 <option selected disabled>{{ $materi->mapel }}</option>
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
                 <option selected disabled>{{ $materi->rombel }}</option>
                 <option value="10">X</option>
                 <option value="11">XI</option>
                 <option value="12">XII</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Author :</span>
            </div>
            <input type="text" class="form-control" name="author" aria-label="Default" aria-describedby="author" value="{{ $materi->materi }}">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload : </span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">{{ $materi->file }}</label>
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