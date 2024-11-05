@extends('layouts.main')

@section('body')
    <div class="artikel-details">
        <div class="hero">
            <img src="https://picsum.photos/900/200" alt="">
            <div class="gambar-hero">
                <div class="judul text-center">
                    <h1 class="text-light mb-2">{{ $post->judul }}</h1>
                    <small class="text-light">
                        <i class="fa-solid fa-user-pen"></i> : {{ $post->user->name }}
                        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-calendar-days"></i> :
                        {{ $post->created_at->format('d M Y') }}
                        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-layer-group"></i> : {{ $post->category->nama_kategori }}
                        | &nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-city"></i> : {{ $post->opd->nama_opd }}
                        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-key"></i> : {{ $post->is_public ? 'Public' : 'Private' }}
                    </small>
                </div>
            </div>
        </div>
        <div class="main-area">
            <div class="container-objek-utama mb-3">
                <h5 class="text-light mb-3">Objek Pengetahuan Utama</h5>
                <embed src="{{ url('/view-file/' . $post->id . '/' . true) }}" type="application/pdf" width="100%"
                    height="500px">
            </div>
            <div class="isi">
                {!! $post->body !!}

                @if ($objek_pendukung)
                    <div class="container-objek-pendukung mb-3">
                        <h6 class=" mb-3">Objek Pengetahuan Pendukung</h6>
                        <embed src="{{ url('/view-file/' . $post->id . '/false') }}" type="application/pdf" width="100%"
                            height="500px">
                    </div>
                @endif
            </div>

            <div class="container-studi-kasus mb-3 shadow">
                <h5 class="text-light mb-3">Studi Kasus</h5>
                {!! $post->kasus !!}
            </div>
        </div>
    </div>
@endsection()
