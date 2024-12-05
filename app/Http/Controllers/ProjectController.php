<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.manage',['projects' => $projects]);
    }

    public function donations()
    {
        $donations = Donation::all();
        return view('admin.projects.donation',['donations' => $donations]);
    }



    public function create()
    {
        return view('admin.projects.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
        ]);
        $data = $request->all();

        if($request->file('image')){
            $data['image'] = Project::getImageUrl($request);
        }
        
        Project::create($data);

        return redirect()->route('projects')->with('message','Project created successfully.');
    }

    public function show($id){
        return view('admin.projects.detail', ['project' => Project::find($id)]);
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
        ]);
        $data = $request->all();

        if($request->file('image')){
            $data['image'] = Project::getImageUrl($request);
        }

        Project::find($id)->update($data);

        return redirect()->route('projects')->with('message','Project updated successfully.');
    }

    public function delete($id){
        $project = Project::find($id);
        if(file_exists($project->image)){
            unlink($project->image);
        }
        $project->delete();

        return redirect()->route('projects')->with('message','Project deleted successfully.');
    }
}
