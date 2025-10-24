@extends('layouts.app', ['title' => 'Data Pasien'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Dosen</div>
                <div class="card-body">
                    <h3>Data pasien</h3>
                    <div class="row mb-3 mt-3">
                        <div class="col-md-6">
                            <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                        </div>
                    </div>

                    <form action="">
                        <input type="text" name="cari" id="" placeholder="search">
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosen as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td> {{ $item->no_hp }} </td>
                                <td> {{ $item->created_at }} </td>
                                <td> {{ $item->updated_at }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $dosen->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
