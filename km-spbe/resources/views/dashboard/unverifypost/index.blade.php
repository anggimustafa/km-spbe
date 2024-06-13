@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">

            <!-- Modal -->
            <div class="modal fade modal-xl" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Author untuk ikut diskusi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="authorForm" method="POST" action="/dashboard/diskusi">
                            @csrf <!-- Include CSRF token for security -->
                            <input type="hidden" name="post_id" id="postId">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Topik Diskusi</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="topik_diskusi"></textarea>
                                </div>
                                <table id="example-modal" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nip }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="user_ids[]"
                                                            value="{{ $user->id }}"
                                                            id="flexCheckDefault{{ $user->id }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Buat Diskusi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            {{-- tabel --}}
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
                            <td><a title="Lihat" href="/dashboard/unverify/{{ $post->slug }}"><i
                                        class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a title="Edit" href="/dashboard/edit/{{ $post->slug }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a title="Buat Diskusi" type="button" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop" data-post-id="{{ $post->id }}" href=""><i
                                        class="fa-brands fa-rocketchat"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="verif-btn" data-id="{{ $post->id }}" title="Verifikasi"
                                    onclick="verifyPost({{ $post->id }}, '{{ $post->slug }}')"><i
                                        class="fa-solid fa-circle-check"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="delete-btn" data-id="{{ $post->id }}" title="Hapus"
                                    onclick="deletePost({{ $post->id }})"><i
                                        class="fa-solid fa-delete-left"></i></button>
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
    <form id="deleteForm" action="/dashboard/destroy/unverify" method="POST" class="d-none">
        @method('DELETE')
        @csrf
        <input type="hidden" name="id" id="delete-post-id">
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('staticBackdrop');
            modal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Tombol yang diklik untuk membuka modal
                var postId = button.getAttribute('data-post-id'); // Ambil nilai data-post-id
                var inputPostId = document.getElementById('postId'); // Input hidden di dalam form modal
                inputPostId.value = postId; // Set nilai input hidden dengan post ID
            });
        });
    </script>

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

    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Postingan baru telah ditambahkan.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('updated'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Postingan telah diperbarui.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('hapus'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Postingan telah dihapus.",
                icon: "success"
            });
        </script>
    @endif
@endsection
