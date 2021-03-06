<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // ->only(['store', 'update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userId = auth()->id();
        // $projects = Project::where('owner_id', $userId)->get();
        // OR
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attrs = $this->getRequestAttrs(); // OR request(['title', 'description'])
        $attrs['owner_id'] = auth()->id();
        $project = Project::create($attrs);
        // $to = \Auth::user()->email;
        $to = $project->owner->email;

        \Mail::to($to)->send(new ProjectCreated($project));

        return redirect()->route('projects.show', ['id' => $project->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // simple ways:
        // abort_if($project->owner_id !== auth()->id(), 403);
        // abort_unless($project->owner_id === auth()->id(), 403);
        // 2nd way using policies:
        // $this->authorize('update', $project);
        // 3rd way using policies and gates:
        // abort_unless(\Gate::allows('update', $project), 403);

        abort_if(\Gate::denies('update', $project), 403);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
        $this->authorize('update', $project);
        $project->update($this->getRequestAttrs());

        return redirect()->route('projects.show', ['id' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        abort_if(\Gate::denies('update', $project), 403);
        $project->tasks()->delete();
        $project->delete();

        return redirect('/projects');
    }

    private function getRequestAttrs() {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);
    }
}
