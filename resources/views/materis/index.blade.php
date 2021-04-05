@extends('halaman.halaman')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Form Materi</h2>
            </div>
    
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('materis.create') }}">Tambah Materi Baru</a>
            </div>
        </div>
    </div>
    <br>
   
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
            <th>File</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materis as $materi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $materi->materi }}</td>
            <td>{{ $materi->mapel }}</td>
            <td>{{ $materi->rombel }}</td>
            <td>{{ $materi->author }}</td>
            <td>{{ $materi->file }}</td>
            <td>
                <form action="{{ route('materis.destroy',$materi->id) }}" method="POST">
   
                    <a class="btn btn-warning" href="{{ route('materis.edit',$materi->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <table class="table table-bordered">
        <tr>
            <th>Tanggal & Waktu</th>
            <th>Guru</th>
            <th>Supervisor</th>
        </tr>
        @foreach ($jadwals as $jadwal)
        <tr>
            <td>{{ $jadwal->tanggal }}</td>
            <td>{{ $jadwal->guru }}</td>
            <td>{{ $jadwal->supervisor }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $materis->links() !!}
      
@endsection