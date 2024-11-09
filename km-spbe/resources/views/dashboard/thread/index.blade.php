@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-12 d-flex justify-content-center ">
            <div class="container mt-5 border shadow rounded mx-3 mt-4 col-10 mb-5 p-3">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column comment-section">
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle"
                                        src="https://avatar.iran.liara.run/public/{{ $verifikator->first()->id }}"
                                        width="60">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span
                                            class="d-block font-weight-bold name">{{ $verifikator->first()->name }}</span><span
                                            class="date text-black-50">{{ $threads->first()->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text rata-kiri-kanan">{{ $threads->first()->body }}
                                    </p>
                                </div>
                            </div>
                            <div class="bg-white d-flex justify-content-between">
                                @if ($verify == false)
                                    <div class="d-flex flex-row fs-12 my-2">
                                        <a href="/dashboard/indiscussion/{{ $post->slug }}"
                                            class="btn btn-outline-info">Ke
                                            Postingan Terkait</a>
                                    </div>
                                @else
                                    <div class="d-flex flex-row fs-12 my-2">
                                        <a href="/dashboard/verified/{{ $post->slug }}" class="btn btn-outline-primary">Ke
                                            Postingan Terkait</a>
                                    </div>
                                @endif
                                @role('verifikator')
                                    <div class="form-hapus">
                                        <button class="delete-btn btn btn-danger" data-id="{{ $threads->first()->id }}"
                                            title="Hapus" onclick="deletePost({{ $threads->first()->id }})"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        <form id="deleteForm" action="/dashboard/thread" method="POST" class="d-none">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="id" id="delete-thread-id">
                                        </form>
                                    </div>
                                @endrole
                            </div>
                            @if ($verify == false)
                                <div class="bg-light p-2">
                                    <form action="/dashboard/thread" method="post">
                                        @csrf
                                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                                src="https://avatar.iran.liara.run/public/{{ auth()->user()->id }}"
                                                width="40">
                                            <textarea class="form-control ml-1 shadow-none textarea" required name="komentar"></textarea>
                                            <input type="hidden" value="{{ $threads->first()->id }}" name="thread_id">
                                            <input type="hidden" value="{{ $post->slug }}" name="thread_slug">
                                        </div>
                                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none me-2"
                                                type="submit">Tambah Komentar</button></div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 border shadow rounded mx-3 mt-4">
            <div class="container mt-3 p-5">
                <div class="row  d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h3 class="fs-5">Comment ({{ $comments->count() }})</h3>
                        </div>
                        @foreach ($comments as $komen)
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user d-flex flex-row align-items-center">
                                        <img src="https://avatar.iran.liara.run/public/{{ $komen->user_id }}"
                                            width="30" class="user-img rounded-circle me-2">
                                        <span>
                                            <h6 class="font-weight-bold text-primary">{{ $komen->name }}</h6>
                                            <small class="font-weight-bold">{{ $komen->body }}</small>
                                        </span>
                                    </div>
                                    <i class="fa-solid fa-heart"> {{ $komen->votes->count() }}</i>
                                </div>
                                @if ($komen->user_id == auth()->user()->id)
                                    <div class="col-12 d-flex justify-content-end">
                                        <form action="/dashboard/comment" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="komen_body" value="{{ $komen->body }}">
                                            <button type="submit" class=" text-center text-danger">Hapus</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="col-12 d-flex justify-content-end">
                                        @php
                                            $existingVote = $komen->votes->where('user_id', auth()->id())->first();
                                        @endphp
                                        <form action="/dashboard/comment/vote" method="POST">
                                            @csrf
                                            <input type="hidden" name="komen_id" value="{{ $komen->id }}">
                                            @if ($existingVote)
                                                <!-- Jika user sudah memberi vote, tampilkan tombol Unvote -->
                                                <button type="submit" title="Unvote"><i
                                                        class="fa-solid fa-thumbs-up"></i></button>
                                            @else
                                                <!-- Jika user belum memberi vote, tampilkan tombol Upvote -->
                                                <button type="submit" title="Vote"><i
                                                        class="fa-regular fa-thumbs-up"></i></button>
                                            @endif
                                        </form>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Komentar baru telah ditambahkan.",
                icon: "success"
            });
        </script>
    @endif
    @if (session()->has('hapus'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Komentar berhasil dihapus.",
                icon: "success"
            });
        </script>
    @endif

    <script>
        function deletePost(postId) {
            Swal.fire({
                title: "Hapus?",
                text: "Apakah kamu yakin ingin menghapus thread beserta komentarnya?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Set values to the hidden form
                    $('#delete-thread-id').val(postId);
                    // Submit the form
                    $('#deleteForm').submit();
                }
            });
        }
    </script>
@endsection
