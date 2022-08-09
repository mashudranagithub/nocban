@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Post Update</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-file-posts') }}"> Back</a>
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
<form action="{{ route('update-file-post', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <textarea id="bhw-ckeditor" class="form-control" style="height:150px" name="detail"></textarea>
            </div>
        </div> -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="category" class="required">File Type/Category</label>
                <select name="category" class="form-control" id="category" required>
                    <option>Select Type/Category</option>
                    <option @if($post->category=="vision-mission") selected @endif value="vision-mission">Vision & Mission</option>
                    <option @if($post->category=="executive-committee") selected @endif value="executive-committee">Executive Committee</option>
                    <option @if($post->category=="sub-committee") selected @endif value="sub-committee">Sub Committee</option>
                    <option @if($post->category=="office-staffs") selected @endif value="office-staffs">BAF Office Staffs</option>
                    <option @if($post->category=="coaches") selected @endif value="coaches">Coaches</option>
                    <option @if($post->category=="judges") selected @endif value="judges">Judges</option>
                    <option @if($post->category=="event-calendar") selected @endif value="event-calendar">BAF Event Calendar</option>
                    <option @if($post->category=="ranking-national-open") selected @endif value="ranking-national-open">Ranking (National Open)</option>
                    <option @if($post->category=="ranking-national-youth") selected @endif value="ranking-national-youth">Ranking (National Youth)</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="status" class="required">Post Status</label>
                <select name="status" id="status" class="form-control" required>
                        <option @if($post->status == 1) selected @endif value="1">Active</option>
                        <option @if($post->status == 0) selected @endif value="0">In active</option>
                    </select>
            </div>
        </div>
        <div class="col-md-4">
            @if($post->file)
            <iframe width="100%" height="200px;" src="{{ asset('frontend/assets/files/file-posts/'.$post->category.'/'.$post->file) }}" frameborder="1"></iframe> @endif
            <div class="form-group">
                <label for="file" class="required">Post File</label>
                <input name="file" type="file" id="file" required>
                <p class="help-block text-red">Size: 5 MB and compress the file before upload</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection