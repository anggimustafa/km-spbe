@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="ms-5 mb-2">
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
                                href="/dashboard/thread/{{ $posts->first()->id }}" class="btn btn-info btn-sm">Ke
                                Thread
                                Diskusi</a>
                        </h4>
                    @endif
                </div>
            </div>
            <div class="main-area">
                <div class="container-objek-utama mb-3">
                    <h5 class="text-light mb-3">Objek Pengetahuan Utama</h5>
                    <img src="../../assets/images/banner-item-03.jpg" alt="" style="border-radius:10px">
                </div>
                <div class="isi">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi alias accusamus quod in, rerum
                        provident
                        exercitationem quae sint deserunt pariatur itaque, obcaecati cumque, vitae debitis. Molestiae,
                        dicta!
                        Incidunt, vitae exercitationem necessitatibus nihil est nam, veritatis, error iure praesentium
                        dolorum
                        provident sequi! Quibusdam inventore totam error reiciendis vero ad necessitatibus quos ut maiores.
                        Consectetur ex sint provident est cupiditate, illo excepturi earum ipsam omnis rerum neque
                        architecto,
                        harum reiciendis natus suscipit. Laborum amet exercitationem non officia aliquam, quibusdam expedita
                        minima ipsum temporibus ipsa saepe nobis sunt error! Ipsam facilis deleniti, veniam ducimus beatae
                        corporis? Quisquam, quae ab! Veritatis atque eius libero! Atque velit impedit, modi quaerat
                        veritatis
                        alias ipsa iusto animi nostrum, illum molestias ab? Iste, et totam. Quasi molestiae, corrupti
                        tempore
                        esse rem ad, molestias at quisquam quia laboriosam voluptates saepe asperiores explicabo temporibus
                        tenetur vero alias! Impedit labore ea, nam officiis tempore accusantium error doloremque molestias.
                        Excepturi ab minus labore doloremque quisquam adipisci non, dolores, placeat, ullam quo quibusdam
                        illo
                        corrupti exercitationem recusandae accusantium! Exercitationem ratione eaque vel repellat molestiae.
                        Illum veritatis eum quaerat cumque ipsa perspiciatis odio fugiat tempora? Dolorum consequatur nihil
                        quis
                        eligendi laudantium et tempore iure dolor aliquid beatae? Fugit porro saepe repellat excepturi
                        pariatur,
                        atque iure asperiores fuga voluptatum neque, laborum labore voluptatibus amet natus ducimus odio at?
                        Cumque tempora ducimus recusandae, at unde asperiores beatae quasi! Quod deleniti mollitia dolore
                        sapiente vero earum numquam minus cum provident molestiae, sit expedita non ipsa voluptatum rem
                        fugiat
                        quaerat autem obcaecati veniam eum fuga nisi laborum deserunt! Ducimus maiores officiis iusto, odit
                        aspernatur similique magnam quod nulla sint eos fugiat doloribus minus nobis consectetur officia
                        eaque
                        non fugit asperiores est sapiente labore perferendis ratione repudiandae? Laudantium debitis eaque
                        omnis
                        dolorum inventore corrupti ea hic porro quis doloribus, obcaecati ab fugiat necessitatibus sunt
                        aliquid!
                        Odio nisi id adipisci?</p>

                    <div class="container-objek-pendukung mb-3">
                        <h6 class=" mb-3">Objek Pengetahuan Pendukung</h6>
                        <img src="../../assets/images/banner-item-03.jpg" alt="" style="border-radius:10px">
                    </div>
                </div>

                <div class="container-studi-kasus mb-3 shadow">
                    <h5 class="text-light mb-3">Studi Kasus</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem praesentium ut esse
                        quae, exercitationem
                        quo pariatur deleniti nam eos at laboriosam quibusdam deserunt. Similique, repellat. Amet modi, quo,
                        eaque voluptas repellendus odit quos nostrum assumenda, repellat ut sed perferendis. Soluta, libero
                        ducimus omnis ipsam molestias sit perferendis asperiores repellendus necessitatibus distinctio
                        molestiae? Dicta commodi illo iste delectus natus saepe voluptatem at praesentium vel dolor fuga,
                        porro sed atque dolores magnam quibusdam suscipit repudiandae temporibus esse ad provident quos
                        distinctio similique! Dolore placeat impedit totam delectus magnam, rerum voluptas iste, neque
                        debitis necessitatibus natus praesentium quam tempora itaque dignissimos laborum maxime?</p>
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
