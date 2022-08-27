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
        <a class="btn btn-primary" href="{{ route('all-posts') }}"> Back</a>
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
<form action="{{ route('update-post', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                    <label for="category" class="required">Post Type/Category</label>
                    <select name="category" class="form-control select2" id="category" required>
                        <option>Select Type/Category</option>
                        <option @if($post->category == "upcoming_events") selected @endif value="upcoming_events">Events - Upcoming</option>
                        <option @if($post->category == "media_press") selected @endif  value="media_press">Media & Press</option>
                        <option @if($post->category == "news") selected @endif value="news">News/Recent News</option>
                        <option @if($post->category == "history") selected @endif value="history">About BOA - History</option>
                        <option @if($post->category == "mission_vission") selected @endif value="mission_vission">About BOA - Mission & Vision</option>
                        <option @if($post->category == "ex_committee") selected @endif value="ex_committee">About BOA - Executive Committee</option>
                        <option @if($post->category == "gn_assembly") selected @endif value="gn_assembly">About BOA - General Assembly</option>
                        <option @if($post->category == "prev_president_sg") selected @endif value="prev_president_sg">About BOA - Previous President & SG</option>
                        <option @if($post->category == "admin") selected @endif value="admin">About BOA - Administration</option>
                        <option @if($post->category == "commissions_committees") selected @endif value="commissions_committees">About BOA - Commissions & Committees</option>
                        <option @if($post->category == "noa") selected @endif value="noa">About BOA - National Olympic Academy</option>
                        <option @if($post->category == "constitution") selected @endif value="constitution">About BOA - Constitution</option>
                        <option @if($post->category == "organogram") selected @endif value="organogram">About BOA - Organogram</option>
                        <option @if($post->category == "anti_doping") selected @endif value="anti_doping">About BOA - Anti Doping</option>
                        <option @if($post->category == "athlete_profiles") selected @endif value="athlete_profiles">About BOA - Athlete Profiles</option>
                        <option @if($post->category == "affiliated_organizations") selected @endif value="affiliated_organizations">Affiliated Organizations</option>
                        <option @if($post->category == "activities") selected @endif value="activities">Activities</option>
                        <option @if($post->category == "sports_international") selected @endif value="sports_international">Sports Awards - International</option>
                        <option @if($post->category == "sports_regional") selected @endif value="sports_regional">Sports Awards - Regional</option>
                        <option @if($post->category == "sports_national") selected @endif value="sports_national">Sports Awards - National</option>
                        <option @if($post->category == "boa_athlete_commission") selected @endif value="boa_athlete_commission">BOA Athletes Commission</option>
                        <option @if($post->category == "boa_anti_doping") selected @endif value="boa_anti_doping">BOA Anti-Doping</option>
                        <option @if($post->category == "asian_games_19th") selected @endif value="asian_games_19th">19th Asian Games</option>
                        <option @if($post->category == "asian_games") selected @endif value="asian_games">Asian Games</option>
                        <option @if($post->category == "boa_election") selected @endif value="boa_election">BOA Election</option>
                        <option @if($post->category == "esports_road") selected @endif value="esports_road">Esports-road to Asian Games</option>
                    </select>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="title" class="required">Post Title</label>
                <input name="title" type="text" id="title" class="form-control" required @if($post->title) value="{{$post->title}}" @endif>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="bhw-ckeditor">Post Detail</label>
                <textarea id="bhw-ckeditor" class="form-control" row="5" col="12" name="details">{{$post->details}}</textarea>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input name="start_date" id="start_date" type="date" class="form-control" @if($post->start_date) value="{{$post->start_date}}" @endif>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="status" class="required">Post Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option @if($post->status == 1) selected @endif value="1">Active</option>
                    <option @if($post->status == 0) selected @endif value="0">In active</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="file" class="">Post File</label>
                <input name="file" type="file" id="file" class="form-control">
                <p class="help-block text-red">Compress the file before upload</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="image" class="">Post Image</label>
                <input class="form-control" name="image" type="file" id="image" accept=".jpg, .jpeg">
                <p class="help-block text-red">Compress the file before upload</p>
            </div>
        </div>
        @if($post->file)
        <div class="col-md-12">
            <h3>Previous File</h3>
            <iframe width="100%" height="500px;" src="{{ asset('frontend/assets/posts/files/'.$post->category.'/'.$post->file) }}" frameborder="1"></iframe>
        </div>
        @endif
        @if($post->image)
        <div class="col-md-12">
            <h3>Previous Image</h3>
            <img width="100%" height="auto;" src="{{ asset('frontend/assets/posts/images/'.$post->category.'/'.$post->image) }}">
        </div>
        @endif
        <div class="col-md-12">
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection