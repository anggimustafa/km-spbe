@extends('layouts.app')

@section('container')
    <div class="container-fluid row">
        <div class="col-lg-6 border shadow rounded mx-3 mt-4">
            <div class="container mt-5">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column comment-section">
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle" src="../img/admin.png"
                                        width="60">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span
                                            class="d-block font-weight-bold name">Marry Andrews</span><span
                                            class="date text-black-50">Shared publicly - Jan 2020</span></div>
                                </div>
                                <div class="mt-2">
                                    <p class="comment-text rata-kiri-kanan">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex flex-row fs-12 my-2">
                                    <a href="detail" class="btn btn-outline-info">Ke Postingan Terkait</a>
                                </div>
                            </div>
                            <div class="bg-light p-2">
                                <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                        src="../img/author.jpg" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea"></textarea>
                                </div>
                                <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none me-2"
                                        type="button">Post comment</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 border shadow rounded mx-3 mt-4">
            <div class="container mt-5">
                <div class="row  d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h3 class="fs-5">Comment (4)</h3>
                        </div>
                        <div class="card p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="../img/author.jpg" width="30" class="user-img rounded-circle me-2">
                                    <span>
                                        <h6 class="font-weight-bold text-primary">james_olesenn</h6>
                                        <small class="font-weight-bold">Hmm, This poster looks cool</small>
                                    </span>
                                </div>
                                <small>2 days ago</small>
                            </div>
                            <div class="action d-flex justify-content-between mt-2 align-items-center">
                                <div class="reply px-4">
                                    <small>Remove</small>
                                    <span class="dots"></span>
                                    <small>Reply</small>
                                    <span class="dots"></span>
                                    <small>Translate</small>
                                </div>
                                <div class="icons align-items-center">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-check-circle-o check-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="../img/author.jpg" width="30" class="user-img rounded-circle me-2">
                                    <span><small class="font-weight-bold text-primary">olan_sams</small> <small
                                            class="font-weight-bold">Loving your work and profile! </small></span>
                                </div>
                                <small>3 days ago</small>
                            </div>
                            <div class="action d-flex justify-content-between mt-2 align-items-center">
                                <div class="reply px-4">
                                    <small>Remove</small>
                                    <span class="dots"></span>
                                    <small>Reply</small>
                                    <span class="dots"></span>
                                    <small>Translate</small>
                                </div>
                                <div class="icons align-items-center">
                                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="../img/author.jpg" width="30" class="user-img rounded-circle me-2">
                                    <span><small class="font-weight-bold text-primary">rashida_jones</small> <small
                                            class="font-weight-bold">Really cool Which filter are you using? </small></span>
                                </div>
                                <small>3 days ago</small>
                            </div>
                            <div class="action d-flex justify-content-between mt-2 align-items-center">
                                <div class="reply px-4">
                                    <small>Remove</small>
                                    <span class="dots"></span>
                                    <small>Reply</small>
                                    <span class="dots"></span>
                                    <small>Translate</small>
                                </div>
                                <div class="icons align-items-center">
                                    <i class="fa fa-user-plus text-muted"></i>
                                    <i class="fa fa-star-o text-muted"></i>
                                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card p-3 mt-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user d-flex flex-row align-items-center">
                                    <img src="../img/author.jpg" width="30" class="user-img rounded-circle me-2">
                                    <span><small class="font-weight-bold text-primary">simona_rnasi</small> <small
                                            class="font-weight-bold text-primary">@macky_lones</small> <small
                                            class="font-weight-bold text-primary">@rashida_jones</small> <small
                                            class="font-weight-bold">Thanks </small></span>
                                </div>
                                <small>3 days ago</small>
                            </div>
                            <div class="action d-flex justify-content-between mt-2 align-items-center">
                                <div class="reply px-4">
                                    <small>Remove</small>
                                    <span class="dots"></span>
                                    <small>Reply</small>
                                    <span class="dots"></span>
                                    <small>Translate</small>
                                </div>
                                <div class="icons align-items-center">
                                    <i class="fa fa-check-circle-o check-icon text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
