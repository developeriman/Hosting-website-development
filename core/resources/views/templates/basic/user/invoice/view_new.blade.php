@extends($activeTemplate . 'layouts.master')

@section('content')
<div class="pt-60 pb-60 bg--light">
    <div class="invoice-container">

        <style>
    @page {
        size: 8.27in 11.7in;
        margin: .5in;
    }

    body {
        font-family: "Maven Pro", sans-serif;
        font-size: 14px;
        line-height: 1.5;
        color: #023047;
    }

    /* Typography */
    .strong {
        font-weight: 700;
    }

    .fw-md {
        font-weight: 500;
    }

    .text-base {
        color: #{{ $general->base_color }};
    }

    .bg-base {
        background: #{{ $general->base_color }};
    }

    h1,
    .h1 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 67px;
        line-height: 1.2;
        font-weight: 500;
    }

    h2,
    .h2 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 50px;
        line-height: 1.2;
        font-weight: 500;
    }

    h3,
    .h3 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 38px;
        line-height: 1.2;
        font-weight: 500;
    }

    h4,
    .h4 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 28px;
        line-height: 1.2;
        font-weight: 500;
    }

    h5,
    .h5 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 20px;
        line-height: 1.2;
        font-weight: 500;
    }

    h6,
    .h6 {
        margin-top: 8px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 1.2;
        font-weight: 500;
    }

    .text-uppercase {
        text-transform: uppercase;
    }

    .text-end {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    /* List Style */
    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /* Utilities */
    .d-block {
        display: block;
    }

    .mt-0 {
        margin-top: 0;
    }

    .m-0 {
        margin: 0;
    }

    .mt-3 {
        margin-top: 16px;
    }

    .mt-4 {
        margin-top: 24px;
    }

    .mb-3 {
        margin-bottom: 16px;
    }

    /* Title */
    .title {
        display: inline-block;
        letter-spacing: 0.05em;
    }

    /* Table Style */
    table {
        width: 7.27in;
        caption-side: bottom;
        border-collapse: collapse;
        border: 1px solid #eafbff;
        color: #023047;
        vertical-align: top;
    }

    table td {
        padding: 5px 15px;
    }

    table th {
        padding: 5px 15px;
    }

    table th:last-child {
        text-align: right !important;
    }

    .table> :not(caption)>*>* {
        padding: 12px 24px;
        background-color: #023047;
        border-bottom-width: 1px;
        box-shadow: inset 0 0 0 9999px #023047;
    }

    .table>tbody {
        vertical-align: inherit;
        border: 1px solid #eafbff;
    }

    .table>thead {
        vertical-align: bottom;
        background: #219ebc;
        color: white;
    }

    .table>thead th {
        text-align: left;
        font-size: 16px;
        letter-spacing: 0.03em;
        font-weight: 500;
    }

    .table td:last-child {
        text-align: right;
    }

    .table th:last-child {
        text-align: right;
    }

    .table> :not(:first-child) {
        border-top: 0;
    }

    .table-sm> :not(caption)>*>* {
        padding: 5px;
    }

    .table-bordered> :not(caption)>* {
        border-width: 1px 0;
    }

    .table-bordered> :not(caption)>*>* {
        border-width: 0 1px;
    }

    .table-borderless> :not(caption)>*>* {
        border-bottom-width: 0;
    }

    .table-borderless> :not(:first-child) {
        border-top-width: 0;
    }

    .table-striped>tbody>tr:nth-of-type(even)>* {
        background: #eafbff;
    }

    .mt-30 {
        margin-top: 30px;
    }

    .text-danger {
        color: red;
    }

    .text-success {
        color: green;
    }

    /* Logo */

    .logo-img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .info {
        display: flex;
        justify-content: space-between;
        padding-top: 15px;
        padding-bottom: 15px;
        border-top: 1px solid #023047;
        border-bottom: 1px solid #023047;
    }

    .address {
        padding-top: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #023047;
    }

    header {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .body {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    footer {
        padding-bottom: 15px;
    }

    .badge {
        display: inline-block;
        padding: 3px 15px;
        font-size: 10px;
        line-height: 1;
        border-radius: 15px;
    }

    .badge--success {
        color: white;
        background: #02c39a;
    }

    .badge--warning {
        color: white;
        background: #ffb703;
    }

    .align-items-center {
        align-items: center;
    }

    .footer-link {
        text-decoration: none;
        color: #219ebc;
    }

    .footer-link:hover {
        text-decoration: none;
        color: #219ebc;
    }

    .list--row {
        overflow: auto
    }

    .list--row::after {
        content: '';
        display: block;
        clear: both;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }

    .d-block {
        display: block;
    }

    .d-inline-block {
        display: inline-block;
    }

    .table tbody tr td {
        font-family: ui-monospace;
    }

    /* //////////////////////////// */

    .table {
        border-color: #dee2e670;
    }

    .table>thead {
        vertical-align: bottom;
        background-color: hsl(var(--base)) !important;
        color: white;
    }

    .table> :not(caption)>*>* {
        background-color: transparent !important;
        box-shadow: none !important;
    }

    .table tbody tr td {
        border-width: 0;
        font-family: ui-monospace;
    }

    .table thead tr th {
        padding: 10px 15px;
    }

    .border--top {
        border-top: 1px solid #dee2e670;
    }

    .table tbody tr td {
        padding: 12px 15px;
    }

    .text-center {
        align-items: center !important;
    }

    .logo img {
        width: 165px;
        height: 35px;
    }

    @media (max-width: 575px) {
        .logo img {
            height: 30px;
        }
    }

    .badge--danger {
        background-color: rgba(234, 84, 85, 0.1);
        border: 1px solid #ea5455;
        color: #ea5455;
    }

    .badge--success {
        background-color: rgba(40, 199, 111, 0.1);
        border: 1px solid #28c76f;
        color: #28c76f;
    }

    .badge--warning {
        background-color: rgba(255, 159, 67, 0.1);
        border: 1px solid #ff9f43;
        color: #ff9f43;
    }

    .badge--dark {
        background-color: rgba(0, 0, 0, 0.1);
        border: 1px solid #000000;
        color: #000000;
    }

    .bg--dark {
        background-color: #081f30 !important;
        color: #fff;
        font-weight: 700;
    }

    tr.even {
        background-color: #{{ $general->base_color }}08 !important;
    }

    .table tbody tr:nth-child(even) {
        background: unset;
    }
    td:nth-child(2) {
        max-width: 200px !important;
    }
    .body{
        overflow-x: auto;
    }
</style>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list--row">
                    <div class="logo float-left">
                        <img src="{{ getImage(getFilePath('logoIcon') . '/dark_logo.png') }}" alt="image"
                            class="logo-img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="body">
                    <div class="text-center mt-4 mb-3">
                    </div>
                            <table class="table table-striped mt-30">
                            <thead>
                                <tr class="bg-base">
                                    <td>@lang('Name')</td>
                                    <td>@lang('Phone')</td>
                                    <td>@lang('Email')</td>
                                    <td>@lang('Product')</td>
                                    <td>@lang('Amount')</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{$data['firstname']}}</td>
                                        <td>{{$data['mobile']}}</td>
                                        <td>{{$data['email']}}</td>
                                        <td>{{$data['product']}}</td>
                                        <td>
                                            {{ showAmount($data['amount']) }}
                                            {{ __($general->cur_text) }}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</main>

        <div class="container mt-3">
            <div class="row gy-4">
                <div class="row gy-4">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        @php
                        session()->put('guest_amount',$data['amount']);
                        @endphp
                        <a href="{{route('payment.confirm')}}" class="btn btn--base payBtn w-100"
                            >@lang('Pay Now')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <style>
        .card {
            border: none;
        }
        .card .table thead tr {
            border: 1px solid hsl(var(--dark));
        }
        .table thead tr {
            background: none;
        }
        .btn--dark:hover {
            background: hsl(var(--dark)) !important;
            color: hsl(var(--white)) !important;
        }
        :disabled {
            cursor: no-drop;
        }
        .invoice-container {
            margin: 15px auto;
            padding: 70px;
            max-width: 850px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        .invoice-container td.total-row {
            background-color: #f8f8f8;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .invoice-container .invoice-status {
            margin: 20px 0 0 0;
            text-transform: uppercase;
            font-size: 24px;
            font-weight: 700;
        }
        @media (max-width: 767px) {
            .invoice-container {
            padding: 20px;
        }
        @media (max-width: 575px) {
            .invoice-container {
            padding: 10px;
        }
        }
    </style>
@endpush
