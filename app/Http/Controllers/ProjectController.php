<?php

namespace App\Http\Controllers;

use App\Http\Requests\Project\CreateRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function all()
    {
        $project = Project::all();

        return response()->json($project);
    }

    public function create(CreateRequest $request)
    {
        $project = Project::create($request->all());

        return response()->json($project);
    }
}
