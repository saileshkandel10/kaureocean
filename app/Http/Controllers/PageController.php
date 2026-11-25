<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function missionVision()
    {
        return view('pages.mission-vision');
    }

    public function leadership()
    {
        return view('pages.leadership');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function japaneseLanguage()
    {
        return view('pages.japanese-language');
    }

    public function jlptPreparation()
    {
        return view('pages.jlpt-preparation');
    }

    public function training()
    {
        return view('pages.training');
    }

    public function ssw()
    {
        return view('pages.ssw');
    }

    public function titp()
    {
        return view('pages.titp');
    }

    public function recruitmentProcess()
    {
        return view('pages.recruitment-process');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blogIndex()
    {
        return view('pages.blog-index');
    }

    public function blogShow($slug)
    {
        return view('pages.blog-show', ['slug' => $slug]);
    }



    public function contact()
    {
        return view('pages.contact');
    }

    public function applyNow()
    {
        return view('pages.apply-now');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function disclaimer()
    {
        return view('pages.disclaimer');
    }
}
