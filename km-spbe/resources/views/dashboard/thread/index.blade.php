@extends('layouts.app')

@section('container')
    <div class="container-fluid row">
        <div class="col-lg-6 border shadow rounded mx-3 mt-4">
            <div class="container mt-5">
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
                            <div class="bg-white">
                                <div class="d-flex flex-row fs-12 my-2">
                                    <a href="/dashboard/indiscussion/{{ $post->slug }}" class="btn btn-outline-info">Ke
                                        Postingan Terkait</a>
                                </div>
                            </div>
                            <div class="bg-light p-2">
                                <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                        src="https://avatar.iran.liara.run/public/{{ $verifikator->first()->id }}"
                                        width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none me-2"
                                        type="button">Tambah Komentar</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 border shadow rounded mx-3 mt-4">
            <div class="container mt-5">
                <div class="row  d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h3 class="fs-5">Comment ({{ $comments->count() }})</h3>
                        </div>
                        @foreach ($comments as $komen)
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user d-flex flex-row align-items-center">
                                        <img src="https://avatar.iran.liara.run/public/{{ $komen->user_id }}" width="30"
                                            class="user-img rounded-circle me-2">
                                        <span>
                                            <h6 class="font-weight-bold text-primary">{{ $komen->name }}</h6>
                                            <small class="font-weight-bold">{{ $komen->body }}</small>
                                        </span>
                                    </div>
                                    <small>{{ $komen->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
