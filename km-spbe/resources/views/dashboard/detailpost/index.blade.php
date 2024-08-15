@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="ms-5 mb-2">
            <a class="btn btn-info" title="Kembali" href="javascript:history.go(-1);"><i
                    class="fa-solid fa-arrow-left"></i></a>&nbsp;
            @if (!request()->is('dashboard/verified/*'))
                <a class="btn btn-warning" title="Edit" href="/dashboard/edit/{{ $posts->first()->slug }}"><i
                        class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                @if (!request()->is('dashboard/indiscussion/*'))
                    @role('verifikator')
                        <a class="btn btn-primary" title="Buat Diskusi" type="button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" href=""><i class="fa-brands fa-rocketchat"></i></a>&nbsp;
                    @endrole
                @endif
                @role('verifikator')
                    <button class="verif-btn btn btn-success" data-id="{{ $posts->first()->id }}" title="Verifikasi"
                        onclick="verifyPost({{ $posts->first()->id }}, '{{ $posts->first()->slug }}')"><i
                            class="fa-solid fa-circle-check"></i></button>&nbsp;
                @endrole
            @endif
            <button class="delete-btn btn btn-danger" data-id="{{ $posts->first()->id }}" title="Hapus"
                onclick="deletePost({{ $posts->first()->id }})"><i class="fa-solid fa-delete-left"></i></button>
        </div>
        <div class="col-lg-11 shadow rounded" style="margin:auto">
            <div class="hero">
                <div class="container-gambar">
                    <img src="https://picsum.photos/900/200" alt="" style="border-radius: 10px;">
                    <div class="image-overlay"></div>
                    <div class="judul text-center">
                        <h1 class="text-light mb-2">{{ $posts->first()->judul }}</h1>
                        <small class="text-light">
                            <i class="fa-solid fa-user-pen"></i> : {{ $posts->first()->user->name }}
                            &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-calendar-days"></i> :
                            {{ $posts->first()->created_at->format('d M Y') }}
                            &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-layer-group"></i> : {{ $posts->first()->category->nama_kategori }}
                            &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-key"></i> : {{ $posts->first()->is_public ? 'Public' : 'Private' }}
                        </small>
                    </div>
                    @if (request()->is('dashboard/indiscussion/*'))
                        <h4 class="tombol d-flex justify-content-end m-1"><a
                                href="/dashboard/thread/{{ $posts->first()->slug }}" class="btn btn-info btn-sm">Ke
                                Thread
                                Diskusi</a>
                        </h4>
                    @endif
                    @if (request()->is('dashboard/verified/*'))
                        <h4 class="tombol d-flex justify-content-end m-1"><a
                                href="/dashboard/threadVerify/{{ $posts->first()->slug }}"
                                class="btn btn-primary btn-sm">Lihat
                                Thread
                                Diskusi</a>
                        </h4>
                    @endif
                </div>
            </div>
            <div class="main-area">
                <div class="container-objek-utama mb-3">
                    <h5 class="text-light mb-3">Objek Pengetahuan Utama</h5>
                    <embed src="{{ url('/view-file/' . $posts->first()->id . '/' . true) }}" type="application/pdf"
                        width="100%" height="500px">
                </div>
                <div class="isi">
                    {!! $posts->first()->body !!}

                    @if ($objek_pendukung)
                        <div class="container-objek-pendukung mb-3">
                            <h6 class=" mb-3">Objek Pengetahuan Pendukung</h6>
                            <embed src="{{ url('/view-file/' . $posts->first()->id . '/false') }}" type="application/pdf"
                                width="100%" height="500px">
                        </div>
                    @endif
                </div>

                <div class="container-studi-kasus mb-3 shadow">
                    <h5 class="text-light mb-3">Studi Kasus</h5>
                    {!! $posts->first()->kasus !!}
                </div>
            </div>
        </div>
    </div>


    <!-- Hidden form for verification -->
    <form id="verifForm" action="/dashboard/verif" method="POST" class="d-none">
        @csrf
        <input type="hidden" name="id" id="verif-post-id">
        <input type="hidden" name="slug" id="verif-post-slug">
    </form>

    @if (request()->is('dashboard/verified/*'))
        <!-- Hidden form for deletion -->
        <form id="deleteForm" action="/dashboard/destroy/verified" method="POST" class="d-none">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" id="delete-post-id">
        </form>
    @elseif (request()->is('dashboard/indiscussion/*'))
        <!-- Hidden form for deletion -->
        <form id="deleteForm" action="/dashboard/destroy/indiscussion" method="POST" class="d-none">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" id="delete-post-id">
        </form>
    @else
        <!-- Hidden form for deletion -->
        <form id="deleteForm" action="/dashboard/destroy/unverify" method="POST" class="d-none">
            @method('DELETE')
            @csrf
            <input type="hidden" name="id" id="delete-post-id">
        </form>
    @endif

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
@endsection
