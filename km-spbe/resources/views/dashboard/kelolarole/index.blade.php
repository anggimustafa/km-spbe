@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <table id="example" class="table table-row-border" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>OPD</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nip }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->opd->nama_opd }}</td>
                            <td>
                                {{ $user->getRoleNames()->join(', ') }}
                            </td>
                            <td>
                                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#roleModal-{{ $user->id }}">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Modal for changing role -->
                        <div class="modal fade" id="roleModal-{{ $user->id }}" tabindex="-1"
                            aria-labelledby="roleModalLabel-{{ $user->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-center" id="roleModalLabel-{{ $user->id }}">
                                            Ubah Role untuk {{ $user->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="/dashboard/ubah-role" method="POST">
                                        <div class="modal-body d-flex justify-center">
                                            @csrf
                                            <div class="d-flex justify-content-around">
                                                @if ($user->getRoleNames()->join(', ') == 'author')
                                                    <div class="btn btn-info text-light">
                                                        Author
                                                    </div>
                                                    <div class="btn"><i
                                                            class="fa-solid fa-angles-right fa-beat-fade fa-2xl"></i></div>
                                                    <div class="btn btn-danger">
                                                        Verifikator
                                                    </div>
                                                    <input type="hidden" name="role" value="verifikator">
                                                @else
                                                    <div class="btn btn-danger">
                                                        Verifikator
                                                    </div>
                                                    <div class="btn"><i
                                                            class="fa-solid fa-angles-right fa-beat-fade fa-2xl"></i></div>
                                                    <div class="btn btn-info text-light">
                                                        Author
                                                    </div>
                                                    <input type="hidden" name="role" value="author">
                                                @endif
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>OPD</th>
                        <th>Role</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    @if (session()->has('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Role telah diubah.",
                icon: "success"
            });
        </script>
    @endif
@endsection
