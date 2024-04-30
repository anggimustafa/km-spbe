@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <form action="" method="post">
                <div class="mb-4">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="email" class="form-control rounded" id="judul" aria-describedby="emailHelp"
                        style="">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-4">
                    <label for="kategori" class="form-label">Kategori Pengetahuan</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih kategori pengetahuan</option>
                        <option value="1">Tata Kelola</option>
                        <option value="2">Manajemen</option>
                        <option value="3">Layanan</option>
                        <option value="4">Infrastruktur</option>
                        <option value="5">Aplikasi</option>
                        <option value="6">Keamanan</option>
                        <option value="7">Audit TIK</option>
                    </select>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Objek Pengetahuan (Utama)</label>
                    <input class="form-control p-2 rounded" type="file" id="formFile">
                </div>
                <div class="mb-4">
                    <label class="form-label">Isi Artikel (Body)</label>
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 1)</label>
                    <input class="form-control p-2 rounded" type="file" id="formFile">
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 2)</label>
                    <input class="form-control p-2 rounded" type="file" id="formFile">
                </div>
                <div class="mb-4">
                    <label for="formFile" class="form-label">Objek Pengetahuan (Pendukung 3)</label>
                    <input class="form-control p-2 rounded" type="file" id="formFile">
                </div>
                <div class="mb-4">
                    <label for="kasus" class="form-label">Contoh Kasus</label>
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x"></trix-editor>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-4">
                    <Label>Sifat Postingan : </Label>
                    <div class="btn-group m-3" role="group" aria-label="Basic radio toggle button group">
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
@endsection
