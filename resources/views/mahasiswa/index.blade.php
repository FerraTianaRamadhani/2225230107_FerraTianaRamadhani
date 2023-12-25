 @extends('layouts.master')

 @section('content')
    <div class="container">
        <a class="btn btn-primary" href="/mahasiswa/create">Add mahasiswa</a>
        <table class="table table-hover">
            <tr>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JENIS KELAMIN</th>
                <th>ASAL SEKOLAH</th>
                <th>AKSI</th>
            </tr>
            @foreach($mahasiswa as $m)
                <tr>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->asal_sekolah}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$m->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Sure ?')">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</endsection>

