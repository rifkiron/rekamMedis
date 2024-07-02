@extends('admin.layouts.master')

@section('title')
    Dashboard | Admin
@endsection

@push('page-styles')
    <style>
        .row {
            display: flex;
            align-items: center;
        }
        .label-col {
            text-align: right;
        }
    </style>
@endpush

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @if (session('update_berhasil'))
                <div class="alert alert-warning alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        <div class="container">
                            <div class="col-12">
                            {{ session('update_berhasil')}}
                            </div>
                        </div>
                    </div>  
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Detail Rekam Medis</h3>
            </div>
            <div class="col-lg-4">
                <hr>
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Data Pasien</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">Id Pasien :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">Nama Pasien :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">Jenis Kelamin :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">Email :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">No Hp :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="col-4 font-weight-bold label-col">Alamat :</div>
                            <div class="col-8">5b1fcf2ba0</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <hr>
                <div class="card">
                    <div class="card-header">
                        <h4>Data Rekam Medis</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
