<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamUser\CreateRequest as TeamUserCreateRequest;
use App\Http\Requests\Team\CreateRequest;
use App\Models\Team;
use App\Models\TeamUser;

class TeamController extends Controller
{
    public function all()
    {
        $team = Team::all();

        return response()->json($team);
    }

    public function create(CreateRequest $request)
    {
        $team = Team::create($request->all());

        return response()->json($team);
    }

    public function recruit(Team $team, TeamUserCreateRequest $request)
    {
        foreach ($request->user_id as $user_id) {
            TeamUser::create([
                'team_id' => $team->id,
                'user_id' => $user_id,
            ]);
        }

        $team = Team::find($team->id);

        return response()->json($team);

    }
}
