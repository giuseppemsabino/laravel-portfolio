<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->all();

    //    dd($data);
        $newProject = new Project();
        $newProject->author = $data['author'];
        $newProject->cliente = $data['cliente'];
        $newProject->conclutions = $data['conclutions'];
        $newProject->type_id = $data['type_id'];
        $newProject->save();

        return redirect()->route('projects.show', $newProject);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        //prendiamo il post dal database con quel id che riceviamo

        // $post = Post::where('id', $id)->get();
        // $post = Post::find($id);

        //l'ultima sintassi cambiamo l'id che riceve direttamente per il post e cosi abbiamo tutti i dati subito

        // dd($post);
        

        return view('projects.show', compact('project'));

         

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();

        return view('projects.edit', compact('project','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        //modifico i valori di project
        $project->author = $data['author'];
        $project->cliente = $data['cliente'];
        $project->conclutions = $data['conclutions'];
        $project->type_id = $data['type_id'];

        $project->update();
        // dd($project);
        return redirect()->route('projects.show', compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');

    }
}
