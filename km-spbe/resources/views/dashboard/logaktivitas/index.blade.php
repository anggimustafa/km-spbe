@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Visibilitas</th>
                        <th>Aktivitas</th>
                        <th>Deskripsi</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logposts as $logpost)
                        <tr>
                            <td>{{ $logpost->post->judul }}</td>
                            <td>{{ $logpost->post->category->nama_kategori }}</td>
                            <td>{{ $logpost->post->is_public ? 'public' : 'private' }}</td>
                            <td>{{ $logpost->action }}</td>
                            <td>{{ $logpost->desc }}</td>
                            <td>{{ $logpost->created_at->format('d F Y') }}</td>
                            <td>{{ $logpost->created_at->format('H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Judul Post</th>
                        <th>Kategori</th>
                        <th>Visibilitas</th>
                        <th>Aktivitas</th>
                        <th>Deskripsi</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
