<?php

namespace App\Http\Controllers;

use App\Player;
use App\Team;


class AppController extends Controller
{
    public function indexPlayers()
    {
        $players = Player::all();
        return view('players', compact('players'));
    }

    public function indexTeams()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }
}
