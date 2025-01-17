<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('position','asc')->paginate(10);
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(StoreTeamRequest $request)
    {
        Team::create($request->validated());
        Alert::success('Team added successfully');
        return back();
    }
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        if ($request->hasFile('image') && $image = $team->getRawOriginal('image')) {
            $this->deleteFile($image);
        }
        $team->update($request->validated());
        Alert::success('Team updated successfully');
        return redirect(route('admin.team.index'));
    }

    public function destroy(Team $team)
    {
        $team->delete();
        Alert::success('Team deleted successfully');
        return back();
    }
}
