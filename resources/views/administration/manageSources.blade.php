@extends('layout.app')
@section('content')
<!-- @push('style')
<link rel="stylesheet" href="{{asset('css/table.css')}}">
@endpush -->
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="slim-pagetitle"> Manage Sources </h6>
        </div>

        <div class="table-widget">
            <table id="managesources">
                <caption>
                    Team Members
                    <span class="table-row-count"></span>
                </caption>
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Source Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>

        </div>

    </div>

</div>
@endsection
@push('scripts')
<script src="{{asset('js/ajax.js')}}"></script>
@endpush
