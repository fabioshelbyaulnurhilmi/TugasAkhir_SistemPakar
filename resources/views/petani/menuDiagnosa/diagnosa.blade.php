@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Mulai Diagnosa Tanaman
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div class="row push">
                <div class="col-lg-8 col-xl-5">
                    <div class="mb-1">
                        <label class="form-label">Jenis Tanaman</label>
                        <div class="space-y-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default1"
                                    name="example-radios-default" value="option1">
                                <label class="form-check-label" for="example-radios-default1">Mangga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default2"
                                    name="example-radios-default" value="option2">
                                <label class="form-check-label" for="example-radios-default2">Alpukat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default3"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Rambutan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default4"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Nangka</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default5"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Durian</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default6"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Anggur</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default7"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Kelengkeng</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default8"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Jambu Biji</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default9"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Jeruk</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default10"
                                    name="example-radios-default" value="option3">
                                <label class="form-check-label" for="example-radios-default3">Sawo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-5">
                    <div class="mb-1">
                        <label class="form-label">Bagian Tanaman</label>
                        <div class="space-y-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default11"
                                    name="example-radios-default1" value="option1">
                                <label class="form-check-label" for="example-radios-default11">Buah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default12"
                                    name="example-radios-default1" value="option2">
                                <label class="form-check-label" for="example-radios-default12">Batang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default13"
                                    name="example-radios-default1" value="option3">
                                <label class="form-check-label" for="example-radios-default13">Akar</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="example-radios-default14"
                                    name="example-radios-default1" value="option4">
                                <label class="form-check-label" for="example-radios-default3">Daun</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-5">
                <div class="mb-4">
                    <label class="form-label">Jamur Tanaman Buah</label>
                    <div class="space-y-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-5">
                <div class="mb-5">
                    <label class="form-label">Pilih Gejala</label>
                    <div class="space-y-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default2" name="example-checkbox-default2">
                            <label class="form-check-label" for="example-checkbox-default2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default3" name="example-checkbox-default3">
                            <label class="form-check-label" for="example-checkbox-default3">Option 3</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
                <i class="fa fa-fw fa-rotate me-1"></i> Mulai Diagnosa
            </button>
            <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Tanaman
            </button>
        </div>
    @endsection
