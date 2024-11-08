@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <form id="myForm" action="/dashboard/update/{{ $post->slug }}" method="post">
                @method('put')
                @csrf
                <div class="mb-5 bg-info bg-opacity-10 border border-top-0 border-info rounded p-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control rounded @error('judul') is-invalid @enderror" id="judul"
                        name="judul" aria-describedby="emailHelp" style="" value="{{ old('judul', $post->judul) }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="judul" class="form-label">Slug</label>
                    <input type="text" class="form-control rounded @error('slug') is-invalid @enderror" id="slug"
                        name="slug" aria-describedby="emailHelp" style="" readonly
                        value="{{ old('slug', $post->slug) }}">
                    <div id="Help" class="form-text">Slug akan diisi otomatis sesusai dengan judul.</div>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5 bg-info bg-opacity-10 border border-start-0 border-info rounded p-3">
                    <label for="kategori" class="form-label">Kategori Pengetahuan</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value={{ $category->id }} selected>{{ $category->nama_kategori }}</option>
                            @else
                                <option value={{ $category->id }}>{{ $category->nama_kategori }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div id="Help" class="form-text">Pilih salah satu kategori pengetahuan.</div>
                </div>
                <div class="row mb-5 bg-info bg-opacity-10 border border-end-0 border-info rounded p-3">
                    <div class="col-lg-6">
                        <label for="formFile" class="form-label">Objek Pengetahuan (Utama)</label>
                        <input class="form-control p-2 rounded" type="file" id="formFile" name="fileUtama">
                        @error('fileUtama')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
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
                    </div>
                    <div id="Help" class="form-text text-center">Upload objek pengetahuan dan tentukan tipe
                        objeknya.(Wajib)
                    </div>
                </div>
                <div class="row mb-5 bg-secondary bg-opacity-10 border border-end-0 border-dark rounded p-3">
                    <div class="col-lg-6">
                        <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 1)</label>
                        <input class="form-control p-2 rounded" type="file" id="formFile" name="filePendukung1">
                        @error('filePendukung1')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
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
                    </div>
                    <div id="Help" class="form-text text-center">Upload objek pengetahuan dan tentukan tipe
                        objeknya.(Optional)
                    </div>
                </div>
                <div class="mb-5 bg-info bg-opacity-10 border border-bottom-0 border-info rounded p-3">
                    <label class="form-label">Isi Artikel (Body)</label>
                    @error('body')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="body"></trix-editor>
                    <div id="emailHelp" class="form-text">Paparkan pembahasan pengetahuan.</div>
                </div>
                <div class="mb-5 bg-info bg-opacity-10 border border-top-0 border-info rounded p-3">
                    <label for="kasus" class="form-label">Contoh Kasus</label>
                    @error('kasus')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                    <input id="kasus" type="hidden" name="kasus" value="{{ old('kasus', $post->kasus) }}">
                    <trix-editor input="kasus"></trix-editor>
                    <div id="emailHelp" class="form-text">Berikan contoh kasus yang berkaitan.</div>
                </div>
                <div class="mb-3 bg-info bg-opacity-10 border border-bottom-0 border-info rounded p-3">
                    <Label>Sifat Postingan : </Label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="is_public" id="btnradio1" autocomplete="off"
                            value="true">
                        <label class="btn btn-outline-success" for="btnradio1">Public</label>

                        <input type="radio" class="btn-check" name="is_public" id="btnradio2" autocomplete="off"
                            value="false">
                        <label class="btn btn-outline-danger" for="btnradio2">Private</label>
                    </div>
                    @error('is_public')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <small>Background <span class="badge text-bg-info">Biru</span> = Wajib Isi</small><br>
                <small>Background <span class="badge text-bg-secondary">Abu</span> = Optional</small>
                <button type="submit" class="btn btn-primary col-12 mt-3">Update</button>
            </form>
            <script>
                document.getElementById('myForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: "Are you sure you want to submit?",
                        showCancelButton: true,
                        confirmButtonText: "Yes, submit it!",
                        cancelButtonText: "Cancel",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            </script>
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


        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // });
    </script>
@endsection
