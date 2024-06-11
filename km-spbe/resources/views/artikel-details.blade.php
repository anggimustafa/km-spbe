@extends('layouts.main')

@section('body')
    {{-- <!-- Tampilkan gambar jika data_utama adalah gambar -->
    @if ($ext === 'png' || $ext === 'jpeg' || $ext === 'jpg')
        <img src="{{ $data_utama }}" alt="Gambar Utama">
        <!-- Tampilkan file PDF jika data_utama adalah PDF -->
    @elseif ($ext === 'pdf')

        <!-- Tampilkan pesan kesalahan jika ekstensi file tidak didukung -->
    @else
        <p>{{ $error }}</p>
    @endif --}}

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
                        &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-key"></i> : {{ $post->is_public ? 'Public' : 'Private' }}
                    </small>
                </div>
            </div>
        </div>
        <div class="main-area">
            <div class="container-objek-utama mb-3">
                <h5 class="text-light mb-3">Objek Pengetahuan Utama</h5>
                @if ($ext == 'pdf')
                    {!! $data_utama !!}
                @else
                    <img src="{{ $data_utama }}" alt="" width="100%" height="600px" style="border-radius:10px">
                @endif
            </div>
            <div class="isi">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi alias accusamus quod in, rerum provident
                    exercitationem quae sint deserunt pariatur itaque, obcaecati cumque, vitae debitis. Molestiae, dicta!
                    Incidunt, vitae exercitationem necessitatibus nihil est nam, veritatis, error iure praesentium dolorum
                    provident sequi! Quibusdam inventore totam error reiciendis vero ad necessitatibus quos ut maiores.
                    Consectetur ex sint provident est cupiditate, illo excepturi earum ipsam omnis rerum neque architecto,
                    harum reiciendis natus suscipit. Laborum amet exercitationem non officia aliquam, quibusdam expedita
                    minima ipsum temporibus ipsa saepe nobis sunt error! Ipsam facilis deleniti, veniam ducimus beatae
                    corporis? Quisquam, quae ab! Veritatis atque eius libero! Atque velit impedit, modi quaerat veritatis
                    alias ipsa iusto animi nostrum, illum molestias ab? Iste, et totam. Quasi molestiae, corrupti tempore
                    esse rem ad, molestias at quisquam quia laboriosam voluptates saepe asperiores explicabo temporibus
                    tenetur vero alias! Impedit labore ea, nam officiis tempore accusantium error doloremque molestias.
                    Excepturi ab minus labore doloremque quisquam adipisci non, dolores, placeat, ullam quo quibusdam illo
                    corrupti exercitationem recusandae accusantium! Exercitationem ratione eaque vel repellat molestiae.
                    Illum veritatis eum quaerat cumque ipsa perspiciatis odio fugiat tempora? Dolorum consequatur nihil quis
                    eligendi laudantium et tempore iure dolor aliquid beatae? Fugit porro saepe repellat excepturi pariatur,
                    atque iure asperiores fuga voluptatum neque, laborum labore voluptatibus amet natus ducimus odio at?
                    Cumque tempora ducimus recusandae, at unde asperiores beatae quasi! Quod deleniti mollitia dolore
                    sapiente vero earum numquam minus cum provident molestiae, sit expedita non ipsa voluptatum rem fugiat
                    quaerat autem obcaecati veniam eum fuga nisi laborum deserunt! Ducimus maiores officiis iusto, odit
                    aspernatur similique magnam quod nulla sint eos fugiat doloribus minus nobis consectetur officia eaque
                    non fugit asperiores est sapiente labore perferendis ratione repudiandae? Laudantium debitis eaque omnis
                    dolorum inventore corrupti ea hic porro quis doloribus, obcaecati ab fugiat necessitatibus sunt aliquid!
                    Odio nisi id adipisci?</p>

                <div class="container-objek-pendukung mb-3">
                    <h6 class=" mb-3">Objek Pengetahuan Pendukung</h6>
                    <img src="../assets/images/banner-item-03.jpg" alt="" style="border-radius:10px">
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
@endsection()
