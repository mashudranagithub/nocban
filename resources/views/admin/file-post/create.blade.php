@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Post Create</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-file-posts') }}"> Back</a>
    </div>
    <div class="clear-both">
        <!-- <hr> -->
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
    <form action="{{ route('store-file-post') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="category">File Type/Category</label>
                    @php $c_string = $category_string; @endphp
                    <select name="category" class="form-control" id="category" required>
                        <option>Select Type/Category</option>
                        <option @if(strpos($c_string, "vision-mission") !== false) disabled style="background: #ddd;" @endif value="vision-mission">Vision & Mission</option>
                        <option @if(strpos($c_string, "executive-committee") !== false) disabled style="background: #ddd;" @endif value="executive-committee">Executive Committee</option>
                        <option @if(strpos($c_string, "sub-committee") !== false) disabled style="background: #ddd;" @endif value="sub-committee">Sub Committee</option>
                        <option @if(strpos($c_string, "office-staffs") !== false) disabled style="background: #ddd;" @endif value="office-staffs">BAF Office Staffs</option>
                        <option @if(strpos($c_string, "coaches") !== false) disabled style="background: #ddd;" @endif value="coaches">Coaches</option>
                        <option @if(strpos($c_string, "judges") !== false) disabled style="background: #ddd;" @endif value="judges">Judges</option>
                        <option @if(strpos($c_string, "event-calendar") !== false) disabled style="background: #ddd;" @endif value="event-calendar">BAF Event Calendar</option>
                        <option @if(strpos($c_string, "ranking-national-open") !== false) disabled style="background: #ddd;" @endif value="ranking-national-open">Ranking (National Open)</option>
                        <option @if(strpos($c_string, "ranking-national-youth") !== false) disabled style="background: #ddd;" @endif value="ranking-national-youth">Ranking (National Youth)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Post Status</label>
                    <select name="status" id="status" class="form-control">
                            <option value="1" selected>Active</option>
                            <option value="0">In active</option>
                        </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="file">Post File</label>
                    <input name="file" type="file" id="file">
                    <p class="help-block text-red">Max Size: 5 MB and compress the file before upload</p>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</section>
@endsection