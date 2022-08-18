@extends('admin.layouts.master') @section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <br>
            <hr>
            <br>
        </div>
        
        @if(isset($settings->logo))
        <div class="col-md-6">
            <img src="{{ asset('frontend/assets/img/settings/logo/'.$settings->logo)}}" alt="Logo image">
        </div>
        @endif

        <div class="col-md-6">
            <div class="form-group">
                <label for="facebook">Facebook Link</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="@if(isset($settings->facebook)) {{$settings->facebook}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="twitter">Twitter Link</label>
                <input type="text" name="twitter" id="twitter" class="form-control" value="@if(isset($settings->twitter)) {{$settings->twitter}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="vimeo">Vimeo Link</label>
                <input type="text" name="vimeo" id="vimeo" class="form-control" value="@if(isset($settings->vimeo)) {{$settings->vimeo}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="googleplus">Google Plus Link</label>
                <input type="text" name="googleplus" id="googleplus" class="form-control" value="@if(isset($settings->googleplus)) {{$settings->googleplus}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="youtube">Youtube Link</label>
                <input type="text" name="youtube" id="youtube" class="form-control" value="@if(isset($settings->youtube)) {{$settings->youtube}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" cols="30" rows="1">@if(isset($settings->address)) {{$settings->address}} @endif</textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="@if(isset($settings->phone)) {{$settings->phone}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" id="fax" class="form-control" value="@if(isset($settings->fax)) {{$settings->fax}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="@if(isset($settings->email)) {{$settings->email}} @endif">
            </div>
        </div>


    </div>



</section>

@endsection