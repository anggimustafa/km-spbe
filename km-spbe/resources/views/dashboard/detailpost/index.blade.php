@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow rounded" style="margin:auto">

            <a class="btn btn-info" title="Lihat" href="javascript:history.go(-1);"><i
                    class="fa-solid fa-arrow-left"></i></a>&nbsp;
            @if (!request()->is('dashboard/verified/*'))
                <a class="btn btn-warning" title="Edit" href="/dashboard/edit/{{ $posts->first()->slug }}"><i
                        class="fa-solid fa-pen-to-square"></i></a>&nbsp;
                @if (!request()->is('dashboard/indiscussion/*'))
                    <a class="btn btn-primary" title="Buat Diskusi" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop" href=""><i class="fa-brands fa-rocketchat"></i></a>&nbsp;
                @endif
                <button class="verif-btn btn btn-success" data-id="{{ $posts->first()->id }}" title="Verifikasi"
                    onclick="verifyPost({{ $posts->first()->id }}, '{{ $posts->first()->slug }}')"><i
                        class="fa-solid fa-circle-check"></i></button>&nbsp;
            @endif
            <button class="delete-btn btn btn-danger" data-id="{{ $posts->first()->id }}" title="Hapus"
                onclick="deletePost({{ $posts->first()->id }})"><i class="fa-solid fa-delete-left"></i></button>
            <div class="hero">
                <div class="container-gambar">
                    <img src="../../assets/images/event-01.jpg" alt="">
                    <div class="image-overlay"></div>
                    <div class="judul text-center">
                        <h1 class="text-light mb-2">{{ $posts->first()->judul }}</h1>
                        <small class="text-light">Author : Ucup &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Date : 24
                            Desember
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
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur
                        iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem
                        dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi
                        natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo
                        dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem,
                        ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis
                        voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur
                        iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem
                        dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi
                        natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo
                        dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem,
                        ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis
                        voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur
                        iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem
                        dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi
                        natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo
                        dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem,
                        ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis
                        voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
                    <p class="rata-kiri-kanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                        quibusdam
                        illo nihil eum molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit quibusdam illo nihil eum
                        molestias,
                        iure impedit, quos unde nemo porro delectus, reprehenderit dignissimos nesciunt consequatur
                        iusto.
                        Vel
                        ea omnis alias.lore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel autem
                        dolores
                        tempore
                        atque, unde sequi ut necessitatibus cumque voluptates accusamus voluptatem consequuntur modi
                        natus
                        similique nulla neque temporibus mollitia? Architecto! Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Magnam ex, sapiente exercitationem quam maiores doloremque explicabo
                        dolore
                        nesciunt
                        soluta ut praesentium amet mollitia, dolorem ipsa qui sunt id temporibus aspernatur! Lorem,
                        ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Consequuntur temporibus accusantium minus nobis
                        voluptate
                        nostrum
                        officiis saepe, repellat reiciendis fuga. Cumque, ad consequuntur! Qui at tempore vitae
                        necessitatibus
                        quod! Eos.</p>
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
