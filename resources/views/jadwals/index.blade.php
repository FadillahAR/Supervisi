@extends('jadwals.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Supervisi Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jadwals.create') }}">Tambah Jadwal Baru</a>
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
            <th>Tanggal & Waktu</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jadwals as $jadwal)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jadwal->tanggal }}</td>
            <td>
                <form action="{{ route('jadwals.destroy',$jadwal->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jadwals.show',$jadwal->id) }}">Show</a>
    
                    <a class="btn btn-warning" href="{{ route('jadwals.edit',$jadwal->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $jadwals->links() !!}
      
@endsection