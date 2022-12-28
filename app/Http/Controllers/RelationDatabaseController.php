<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Project;

use Illuminate\Http\Request;

class RelationDatabaseController extends Controller
{
    public function index()
    {
        $project = Project::count();
        $company = Company::all();
        return view('RelationsSample.index', compact('project'))->with('company',$company);
    }

    public function create()
    {
        return view('RelationsSample.create');
    }

    public function destroy($id)
    {
        Company::destroy($id);
        return redirect('index')->with('index deleted!');
    }

    public function edit($id)
    {
        $sirket=Company::find($id);
        return view('RelationsSample.edit')->with('sirket',$sirket);
    }

    public function store(Request $request)
    {
        $input=$request->all();
        Company::create($input);
        return redirect('index')->with('Addedd!');
    }

public function update(Request $request, $id )
{

        $sirket=Company::find($id);
        $input=$request->all();
        $sirket->update($input);
        return redirect('index')->with('update!');

}

public function projects()
{
        $project = Project::count();
        $company = Company::all();
        return view('RelationsSample.project',compact('project'))->with('company',$company);

}

public function numberprojects($company_id)
{
    $projeler=Project::where('company_id',$company_id);
    return view('RelationsSample.numberproject')->with('proje',$projeler);
}

}
