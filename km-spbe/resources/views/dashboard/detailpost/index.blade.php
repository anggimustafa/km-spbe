@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow rounded" style="margin:auto">

            <a class="btn btn-info" title="Lihat" href="javascript:history.go(-1);"><i
                    class="fa-solid fa-arrow-left"></i></a>&nbsp;
            @if (!request()->is('dashboard/verified/*'))
                <a class="btn btn-warning" title="Edit" href=""><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                @if (!request()->is('dashboard/indiscussion/*'))
                    <a class="btn btn-primary" title="Buat Diskusi" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" href=""><i class="fa-brands fa-rocketchat"></i></a>&nbsp;
                @endif
                <a class="btn btn-success" title="Verifikasi" href=""><i
                        class="fa-solid fa-circle-check"></i></a>&nbsp;
            @endif
            <a class="btn btn-danger" title="Hapus" href=""><i class="fa-solid fa-delete-left"></i></a>
            <div class="hero">
                <div class="container-gambar">
                    <img src="../../assets/images/event-01.jpg" alt="">
                    <div class="image-overlay"></div>
                    <div class="judul text-center">
                        <h1 class="text-light mb-2">{{ $posts->first()->judul }}</h1>
                        <small class="text-light">Author : Ucup &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Date : 24 Desember
                            2036</small>
                    </div>
                    @if (request()->is('dashboard/indiscussion/*'))
                        <h4 class="tombol d-flex justify-content-end m-1"><a href="thread" class="btn btn-info btn-sm">Ke
                                Thread
                                Diskusi</a>
                        </h4>
                    @endif
                </div>
            </div>
            <div class="main-area py-2 px-5">
                <div class="container">
                    <h1>Judul Disinii.....</h1>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem, ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
