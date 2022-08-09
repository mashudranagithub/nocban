@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Athlete Create</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-athlete') }}"> Back</a>
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

    <form action="{{ route('store-athlete') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="division" class="required">Division</label>
                    <select name="division" class="form-control" id="division" required>
                        <option>Select Division</option>
                        <option value="recurve_men">Recurve men</option>
                        <option value="recurve_women">Recurve women</option>
                        <option value="compound_men">Compound men</option>
                        <option value="compound_women">Compound women</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="category" class="required">Category</label>
                    <select name="category" class="form-control" id="category" required>
                        <option>Select Type/Category</option>
                        <option value="junior">Junior</option>
                        <option value="cadet">Cadet</option>
                        <option value="youngstar">Youngstar</option>
                        <option value="adult">Adult</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="athlete_id" class="required">Athlete ID</label>
                    <input name="athlete_id" type="text" id="athlete_id" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="required">Name</label>
                    <input name="name" type="text" id="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="bhw-ckeditor">Detail</label>
                    <textarea id="bhw-ckeditor" class="form-control" row="5" col="12" name="details" placeholder="Detail"></textarea>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="dob" class="required">Date of Birth</label>
                    <input name="dob" id="dob" type="date" class="form-control" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="status" class="required">Athlete Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" selected>Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="photo" class="required">Athlete Photo</label>
                    <input name="photo" type="file" id="photo" required>
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