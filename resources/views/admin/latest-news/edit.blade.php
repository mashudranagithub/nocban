@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">News Update</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-news') }}"> Back</a>
    </div>
    <div class="clear-both">
        <br>
        <br>
        <hr>
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
<form action="{{ route('update-news', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="title" class="required">News Title</label>
                <input name="title" type="text" id="title" class="form-control" required @if($news->title) value="{{$news->title}}" @endif>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="bhw-ckeditor" class="required">News Detail</label>
                <textarea id="bhw-ckeditor" class="form-control" row="5" col="12" name="details">{{$news->details}}</textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="status" class="required">News Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option @if($news->status == 1) selected @endif value="1">Active</option>
                    <option @if($news->status == 0) selected @endif value="0">In active</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="image" class="">News Image</label>
                <input name="image" type="file" id="image">
            </div>
        </div>
        <div class="col-md-4">
            <img width="100%;" height="auto;" src="{{ asset("frontend/assets/img/latest-news/".$news->image) }}" alt="">
        </div>
        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection