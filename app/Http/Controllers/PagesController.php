<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('landing_page.landingpage');
    }
    public function getKYC()
    {
        return view('kyc.kyc');
    }
    public function getFaq()
    {
        return view('faq.faq');
    }
    public function getBlog()
    {
        return view('blog.blog');
    }
    public function getCareers()
    {
        return view('careers.careers');
    }
    public function getCXA_Terms_Conditions()
    {
        return view('cxa_terms_conditions.cxa_terms_conditions');
    }
    public function getArbot()
    {
        return view('arbot.arbot');
    }
    public function getAva()
    {
        return view('ava.ava');
    }
    public function getPrivacy_Policy()
    {
        return view('privacy_policy.privacy_policy');
    }
    public function getCookie_Policy()
    {
        return view('cookie_policy.cookie_policy');
    }
    public function getWebsite_Terms_of_Use()
    {
        return view('website_terms_of_use.website_terms_of_use');
    }
    public function getArbi()
    {
        return view('arbi.arbi');
    }
    public function getSpecto()
    {
        return view('specto.specto');
    }
    public function getBroca()
    {
        return view('broca.broca');
    }
    public function getContactus()
    {
        return view('contact_us.contact_us');
    }
    public function getOneway()
    {
        return view('oneway.oneway');
    }
}
