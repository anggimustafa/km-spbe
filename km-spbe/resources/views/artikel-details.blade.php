@extends('layouts.main')

@section('body')
    <div class="artikel-details">
        <div class="hero">
            <img src="../assets/images/event-01.jpg" alt="">
            <div class="gambar-hero">
                <div class="judul text-center">
                    <h1 class="text-light mb-2">{{ $post->judul }}</h1>
                    <small class="text-light">Author : {{ $post->user->name }} &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Date :
                        {{ $post->created_at->format('d M Y') }}</small>
                </div>
            </div>
        </div>
        <div class="main-area">
            <div class="container">
                <h1>Judul Disinii.....</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto. Vel
                    ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores tempore
                    atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                    similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore nesciunt
                    soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum dolor
                    sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate nostrum
                    officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae necessitatibus
                    quod! Eos.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto. Vel
                    ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores tempore
                    atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                    similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore nesciunt
                    soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum dolor
                    sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate nostrum
                    officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae necessitatibus
                    quod! Eos.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto. Vel
                    ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores tempore
                    atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                    similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore nesciunt
                    soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum dolor
                    sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate nostrum
                    officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae necessitatibus
                    quod! Eos.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum molestias,
                    iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto. Vel
                    ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores tempore
                    atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                    similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore nesciunt
                    soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum dolor
                    sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate nostrum
                    officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae necessitatibus
                    quod! Eos.</p>
            </div>
        </div>
    </div>
@endsection()
