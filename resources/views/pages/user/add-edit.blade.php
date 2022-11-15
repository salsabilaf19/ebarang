@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Pengguna' : 'Create Pengguna' )

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
<link href="{{ mix('assets/css/custom/radio-boxed.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('user.update', $data->id) : route('user.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    @csrf
    @if(isset($data))
    {{ method_field('PUT') }}
    @endif

    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <h4 class="panel-title">Form @yield('title')</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="fullname" name="fullname" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->fullname ?? old('fullname') }}}">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" id="email" name="email" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->email ?? old('email') }}}">
            </div>
            <div class="form-group">
                <label for="name">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" autofocus data-parsley-required="{{{ isset($data) ? 'false' : 'true' }}}" value="{{ old('password') }}">
                @if(isset($data))
                <small class="text-red">*Kosongkan bila tidak ada perubahan</small>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" autofocus data-parsley-required="{{{ isset($data) ? 'false' : 'true' }}}" value="">
            </div>
            <div class="form-group">
                <label for="name">Pengguna ini seorang admin?</label>
                <select name="isAdmin" class="form-control">
                    <option value="0" {{{ old('isAdmin') == 0 || (isset($data) && $data->isAdmin == 0) ? 'selected': '' }}}>Tidak</option>
                    <option value="1" {{{ old('isAdmin') == 1 || (isset($data) && $data->isAdmin == 1) ? 'selected': '' }}}>Ya</option>
                </select>
            </div>
        </div>
        <!-- end panel-body -->
        <!-- begin panel-footer -->
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
        <!-- end panel-footer -->
    </div>
    <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
    <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush