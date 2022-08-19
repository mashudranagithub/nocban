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
        <a class="btn btn-primary" href="{{ route('all-posts') }}"> Back</a>
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
                    <label for="category" class="required">Post Type/Category</label>
                    <select name="category" class="form-control select2" id="category" required>
                        <option>Select Type/Category</option>
                        <option value="upcoming_events">Events - Upcoming</option>
                        <option value="media_press">Media & Press</option>
                        <option value="news">News/Recent News</option>
                        <option value="history">About BOA - History</option>
                        <option value="mission_vission">About BOA - Mission & Vision</option>
                        <option value="ex_committee">About BOA - Executive Committee</option>
                        <option value="gn_assembly">About BOA - General Assembly</option>
                        <option value="prev_president_sg">About BOA - Previous President & SG</option>
                        <option value="admin">About BOA - Administration</option>
                        <option value="commissions_committees">About BOA - Commissions & Committees</option>
                        <option value="noa">About BOA - National Olympic Academy</option>
                        <option value="constitution">About BOA - Constitution</option>
                        <option value="organogram">About BOA - Organogram</option>
                        <option value="anti_doping">About BOA - Anti Doping</option>
                        <option value="athlete_profiles">About BOA - Athlete Profiles</option>
                        <option value="affiliated_organizations">Affiliated Organizations</option>
                        <option value="activities">Activities</option>
                        <option value="sports_international">Sports Awards - International</option>
                        <option value="sports_regional">Sports Awards - Regional</option>
                        <option value="sports_national">Sports Awards - National</option>
                        <option value="boa_athlete_commission">BOA Athletes Commission</option>
                        <option value="boa_anti_doping">BOA Anti-Doping</option>
                        <option value="asian_games_19th">19th Asian Games</option>
                        <option value="asian_games">Asian Games</option>
                        <option value="boa_election">BOA Election</option>
                        <option value="esports_road">Esports-road to Asian Games 2022</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title" class="required">Post Title</label>
                    <input name="title" type="text" id="title" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="bhw-ckeditor">Post Detail</label>
                    <textarea id="bhw-ckeditor" class="form-control" row="5" col="12" name="details" placeholder="Detail"></textarea>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input name="start_date" id="start_date" type="date" class="form-control">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="status" class="required">Post Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" selected>Active</option>
                        <option value="0">In active</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="file" class="">Post File</label>
                    <input class="form-control" name="file" type="file" id="file" accept=".pdf">
                    <p class="help-block text-red">Max Size: 5 MB and compress the file before upload</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="image" class="">Post Image</label>
                    <input class="form-control" name="image" type="file" id="image" accept=".jpg, .jpeg">
                    <p class="help-block text-red">Max Size: 2 MB and compress the file before upload</p>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</section>
@endsection