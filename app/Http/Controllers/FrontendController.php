<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\FilePost;
use App\Models\Post;
use App\Models\Athlete;
use App\Models\News;

use Illuminate\Support\Facades\File;
use DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        // $settings = Settings::first();
        // $sliders = Slider::where('active_yn', 'Y')->get();
        // $partners = Partner::get()->take(10)->sortBy('desc');

        // $featured_video = DB::table('gallery_items as gi')
        // ->leftJoin('galleries as g', 'g.id', '=', 'gi.gallery_id')
        // ->where('g.type', 'video')
        // ->take(1)
        // ->get(['gi.gallery_id', 'gi.gallery_item', 'gi.caption', 'g.type'])
        // ->sortBy('desc');

        // $photos = DB::table('gallery_items as gi')
        // ->leftJoin('galleries as g', 'g.id', '=', 'gi.gallery_id')
        // ->where('g.type', 'photo')
        // ->take(6)
        // ->get(['gi.gallery_id', 'gi.gallery_item', 'gi.caption', 'g.type']);
        // $newses = News::get()->take(10)->where('status', 1)->sortBy('desc');
        // $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        // $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        // $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        // $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        // $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        // $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        // $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        // $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        // $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        // return view('frontend.index', compact(
        //     'settings',
        //     'sliders',
        //     'partners',
        //     'vision_mission',
        //     'executive_committee',
        //     'sub_committee',
        //     'office_staffs',
        //     'coaches',
        //     'judges',
        //     'event_calendar',
        //     'ranking_national_open',
        //     'ranking_national_youth',
        //     'photos',
        //     'featured_video',
        //     'newses'
        // ));

        return view('frontend.index');
    }

    public function contactpage(){
        return view('frontend.contact');
    }

    public function esportsroad(){
        return view('frontend.esportsroad');
    }

    public function boaelec2021(){
        return view('frontend.boaelec2021');
    }

    public function asiangames19(){
        return view('frontend.19asiangames');
    }

    public function noa(){
        return view('frontend.noa');
    }

















    public function newses() {
        $settings = Settings::first();
        $newses = News::where('status', 1)->orderBy('created_at', 'desc')->paginate(10);
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.latest-news.newses', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'newses'
        ));
    }

    public function single_news($id) {
        $settings = Settings::first();
        $news = News::find($id);
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.latest-news.single-news', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'news'
        ));
    }

    public function sponsors() {
        $settings = Settings::first();
        $partners = Partner::get();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.sponsors', compact(
            'settings',
            'partners',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));

    }

    public function localPhotoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'photo')
        ->where('g.gal_cat', 'local')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.photo.local', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function nationalPhotoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'photo')
        ->where('g.gal_cat', 'national')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.photo.national', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function internationalPhotoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'photo')
        ->where('g.gal_cat', 'international')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.photo.international', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function singlePhotoGallery($id) {
        $settings = Settings::first();
        $gallery_items = GalleryItem::where('gallery_id', $id)->get();
        $gallery = Gallery::where('id', $id)->first(['name', 'type']);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.photo.single-gallery', compact(
            'settings',
            'gallery',
            'gallery_items',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function localVideoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'video')
        ->where('g.gal_cat', 'local')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.video.local', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function nationalVideoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'video')
        ->where('g.gal_cat', 'national')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.video.national', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function internationalVideoGallery() {
        $settings = Settings::first();
        $galleries = DB::table('galleries as g')
        ->select('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name' ,DB::raw("count(g_i.id) as item_count"))
        ->leftJoin('gallery_items as g_i', 'g_i.gallery_id', '=', 'g.id')
        ->where('g.type', 'video')
        ->where('g.gal_cat', 'international')
        ->orderBy('g.id', 'desc')
        ->groupBy('g.id', 'g.type', 'g.gal_cat', 'g.image', 'g.name')
        ->paginate(2);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.video.international', compact(
            'settings',
            'galleries',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function singleVideoGallery($id) {
        $settings = Settings::first();
        $gallery_items = GalleryItem::where('gallery_id', $id)->get();
        $gallery = Gallery::where('id', $id)->first(['name', 'type']);

        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');

        return view('frontend.gallery.video.single-gallery', compact(
            'settings',
            'gallery',
            'gallery_items',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth'
        ));
    }

    public function message() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $message = Post::where('category', '=', "message")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->first();

        return view('frontend.about.message', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'message'
        ));
    }

    public function history() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $history = Post::where('category', '=', "history")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->first();

        return view('frontend.about.history', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'history'
        ));
    }

    public function proposedActivities() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', '=', "activities_proposed")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.about.activities.proposed', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function completedActivities() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', '=', "activities_completed")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.about.activities.completed', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function notices() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', '=', "notice")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.news.notices', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function publications() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', '=', "publication")->where('status', '=', 1)->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.news.publications', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function events() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::whereIn('category', ["event_completed", "event_upcoming"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.events.events', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function upcoming_events() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["event_upcoming"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.events.events-upcoming', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function results_local() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["results_local"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        // dd($posts);

        return view('frontend.results.results', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function results_national() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["results_national"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.results.results', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function results_international() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["results_international"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.results.results', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function achievements_national() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["achievement_national"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.achievements.achievements', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function achievements_international() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $posts = Post::where('category', ["achievement_international"])
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.achievements.achievements', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'posts'
        ));
    }

    public function all_athletes() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $athletes = Athlete::where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.athletes.athletes', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'athletes'
        ));
    }

    public function athletes_recurve_men() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $athletes = Athlete::where('division', '=', 'recurve_men')
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.athletes.athletes', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'athletes'
        ));
    }

    public function athletes_recurve_women() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $athletes = Athlete::where('division', '=', 'recurve_women')
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.athletes.athletes', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'athletes'
        ));
    }

    public function athletes_compound_men() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $athletes = Athlete::where('division', '=', 'compound_men')
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.athletes.athletes', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'athletes'
        ));
    }

    public function athletes_compound_women() {
        $settings = Settings::first();
        $vision_mission = FilePost::where('category', '=', "vision-mission")->where('status', '=', 1)->get('file');
        $executive_committee = FilePost::where('category', '=', "executive-committee")->where('status', '=', 1)->get('file');
        $sub_committee = FilePost::where('category', '=', "sub-committee")->where('status', '=', 1)->get('file');
        $office_staffs = FilePost::where('category', '=', "office-staffs")->where('status', '=', 1)->get('file');
        $coaches = FilePost::where('category', '=', "coaches")->where('status', '=', 1)->get('file');
        $judges = FilePost::where('category', '=', "judges")->where('status', '=', 1)->get('file');
        $event_calendar = FilePost::where('category', '=', "event-calendar")->where('status', '=', 1)->get('file');
        $ranking_national_open = FilePost::where('category', '=', "ranking-national-open")->where('status', '=', 1)->get('file');
        $ranking_national_youth = FilePost::where('category', '=', "ranking-national-youth")->where('status', '=', 1)->get('file');
        $athletes = Athlete::where('division', '=', 'compound_women')
        ->where('status', '=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

        return view('frontend.athletes.athletes', compact(
            'settings',
            'vision_mission',
            'executive_committee',
            'sub_committee',
            'office_staffs',
            'coaches',
            'judges',
            'event_calendar',
            'ranking_national_open',
            'ranking_national_youth',
            'athletes'
        ));
    }

    

}
