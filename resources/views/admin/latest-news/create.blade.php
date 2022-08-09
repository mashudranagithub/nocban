@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">News Create</li>
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
<section class="content">
    <form action="{{ route('store-news') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title" class="required">News Title</label>
                    <input name="title" type="text" id="title" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="image" class="required">News Image</label>
                    <input name="image" type="file" id="image" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="bhw-ckeditor">News Detail</label>
                    <textarea id="bhw-ckeditor" class="form-control" row="5" col="12" name="details" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status" class="required">News Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" selected>Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</section>
@endsection