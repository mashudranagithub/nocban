@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Partner Update</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-partners') }}"> Back</a>
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
<form action="{{ route('update-partner', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <h3>Partner edit form</h3>
            <hr>
        </div>
        <div class="col-xs-3 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Partner Type</strong>
                <select name="type" id="type" class="form-control">
                    <option @if($partner->link == "links") selected @endif value="links">Link</option>
                    <option @if($partner->link == "olympic") selected @endif value="olympic">Olympic partmer</option>
                </select>
            </div>
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4">
            <div class="form-group">
                <label for="image">Partner Image</label>
                <input name="image" type="file" id="image" class="form-control">
            </div>
        </div>
        <div class="col-xs-3 col-sm-12 col-md-3">
            @if($partner->image)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img src="{{ asset('frontend/assets/img/partners/'.$partner->type.'/'.$partner->image)}}" alt="partner image">
            </div>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Partner Link</strong>
                <input type="text" name="link" class="form-control" value="{{$partner->link}}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection