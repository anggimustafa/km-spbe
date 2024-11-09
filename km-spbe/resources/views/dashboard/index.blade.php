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
                                @if ($notify->slug)
                                    @if ($notify->type == 'Unverify Post')
                                        <div class="col-2"><a
                                                href="/dashboard/unverify/{{ $notify->slug }}?notifId={{ $notify->id }}">{{ $notify->is_read ? 'Terbaca' : 'Belum dibaca' }}</a>
                                        </div>
                                    @endif

                                    @if ($notify->type == 'Verified Post')
                                        <div class="col-2"><a
                                                href="/dashboard/verified/{{ $notify->slug }}?notifId={{ $notify->id }}">{{ $notify->is_read ? 'Terbaca' : 'Belum dibaca' }}</a>
                                        </div>
                                    @endif

                                    @if ($notify->type == 'Diskusi Post')
                                        <div class="col-2"><a
                                                href="/dashboard/indiscussion/{{ $notify->slug }}?notifId={{ $notify->id }}">{{ $notify->is_read ? 'Terbaca' : 'Belum dibaca' }}</a>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-2"><a
                                            href="/dashboard?notifId={{ $notify->id }}">{{ $notify->is_read ? 'Terbaca' : 'Belum dibaca' }}</a>
                                    </div>
                                @endif

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
                        @role('admin')
                            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                <div class="mb-3 mb-sm-0">
                                    <h2 class="card-title fw-semibold">Statistik Postingan</h2>
                                </div>
                            </div>
                            <div id="chart"></div>
                        @endrole
                        @role('verifikator')
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card text-white bg-dark mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-user fa-xl py-3 pe-4"></i> Total Author
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $author_opd }}</h5>
                                                <p class="card-text">Jumlah author pada OPD yang sama.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-comments fa-xl py-3 pe-3"></i> Total Postingan Didiskusikan
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post_diskusi }}</h5>
                                                <p class="card-text">Jumlah total artikel yang sedang didiskusikan.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card text-white bg-success mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-check-circle fa-xl py-3 pe-4"></i> Total Postingan Diverifikasi
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post_opd }}</h5>
                                                <p class="card-text">Jumlah total artikel yang telah diverifikasi.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endrole
                        @role('author')
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card text-white bg-info mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-pencil-alt fa-xl py-3 pe-4"></i> Total Postingan Dibuat
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post_dibuat }}</h5>
                                                <p class="card-text">Jumlah total artikel yang telah dibuat.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card text-white bg-warning mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-comments fa-xl py-3 pe-3"></i> Total Postingan Didiskusikan
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post_diskusi }}</h5>
                                                <p class="card-text">Jumlah total artikel yang sedang didiskusikan.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card text-white bg-success mb-3">
                                            <div class="card-header">
                                                <i class="fas fa-check-circle fa-xl py-3 pe-4"></i> Total Postingan Diverifikasi
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post_diverif }}</h5>
                                                <p class="card-text">Jumlah total artikel yang telah diverifikasi.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endrole
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
                                                    @if ($notif)
                                                        <span class="badge text-bg-danger">{{ $notif }}</span>
                                                    @endif
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
                                        <p class="fs-5 fw-bold mt-2">{{ $user->opd->nama_opd }}</p>
                                        <small>Riwayat OPD: <br>
                                            @foreach ($riwayatopds as $opd)
                                                {{ $opd['nama_opd'] }}
                                                <br>
                                            @endforeach
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @role('admin')
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
                    @endrole
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center mt-5">
            <hr>
            <p class="mb-0 fs-4 mt-2">Developed by <a href="https://github.com/anggimustafa" target="_blank"
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
