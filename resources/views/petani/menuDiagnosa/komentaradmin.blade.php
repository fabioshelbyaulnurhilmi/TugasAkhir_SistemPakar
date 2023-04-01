@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Komentar Untuk Admin</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 15%;">ID Petani</th>
                        <th class="text-center" style="width: 15%">Nama Petani</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 35%;">Nilai</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 35%;">Saran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm">Petani - 38239240</td>
                        <td class="fw-normal fs-sm text-center">Suteno</td>
                        <td class="fw-normal fs-sm text-center" style="text-align: justify">
                            <div class="js-rating" data-score="3" style="cursor: pointer;">
                                </i>&nbsp;<i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!">
                                </i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!">
                                </i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!">
                                </i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!">
                                </i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!">
                                </i><input name="score" type="hidden" value="3">
                            </div>
                        <td class="fw-normal fs-sm text-center">Sudah Bagus namun masih perlu di perbaiki servernya</td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Komentar tentang aplikasi</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-1">
                            <label class="form-label" for="example-select">Berikan Penilaian untuk Aplikasi</label>
                            <select class="form-select" id="example-select" name="example-select">
                                <option selected>-- Pilih Nilai --</option>
                                <option value="1">*Sangat Buruk</option>
                                <option value="2">**Buruk</option>
                                <option value="3">***Cukup</option>
                                <option value="4">****Baik</option>
                                <option value="5">*****Sangat Baik</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label class="form-label" for="example-textarea-input">Saran untuk Aplikasi</label>
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder=""></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
                        <i class="fa fa-fw fa-paper-plane me-1"></i> Kirim Komentar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
