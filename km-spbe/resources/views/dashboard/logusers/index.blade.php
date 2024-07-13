@extends('layouts.app')

@section('container')
    <div class="container-fluid">
        <div class="col-lg-11 shadow p-5 rounded" style="margin:auto">
            <table id="example" class="table table-compact" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>OPD</th>
                        <th>Role</th>
                        <th>Aktivitas</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logUser as $log)
                        <tr>
                            <td>{{ $log->user->name }}</td>
                            <td>{{ $log->user->opd->nama_opd }}</td>
                            <td>{{ $log->user->getRoleNames()->join(', ') }}</td>
                            <td>{{ $log->action }}</td>
                            <td>{{ $log->created_at->format('d F Y') }}</td>
                            <td>{{ $log->created_at->format('H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>OPD</th>
                        <th>Role</th>
                        <th>Aktivitas</th>
                        <th>Hari</th>
                        <th>Jam</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
