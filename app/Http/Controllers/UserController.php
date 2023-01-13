<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function project()
    {
        return view('pages.project2');
    }

    public function track_contract(Request $request)
    {
//        return $request;
        $track = $request->get('contract_num');
        if ($project = Project::where('contract_num', $track)->first())
        {
            $project_code = Project::find($project->id);

            return redirect()->route('process_contract', $project_code->id);
//            return view('pages.process', compact('project_code'));
        }else
        {
            return redirect()->back()->with('no_order', "Sorry, Such Contract Does not exist");
        }

    }

    public function process($id)
    {
        $project = Project::find($id);
        return view('pages.process', compact('project'));
    }

    public function contract_details($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.contract-details', compact('project'));
    }

}
