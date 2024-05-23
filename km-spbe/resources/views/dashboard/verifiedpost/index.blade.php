@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->judul }}</td>
                            <td>{{ $post->category->nama_kategori }}</td>
                            <td>{{ $post->created_at->format('d-m-Y') }}</td>
                            <td><a title="Lihat" href="/dashboard/verified/{{ $post->slug }}"><i
                                        class="fa-regular fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="Hapus"
                                    href=""><i class="fa-solid fa-delete-left"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
