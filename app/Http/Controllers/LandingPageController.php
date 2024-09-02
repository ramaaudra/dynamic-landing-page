<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        //get one active hero with hero sub title
        $hero = Hero::where('is_active', true)
            ->first();

        //get all active service order by sort
        $services = Service::where('is_active', true)
            ->orderBy('sort')
            ->get();

        //get all portfolio with category
        $portfolios = Portfolio::with('portfolioCategory')
            ->get();

        //get all clients
        $clients = Client::all();

        //get all teams with team socials
        $teams = Team::with('teamSocials')
            ->get();
        return view('layout.web', compact(
            'hero',
            'services',
            'portfolios',
            'clients',
            'teams',
        ));
    }
}
