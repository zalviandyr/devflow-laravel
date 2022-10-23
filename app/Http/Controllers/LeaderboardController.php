<?php

namespace App\Http\Controllers;

use App\Models\Reaction;

class LeaderboardController extends Controller
{
    public function index()
    {
        $users = Reaction::query()
            ->with(['author'])
            ->select('author_id')
            ->selectRaw('SUM(point) AS point')
            ->groupBy('author_id')
            ->orderByRaw('SUM(point) DESC')
            ->get();

        return view('leaderboard', compact('users'));
    }
}
