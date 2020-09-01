@extends('laporans.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Supervisi Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('laporans.create') }}">Tambah laporan Baru</a>
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
            <th>Materi</th>
            <th>Mapel</th>
            <th>Rombel</th>
            <th>Author</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($laporans as $laporan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $laporan->materi }}</td>
            <td>{{ $laporan->mapel }}</td>
            <td>{{ $laporan->rombel }}</td>
            <td>{{ $laporan->author }}</td>
            <td>{{ $laporan->deskripsi }}</td>
            <td>
                <form action="{{ route('laporans.destroy',$laporan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('laporans.show',$laporan->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('laporans.edit',$laporan->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $laporans->links() !!}
      
@endsection