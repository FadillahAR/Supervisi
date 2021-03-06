@extends('supervisors.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Supervisi Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('supervisors.create') }}">Tambah Materi Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($supervisors as $supervisor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $supervisor->nama }}</td>
            <td>{{ $supervisor->jk }}</td>
            <td>{{ $supervisor->alamat }}</td>
            <td>
                <form action="{{ route('supervisors.destroy',$supervisor->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('supervisors.show',$supervisor->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('supervisors.edit',$supervisor->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $supervisors->links() !!}
      
@endsection