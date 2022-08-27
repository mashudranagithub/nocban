@extends('admin.layouts.master') @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="pull-left">
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Games & Result Create</li>
        </ol>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('all-games-results') }}"> Back</a>
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

    <form action="{{ route('store-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="category" class="required">Games & Result Type/Category</label>
                    <select name="category" class="form-control select2" id="category" required>
                        <option>Select Type/Category</option>
                        <option value="games_results_national">National</option>
                        <option value="g_r_int_asian">International - Asian</option>
                        <option value="g_r_int_asian_beach">International - Asian Beach</option>
                        <option value="g_r_int_asian_youth">International - Asian Youth</option>
                        <option value="g_r_int_common_wealth">International - Common Wealth</option>
                        <option value="g_r_int_common_wealth_youth">International - Common Wealth Youth</option>
                        <option value="g_r_int_children">International - Children of Asia International Sports Games</option>
                        <option value="g_r_int_islamic">International - Islamic Solidarity Games</option>
                        <option value="g_r_int_summer">International - Summer Olympic Games</option>
                        <option value="g_r_int_youth_olympic">International - Youth Olympic Games</option>
                        <option value="g_r_int_south_asian">International - South Asian</option>
                        <option value="g_r_int_south_asian_beach">International - South Asian Beach Games</option>

                    </select>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status" class="required">Games & Result Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" selected>Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="file" class="required">Games & Result File</label>
                    <input class="form-control" name="file" type="file" id="file" accept=".pdf" required>
                    <p class="help-block text-red">Compress the file before upload</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="title" class="required">Games & Result Title</label>
                    <input name="title" type="text" id="title" class="form-control" required>
                </div>
            </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</section>
@endsection