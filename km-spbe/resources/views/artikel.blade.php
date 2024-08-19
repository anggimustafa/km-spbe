@extends('layouts.main')

@section('body')
    <div class="main-banner-artikel" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-light text-center mb-4">
                        @if (request()->has('category'))
                            Artikel {{ 'Terkait ' . $judul->first()->nama_kategori }}
                        @else
                            Artikel
                        @endif
                    </h1>
                    <div class="main-button text-center">
                        @foreach ($categories as $category)
                            <a href="/artikel?category={{ $category->slug }}"
                                class="mb-2">{{ $category->nama_kategori }}</a>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <form id="search-carousel" action="/artikel">
                            <input type="text" placeholder="Type Something" id='searchText' name="search"
                                onkeypress="handle" value="{{ request('search') }}" />
                            <button type="submit" class="fa-solid fa-magnifying-glass"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-12 col-md-6">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image">
                                        <img src="https://picsum.photos/id/{{ $post->id }}/400/300" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                        <li>
                                            <span class="category">{{ $post->category->nama_kategori }}</span><span
                                                class="category">{{ $post->opd->nama_opd }}</span>
                                            <h4>{{ $post->judul }}</h4>
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            <h6><small>{{ $post->user->email }}</small></h6>
                                        </li>
                                        <li>
                                            <span>Author:</span>
                                            <h6><small>{{ $post->user->name }}</small></h6>
                                        </li>
                                        <li>
                                            <span>Date:</span>
                                            <h6><small>{{ $post->created_at->format('d M Y') }}</small></h6>
                                        </li>
                                    </ul>
                                    <a href="/artikel/{{ $post->slug }}"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    <div class="pagination">
                        {{ $posts->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
