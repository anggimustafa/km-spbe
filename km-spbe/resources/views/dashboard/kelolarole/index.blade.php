@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <table id="example" class="table table-striped" style="width:100%">
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
                                    <div class="modal-body d-flex justify-center">
                                        <form action="{{ route('change.role', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-around">
                                                <button name="role" value="author"
                                                    class="btn btn-info text-light">Author</button>
                                                <div class="btn"><i
                                                        class="fa-solid fa-angles-right fa-beat-fade fa-2xl"></i></div>
                                                <button name="role" value="verifikator"
                                                    class="btn btn-success">Verifikator</button>
                                                <div class=""><button type="submit" name="role"
                                                        value="verifikator" class="btn btn-primary">Ubah</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
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
@endsection
