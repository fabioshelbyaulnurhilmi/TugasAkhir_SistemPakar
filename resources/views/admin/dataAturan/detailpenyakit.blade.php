@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-detailpenyakit') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%">No</th>
                        <th class="text-center" style="width: 10%">Nama Buah</th>
                        <th class="text-center" style="width: 10%">Bagian Terserang</th>
                        <th class="text-center" style="width: 10%"> Nama Penyakit</th>
                        <th class="text-center" style="width: 70%"> Gejala Penyakit</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($detailpenyakit as $key)
                        <tr>
                            <td class="text-center fs-sm text-center">{{ $no++ }} </td>
                            <td class="text-center fs-sm text-center">{{ $key->Buah }} </td>
                            <td class="fw-normal fs-sm text-center">{{ $key->Bagian }}</td>
                            <td class="fw-normal fs-sm text-center" style="text-align: justify">
                                {{ $key->DetailPenyakitToPenyakit->namaPenyakit }}
                            </td>
                            <td class="fw-normal fs-sm text-center " style="text-align: justify">
                                {{ $key->DetailPenyakitToGejala->namaGejala }}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-detail-penyakit', $key->id) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="Edit" data-bs-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{ route('delete-detail-penyakit', $key->id) }}"
                                        class="btn  btn-sm btn-alt-secondary js-bs-tooltip-enabled remove-user">
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
