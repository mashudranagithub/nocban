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

        $settings = Settings::first();
        $sliders = Slider::orderBy('slider_position', 'asc')->where('active_yn', 'Y')->get();
        $galleries = Gallery::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('frontend.index', compact(
            'settings',
            'sliders',
            'galleries',
        ));
    }

    public function galleries(){
        $settings = Settings::first();
        $galleries = Gallery::orderBy('created_at', 'DESC')->paginate(9);
        return view('frontend.gallery.galleries', compact(
            'settings',
            'galleries',
        ));
    }

    public function singleGallery($id){
        $settings = Settings::first();
        $photos = DB::table('gallery_items as g_i')
        ->select('g_i.id', 'g_i.gallery_id', 'g_i.gallery_item', 'g_i.caption', 'g.name')
        ->orderBy('g_i.id', 'desc')
        ->join('galleries as g', 'g.id', '=', 'g_i.gallery_id')
        ->where('g_i.gallery_id', $id)
        ->get();
        return view('frontend.gallery.single-gallery', compact(
            'settings',
            'photos',
        ));
    }

    public function contactpage(){
        $settings = Settings::first();
        return view('frontend.pages.contact', compact(
            'settings',
        ));
    }

    public function esportsroad(){
        $settings = Settings::first();
        return view('frontend.pages.esportsroad', compact(
            'settings',
        ));
    }

    public function boaelec2021(){
        $settings = Settings::first();
        return view('frontend.pages.boaelec2021', compact(
            'settings',
        ));
    }

    public function asiangames19(){
        $settings = Settings::first();
        return view('frontend.pages.19asiangames', compact(
            'settings',
        ));
    }

    public function noa(){
        $settings = Settings::first();
        return view('frontend.pages.noa', compact(
            'settings',
        ));
    }

    public function boaantidoping(){
        $settings = Settings::first();
        return view('frontend.pages.boaantidoping', compact(
            'settings',
        ));
    }

    public function athletes(){
        $settings = Settings::first();
        return view('frontend.pages.athletes', compact(
            'settings',
        ));
    }

    public function nationalsportsawards(){
        $settings = Settings::first();
        return view('frontend.sports-awards.nationalsportsawards', compact(
            'settings',
        ));
    }

    public function regionalsportsawards(){
        $settings = Settings::first();
        return view('frontend.sports-awards.regionalsportsawards', compact(
            'settings',
        ));
    }

    public function internationalsportsawards(){
        $settings = Settings::first();
        return view('frontend.sports-awards.internationalsportsawards', compact(
            'settings',
        ));
    }

    public function affiliated(){
        $settings = Settings::first();
        return view('frontend.pages.affiliated', compact(
            'settings',
        ));
    }

    public function activities(){
        $settings = Settings::first();
        return view('frontend.pages.activities', compact(
            'settings',
        ));
    }

    public function history(){
        $settings = Settings::first();
        return view('frontend.about-pages.history', compact(
            'settings',
        ));
    }

    public function mission(){
        $settings = Settings::first();
        return view('frontend.about-pages.mission', compact(
            'settings',
        ));
    }

    public function executive(){
        $settings = Settings::first();
        return view('frontend.about-pages.executive', compact(
            'settings',
        ));
    }

    public function general(){
        $settings = Settings::first();
        return view('frontend.about-pages.general', compact(
            'settings',
        ));
    }

    public function previous(){
        $settings = Settings::first();
        return view('frontend.about-pages.previous', compact(
            'settings',
        ));
    }

    public function administration(){
        $settings = Settings::first();
        return view('frontend.about-pages.administration', compact(
            'settings',
        ));
    }

    public function committees(){
        $settings = Settings::first();
        return view('frontend.about-pages.committees', compact(
            'settings',
        ));
    }

    public function constitution(){
        $settings = Settings::first();
        return view('frontend.about-pages.constitution', compact(
            'settings',
        ));
    }

    public function organogram(){
        $settings = Settings::first();
        return view('frontend.about-pages.organogram', compact(
            'settings',
        ));
    }

    public function doping(){
        $settings = Settings::first();
        return view('frontend.about-pages.doping', compact(
            'settings',
        ));
    }

    public function athleteProfiles(){
        $settings = Settings::first();
        return view('frontend.about-pages.athleteProfiles', compact(
            'settings',
        ));
    }

    public function international(){
        $settings = Settings::first();
        return view('frontend.games-results.international.international', compact(
            'settings',
        ));
    }

    public function asianGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.asianGames', compact(
            'settings',
        ));
    }

    public function asianBeachGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.asianBeachGames', compact(
            'settings',
        ));
    }

    public function asianYouthGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.asianYouthGames', compact(
            'settings',
        ));
    }

    public function commonWealthGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.commonWealthGames', compact(
            'settings',
        ));
    }

    public function CommonwealthGames20th(){
        $settings = Settings::first();
        return view('frontend.games-results.international.20thCommonwealthGames', compact(
            'settings',
        ));
    }

    public function commonWealthYouthGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.commonWealthYouthGames', compact(
            'settings',
        ));
    }

    public function childrenOfAsiaInternationalSportsGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.childrenOfAsiaInternationalSportsGames', compact(
            'settings',
        ));
    }

    public function islamicSolidarityGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.islamicSolidarityGames', compact(
            'settings',
        ));
    }

    public function summerOlympicGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.summerOlympicGames', compact(
            'settings',
        ));
    }

    public function youthOlympicGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.youthOlympicGames', compact(
            'settings',
        ));
    }

    public function southAsianGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.southAsianGames', compact(
            'settings',
        ));
    }

    public function SouthAsianGames11th(){
        $settings = Settings::first();
        return view('frontend.games-results.international.11thSouthAsianGames', compact(
            'settings',
        ));
    }

    public function southAsianBeachGames(){
        $settings = Settings::first();
        return view('frontend.games-results.international.southAsianBeachGames', compact(
            'settings',
        ));
    }

    public function national(){
        $settings = Settings::first();
        return view('frontend.games-results.national.national', compact(
            'settings',
        ));
    }

    public function bangladeshgames8(){
        $settings = Settings::first();
        return view('frontend.games-results.national.8bangladeshgames', compact(
            'settings',
        ));
    }

    public function bangladeshgames9(){
        $settings = Settings::first();
        return view('frontend.games-results.national.9bangladeshgames', compact(
            'settings',
        ));
    }

    public function dolpodoktalika(){
        $settings = Settings::first();
        return view('frontend.games-results.national.dolpodoktalika', compact(
            'settings',
        ));
    }

    public function dpodoktalika(){
        $settings = Settings::first();
        return view('frontend.games-results.national.dpodoktalika', compact(
            'settings',
        ));
    }

    public function archary(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.archary', compact(
            'settings',
        ));
    }

    public function badminton(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.badminton', compact(
            'settings',
        ));
    }

    public function sorirgothon(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.sorirgothon', compact(
            'settings',
        ));
    }

    public function daba(){
        $settings = Settings::first();
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.daba', compact(
            'settings',
        ));
    }

    public function cycling(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.cycling', compact(
            'settings',
        ));
    }

    public function football(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.football', compact(
            'settings',
        ));
    }

    public function gymnastic(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.gymnastic', compact(
            'settings',
        ));
    }

    public function hockey(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.hockey', compact(
            'settings',
        ));
    }

    public function kabadi(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.kabadi', compact(
            'settings',
        ));
    }

    public function khokho(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.khokho', compact(
            'settings',
        ));
    }

    public function ragbi(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.ragbi', compact(
            'settings',
        ));
    }

    public function swiming(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.swiming', compact(
            'settings',
        ));
    }

    public function tabletennis(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.tabletennis', compact(
            'settings',
        ));
    }

    public function taykoando(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.taykoando', compact(
            'settings',
        ));
    }

    public function varuttolon(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.varuttolon', compact(
            'settings',
        ));
    }

    public function usha(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.usha', compact(
            'settings',
        ));
    }

    public function athletics(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.athletics', compact(
            'settings',
        ));
    }

    public function basketball(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.basketball', compact(
            'settings',
        ));
    }

    public function boxing(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.boxing', compact(
            'settings',
        ));
    }

    public function cricket(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.cricket', compact(
            'settings',
        ));
    }

    public function fencing(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.fencing', compact(
            'settings',
        ));
    }

    public function golf(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.golf', compact(
            'settings',
        ));
    }

    public function handball(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.handball', compact(
            'settings',
        ));
    }

    public function judo(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.judo', compact(
            'settings',
        ));
    }

    public function carate(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.carate', compact(
            'settings',
        ));
    }

    public function roing(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.roing', compact(
            'settings',
        ));
    }

    public function rolerscating(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.rolerscating', compact(
            'settings',
        ));
    }

    public function shooting(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.shooting', compact(
            'settings',
        ));
    }

    public function tennis(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.tennis', compact(
            'settings',
        ));
    }

    public function vollyball(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.vollyball', compact(
            'settings',
        ));
    }

    public function resling(){
        $settings = Settings::first();
        return view('frontend.games-results.national.31khela.resling', compact(
            'settings',
        ));
    }   

}
