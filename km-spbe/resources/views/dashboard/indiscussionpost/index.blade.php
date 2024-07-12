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
                            <td><a title="Lihat" href="/dashboard/indiscussion/{{ $post->slug }}"><i
                                        class="fa-regular fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                @role('author')
                                    <a title="Edit" href="/dashboard/edit/{{ $post->slug }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                @endrole
                                @role('verifikator')
                                    <button class="verif-btn" data-id="{{ $post->id }}" title="Verifikasi"
                                        onclick="verifyPost({{ $post->id }}, '{{ $post->slug }}')"><i
                                            class="fa-solid fa-circle-check"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                @endrole
                                <button class="delete-btn" data-id="{{ $post->id }}" title="Hapus"
                                    onclick="deletePost({{ $post->id }})"><i
                                        class="fa-solid fa-delete-left"></i></button>
                                </form>
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

    <!-- Hidden form for verification -->
    <form id="verifForm" action="/dashboard/verif" method="POST" class="d-none">
        @csrf
        <input type="hidden" name="id" id="verif-post-id">
        <input type="hidden" name="slug" id="verif-post-slug">
    </form>

    <!-- Hidden form for deletion -->
    <form id="deleteForm" action="/dashboard/destroy/indiscussion" method="POST" class="d-none">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" id="delete-post-id">
    </form>

    <script>
        function verifyPost(postId) {
            Swal.fire({
                title: "Verifikasi?",
                text: "Apakah kamu yakin ingin memverifikasi postingan ini?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Set values to the hidden form
                    $('#verif-post-id').val(postId);
                    // Submit the form
                    $('#verifForm').submit();
                }
            });
        }

        function deletePost(postId) {
            Swal.fire({
                title: "Hapus?",
                text: "Apakah kamu yakin ingin menghapus postingan ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Set values to the hidden form
                    $('#delete-post-id').val(postId);
                    // Submit the form
                    $('#deleteForm').submit();
                }
            });
        }
    </script>

    @if (session()->has('hapus'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Postingan telah dihapus.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('successThread'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Thread beserta komentarnya telah dihapus.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Thread Diskusi baru telah ditambahkan.",
                icon: "success"
            });
        </script>
    @endif
@endsection
