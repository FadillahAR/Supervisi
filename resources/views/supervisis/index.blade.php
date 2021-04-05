@extends('halaman.halaman')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Supervisi Digital</h2>
            </div>
            @if (auth()->user()->role!=2)
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('supervisis.create') }}">Tambah supervisi Baru</a>
            </div>
            @endif
        </div>
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-warning">
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
            <th>Status</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($materis as $materi)
        @foreach ($supervisis as $supervisi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $materi->materi }}</td>
            <td>{{ $materi->mapel }}</td>
            <td>{{ $materi->rombel }}</td>
            <td>{{ $materi->author }}</td>
            <td>{{ $materi->file }}</td>
            <td><b>{{ $supervisi->status }}</b></td>
            <td>{{ $supervisi->deskripsi }}</td>
            <td>
                <form action="{{ route('supervisis.destroy',$supervisi->id) }}" method="POST">
   
                    <a class="btn btn-info" href="/supervisis/cetak">Print</a>
                    @if (auth()->user()->role!=2)
                    <a class="btn btn-warning" href="{{ route('supervisis.edit',$supervisi->id) }}">Edit</a>
                    @endif    
                    @csrf
                    @method('DELETE')
                    
                    @if (auth()->user()->role!=2)
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
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
  
    {!! $supervisis->links() !!}
      
@endsection