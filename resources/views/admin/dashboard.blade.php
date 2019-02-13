@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-info">
                <div class="card-header">
                    PRODUK
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$product_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    PEMBELIAN
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$purchase_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-success">
                <div class="card-header">
                   PEMBAYARAN
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$payment_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-info">
                <div class="card-header">
                   MENUNGGU PEMBAYARAN
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$waiting_payment_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-header">
                   PESANAN DIBAYAR
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$purchase_payed_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-info">
                <div class="card-header">
                   PESANAN DALAM PROSES
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$processed_purchase_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-header">
                   PESANAN DALAM PENGIRIMAN
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$shipped_purchase_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-success">
                <div class="card-header">
                   PESANAN SELESAI
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$finished_purchase_count}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card text-white bg-info">
                <div class="card-header">
                   PENGGUNA APLIKASI
                </div>
                <div class="card-body">
                    <h1 class="text-center">
                        {{$user_count}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
