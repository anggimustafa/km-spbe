@extends('layouts.app')

@section('container')
    <div>
        {{-- <div class="nav-item">
            <button type="button" class="nav-link nav-icon-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="ti ti-bell-ringing"></i>
            </button>
        </div> --}}

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Notifikasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        @foreach ($notifies as $notify)
                            <div class="row border rounded py-2 {{ $notify->is_read ? 'bg-light' : 'bg-info-subtle' }}">
                                <div class="col-2">{{ $notify->type }}</div>
                                <div class="col-8">{{ $notify->body }} </div>
                                <div class="col-2">{{ $notify->is_read ? 'Terbaca' : 'Belum dibaca' }}</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="markAllRead">Tandai Semua Terbaca</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h2 class="card-title fw-semibold">Statistik Postingan</h2>
                            </div>
                        </div>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Monthly Earnings -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-10">
                                        <h5 class="card-title mb-9 fw-semibold"> Profil User </h5>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex justify-content-end">
                                            <div class="nav-item btn btn-outline-info">
                                                <button type="button" class="nav-link nav-icon-hover"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ti ti-bell-ringing"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-5">
                                    <div class="card-body text-center">
                                        <div class="d-flex justify-content-center">
                                            <img src="https://avatar.iran.liara.run/public/{{ $user->id }}"
                                                style="width:100px;margin-top:-65px" alt="User"
                                                class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
                                        </div>
                                        <h6 class="card-title">{{ $user->name }}</h6>
                                        <p class="text-secondary mb-1">{{ $user->nip }}</p>
                                        <small class="text-muted font-size-sm">{{ $user->email }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-9 fw-semibold">Postingan Kategori</h5>
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <div id="breakup"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Developed by <a href="https://github.com/anggimustafa" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">Anggi Mustafa</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#markAllRead').on('click', function() {
                $.ajax({
                    url: '{{ route('notifies.markAllRead') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('.modal-body .row').each(function() {
                                $(this).removeClass('bg-info-subtle').addClass(
                                    'bg-light');
                                $(this).find('.col-2:last').text('Terbaca');
                            });
                            alert('Semua notifikasi telah ditandai sebagai terbaca.');
                        }
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection
