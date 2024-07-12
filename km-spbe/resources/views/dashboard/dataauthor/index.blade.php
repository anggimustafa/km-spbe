@extends('layouts.app')

@section('container')
    @role('verifikator')
        <h1 class="fs-1 fw-bold text-center bg-secondary text-light mb-3 rounded">{{ $users->first()->opd->nama_opd }}</h1>
        <div class="main-body">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
                @foreach ($users as $user)
                    <div class="col mb-3">
                        <div class="card">
                            <img src="https://picsum.photos/340/120" alt="Cover" class="card-img-top">
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
                            <div class="card-footer">
                                <button class="btn btn-light btn-sm bg-white has-icon btn-block" type="button">Total
                                    Postingan</button>
                                <button class="btn btn-light btn-sm bg-white has-icon ml-2"
                                    type="button">{{ $user->posts_count }}</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endrole
    @role('admin')
        @foreach ($grupUsers as $opdName => $users)
            <h1 class="fs-1 fw-bold text-center bg-secondary text-light mb-3 rounded">{{ $opdName }}</h1>
            <div class="main-body">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm">
                    @foreach ($users as $user)
                        <div class="col mb-3">
                            <div class="card">
                                <img src="https://picsum.photos/340/120" alt="Cover" class="card-img-top">
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
                                <div class="card-footer">
                                    @if ($user->hasRole('author'))
                                        <button class="btn btn-light btn-sm bg-white has-icon btn-block" type="button">Total
                                            Postingan</button>
                                        <button class="btn btn-light btn-sm bg-white has-icon ml-2"
                                            type="button">{{ $user->posts_count }}</button>
                                    @endif
                                    <span
                                        class="ml-2 p-2 rounded
                                        {{ $user->hasRole('author')
                                            ? 'bg-info text-light'
                                            : ($user->hasRole('verifikator')
                                                ? 'bg-danger text-light'
                                                : '') }}">
                                        {{ $user->getRoleNames()->join(', ') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    @endrole
@endsection
