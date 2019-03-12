<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Info Barang</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <!-- Main CSS-->
    <link href="{{ asset('css/util.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/table.css') }}" rel="stylesheet" media="all">
</head>
<style>
    table tbody {
        display: block;
        max-height: 450px;
        overflow-y: scroll;
    }

    table thead,
    table tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    td:first-child,
    th:first-child {
        width: 100px;
    }
</style>

<body>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        @if (Request::is('merk/*'))
                        <thead>
                            <tr class="table100-head">
                                <th>#</th>
                                <th>Nama Merk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merk as $k)
                            <tr>
                                <td>{{ $k->id_merek }}</td>
                                <td>{{ $k->nama_merek }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <thead>
                        <tr class="table100-head">
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th style="width: 80px;">Stok</th>
                            <th style="width: 110px;">Harga</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $k)
                        <tr>
                            <td>{{ $k->id_barang }}</td>
                            <td>{{ $k->nama_barang }}</td>
                            <td style="width: 100px;">{{ $k->stok }}</td>
                            <td style="width: 110px;">{{ $k->harga }}</td>
                            <td>{{ $k->deskripsi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/table.js') }}"></script>

</body>

</html>
