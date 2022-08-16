@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Settings Update</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('settings') }}"> Back</a>
    </div>
</section>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('update-settings') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
    <div class="row">
        <div class="col-md-12">
            <h2>Settings Update Form</h2>
            <hr>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            @if(isset($settings->logo))
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img style="margin-bottom: 20px;" src="{{ asset('frontend/assets/img/settings/'.$settings->logo)}}" alt="Logo image">
            </div>
            @endif
            <div class="form-group">
                <label for="logo">Logo Image</label>
                <input name="logo" type="file" id="logo">
                <p class="help-block text-red">Size: maximum size 60px and compress the image from <a target="_blank" href="https://tinypng.com/">here</a> before upload</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="facebook">Facebook Link</label>
                <input type="text" name="facebook" id="facebook" class="form-control" value="@if(isset($settings->facebook)) {{$settings->facebook}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="twitter">Twitter Link</label>
                <input type="text" name="twitter" id="twitter" class="form-control" value="@if(isset($settings->twitter)) {{$settings->twitter}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="vimeo">Vimeo Link</label>
                <input type="text" name="vimeo" id="vimeo" class="form-control" value="@if(isset($settings->vimeo)) {{$settings->vimeo}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="googleplus">Google Plus Link</label>
                <input type="text" name="googleplus" id="googleplus" class="form-control" value="@if(isset($settings->googleplus)) {{$settings->googleplus}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="youtube">Youtube Link</label>
                <input type="text" name="youtube" id="youtube" class="form-control" value="@if(isset($settings->youtube)) {{$settings->youtube}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control" cols="30" rows="2">@if(isset($settings->address)) {{$settings->address}} @endif</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="@if(isset($settings->phone)) {{$settings->phone}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" id="fax" class="form-control" value="@if(isset($settings->fax)) {{$settings->fax}} @endif">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="@if(isset($settings->email)) {{$settings->email}} @endif">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    
</form>
@endsection