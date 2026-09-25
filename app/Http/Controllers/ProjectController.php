<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // Admin: show all projects
    public function showproject()
    {
        $projects = Project::all();

        return view('adminproject', compact('projects'));
        
    }

    



    public function myprojects(){
        return view('myprojects');
    }




    // Main website: show all projects
    public function projectpage()
    {
        $projects = Project::all();

        return view('myprojects', compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproject');
    }
   

    /**
     * Store a newly created resource in storage.
     */
  public function uploadproject(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'technologies' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        'gitlink' => 'required|url',
        'url' => 'required|url',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('projectimages'), $imageName);

    Project::create([
        'name' => $request->name,
        'description' => $request->description,
        'technologies' => $request->technologies,
        'image' => $imageName,
        'gitlink' => $request->gitlink,   
        'url' => $request->url,
    ]);

    return redirect()->back()->with('success', 'Project added successfully!');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
    $project = Project::findOrFail($id);

    return view('editProject', compact('project'));
}

    /**
     * Update the specified resource in storage.
     */public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $request->validate([
        'name' => 'required|string|min:3|max:50',
        'description' => 'required|string',
        'technologies' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'gitlink' => 'required|url',
        'url' => 'nullable|url',
    ]);

    $project->name = $request->name;
    $project->description = $request->description;
    $project->technologies = $request->technologies;
    $project->gitlink = $request->gitlink;
    $project->url = $request->url;

    if ($request->hasFile('image')) {

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('projectimages'), $imageName);

        $project->image = $imageName;
    }

    $project->save();

    return redirect()->route('projectlist');
}
    /**
     * Remove the specified resource from storage.
     */
 public function destroy($id)
{
    Project::destroy($id);

    return redirect()->back();
}
}
