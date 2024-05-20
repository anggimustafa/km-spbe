@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <form action="{{ route('dashboard.store') }}" method="post">
                @csrf
                <div class="mb-5 bg-info bg-opacity-10 border border-end-0 border-info rounded p-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control rounded" id="judul" name="judul"
                        aria-describedby="emailHelp" style="">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    <label for="judul" class="form-label">Slug</label>
                    <input type="text" class="form-control rounded" id="slug" name="slug"
                        aria-describedby="emailHelp" style="" readonly>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-5 bg-info bg-opacity-10 border border-start-0 border-info rounded p-3">
                    <label for="kategori" class="form-label">Kategori Pengetahuan</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endforeach
                    </select>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="row mb-5 bg-info bg-opacity-10 border border-end-0 border-info rounded p-3">
                    <div class="col-lg-6">
                        <label for="formFile" class="form-label">Objek Pengetahuan (Utama)</label>
                        <input class="form-control p-2 rounded" type="file" id="formFile" name="fileUtama">
                    </div>
                    <div class="col-lg-6">
                        <label for="kategori" class="form-label">Tipe Objek</label>
                        <select class="form-select" name="tipeObjekUtama">
                            <option value="Pedoman">Pedoman</option>
                            <option value="E-Book">E-Book</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Regulasi">Regulasi</option>
                            <option value="Infografis">Infografis</option>
                            <option value="Video">Video</option>
                        </select>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="mb-5 bg-light bg-opacity-10 border border-start-0 border-info rounded p-3">
                    <label class="form-label">Isi Artikel (Body)</label>
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                </div>
                <div class="row mb-5 bg-info bg-opacity-10 border border-end-0 border-info rounded p-3">
                    <div class="col-lg-6">
                        <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 1)</label>
                        <input class="form-control p-2 rounded" type="file" id="formFile" name="filePendukung1">
                    </div>
                    <div class="col-lg-6">
                        <label for="kategori" class="form-label">Tipe Objek</label>
                        <select class="form-select" name="tipeObjekPendukung1">
                            <option value="Pedoman">Pedoman</option>
                            <option value="E-Book">E-Book</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Regulasi">Regulasi</option>
                            <option value="Infografis">Infografis</option>
                            <option value="Video">Video</option>
                        </select>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="row mb-5 bg-info bg-opacity-10 border border-end-0 border-info rounded p-3">
                    <div class="col-lg-6">
                        <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 2)</label>
                        <input class="form-control p-2 rounded" type="file" id="formFile" name="filePendukung2">
                    </div>
                    <div class="col-lg-6">
                        <label for="kategori" class="form-label">Tipe Objek</label>
                        <select class="form-select" name="tipeObjekPendukung2">
                            <option value="Pedoman">Pedoman</option>
                            <option value="E-Book">E-Book</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Regulasi">Regulasi</option>
                            <option value="Infografis">Infografis</option>
                            <option value="Video">Video</option>
                        </select>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="mb-5 bg-light bg-opacity-10 border border-start-0 border-info rounded p-3">
                    <label for="kasus" class="form-label">Contoh Kasus</label>
                    <input id="kasus" type="hidden" name="kasus">
                    <trix-editor input="kasus"></trix-editor>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-5 bg-info bg-opacity-10 border border-bottom-0 border-info rounded p-3">
                    <Label>Sifat Postingan : </Label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="is_public" id="btnradio1" autocomplete="off"
                            value="true">
                        <label class="btn btn-outline-success" for="btnradio1">Public</label>

                        <input type="radio" class="btn-check" name="is_public" id="btnradio2" autocomplete="off"
                            value="false">
                        <label class="btn btn-outline-danger" for="btnradio2">Private</label>
                    </div>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector("#judul");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });


        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
