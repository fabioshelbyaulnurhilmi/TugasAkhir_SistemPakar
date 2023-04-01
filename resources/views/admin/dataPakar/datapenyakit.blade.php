@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-penyakit') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">Kode Penyakit</th>
                        <th class="text-center" style="width: 30%">Nama Penyakit</th>
                        <th class="text-center" style="width: 30%">Keterangan</th>
                        <th class="text-center" style="width: 30%">Solusi</th>
                        <th class="text-center" style="width: 15%;">Gambar</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($penyakit as $key)
                        <tr>
                            <td class="text-center fs-sm">{{ $key->idPenyakit }}</td>
                            <td class="fw-normal fs-sm"> {{ $key->namaPenyakit }}</td>
                            <td class="fw-normal fs-sm" style="text-align: justify"> {{ $key->keterangan }}</td>
                            <td class="fw-normal fs-sm" style="text-align: justify">{{ $key->solusi }}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambar) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-penyakit', $key->key) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('delete-data-penyakit', $key->id) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="Delete" data-bs-original-title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
