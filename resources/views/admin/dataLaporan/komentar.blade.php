@extends('layouts.main')
@section('page')
<div class="block block-rounded">
    <div class="block-header block-header-default" style="padding-bottom: 25px">
        {{-- <button type="button" class="btn btn-alt-success me-1 mb-1">
            <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
        </button> --}}
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
        <thead>
          <tr>
            <th class="text-center" style="width: 15%;">ID Petani</th>
            <th class="text-center" style="width: 15%">Nama Petani</th>
            <th class="text-center" style="width: 15%">Nilai</th>
            <th class="text-center" style="width: 40%">Saran</th>
            <th class="text-center" style="width: 15%;">Aksi</th>
          </tr>
        </thead>
        <tbody>
      <tr>
        <td class="fs-sm text-center">Petani01</td>
        <td class="fw-normal fs-sm text-center"> Sukimin</td>
        <td class="fw-normal fs-sm text-center" style="text-align: justify">
            <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1"
                class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i
                data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i
                data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i
                data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3">
            </div>
        <td class="fw-normal fs-sm text-center">Sudah Bagus</td>
        </td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                    <i class="fa fa-fw fa-trash"></i>
                </button>
            </div>
        </td>
      </tr>
      <tr>
        <td class="fs-sm text-center">Petani02</td>
        <td class="fw-normal fs-sm text-center"> Jaimin</td>
        <td class="fw-normal fs-sm text-center" style="text-align: justify">
            <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1"
                class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i
                data-alt="3" class="fa fa-fw fa-star text-muted" title="It’s ok!"></i>&nbsp;<i
                data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i
                data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3">
            </div>
        <td class="fw-normal fs-sm text-center">Kurang Bagus</td>
        </td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                    <i class="fa fa-fw fa-trash"></i>
                </button>
            </div>
        </td>
      </tr>

        </tbody>
      </table>
    </div>
  </div>
@endsection
