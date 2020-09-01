@extends('gurus.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Supervisi Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('gurus.create') }}">Tambah Guru Baru</a>
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
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($gurus as $guru)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $guru->nip }}</td>
            <td>{{ $guru->nama }}</td>
            <td>{{ $guru->alamat }}</td>
            <td>{{ $guru->jk }}</td>
            <td>
                <form action="{{ route('gurus.destroy',$guru->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('gurus.show',$guru->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('gurus.edit',$guru->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $gurus->links() !!}
      
@endsection