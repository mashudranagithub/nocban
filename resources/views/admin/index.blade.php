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
        <div class="col-md-6">
            @if(isset($settings->logo))
            <img src="{{ asset('frontend/assets/img/settings/'.$settings->logo)}}" alt="Logo image">
            @endif
        </div>

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
                <label for="linkedin">Linkedin Link</label>
                <input type="text" name="linkedin" id="linkedin" class="form-control" value="@if(isset($settings->linkedin)) {{$settings->linkedin}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="instagram">Instagram Link</label>
                <input type="text" name="instagram" id="instagram" class="form-control" value="@if(isset($settings->instagram)) {{$settings->instagram}} @endif">
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
                <label for="office_time">Office Hour/Time</label>
                <textarea name="office_time" id="office_time" class="form-control" cols="30" rows="1">@if(isset($settings->office_time)) {{$settings->office_time}}  @endif</textarea>
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
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="@if(isset($settings->email)) {{$settings->email}} @endif">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="@if(isset($settings->mobile)) {{$settings->mobile}} @endif">
            </div>
        </div>


    </div>



</section>

@endsection