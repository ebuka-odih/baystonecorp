<?php

namespace App\Http\Controllers;

use App\Project;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function list()
    {
        $projects = Project::all();
        return view('admin.list-project', compact('projects'));
    }

    public function view($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project-details', compact('project'));
    }

    public function add()
    {
        return view('admin.add-project');
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.edit-project', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrfail($id);
       $data = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'phone' => 'required',
            'website' => 'nullable',
            'address' => 'required',
            'project_desc' => 'nullable',
            'contract_location' => 'required',
            'amount' => 'required',
            'date_awarded' => 'required',
            'start_date' => 'required',
            'duration' => 'required',
            'contract_num' => 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

//        $image = $request->file('photo');

        if($request->hasFile('certificate')){
            $certificate = $request->file('certificate');
            $input['imagename'] = time().'.'.$certificate->getClientOriginalExtension();
            $destinationPath = public_path('/certificate');
            $certificate->move($destinationPath, $input['imagename']);

            $project->update($data);
            $project->update(['certificate' => $input['imagename']]);

            if ($request->hasFile('photo')){
                $image = $request->file('photo');
                $input['image_name'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/photo');
                $image->move($destinationPath, $input['image_name']);
                $project->update(['photo' => $input['image_name']]);
            }

        }else{
            $project->update($data);
        }

//        $project->update($request->all());
        return redirect()->route('admin.projects.list')->with('success', 'Project Updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'company_name' => 'required',
                'phone' => 'required',
                'email' => 'nullable',
                'website' => 'nullable',
                'address' => 'required',
                'project_desc' => 'nullable',
                'contract_location' => 'required',
                'amount' => 'required',
                'date_awarded' => 'required',
                'start_date' => 'required',
                'duration' => 'required',
                'contract_num' => 'nullable',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//                'certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $image = $request->file('photo');
//        $certificate = $request->file('certificate');

           if ($request->hasFile('photo')){
//                $image = $request->file('photo');
                $input['image_name'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/photo');
                $image->move($destinationPath, $input['image_name']);

                $project = new Project();
                $project->name = $request->get('name');
                $project->company_name = $request->get('company_name');
                $project->phone = $request->get('phone');
                $project->website = $request->get('website');
                $project->address = $request->get('address');
                $project->project_desc = $request->get('project_desc');
                $project->contract_location = $request->get('contract_location');
                $project->date_awarded = $request->get('date_awarded');
                $project->start_date = $request->get('start_date');
                $project->duration = $request->get('duration');
                $project->amount = $request->get('amount');

                $project->photo = $input['image_name'];
//                $project->certificate = $input['imagename'];
                $project->save();
                $project->contract_num = "PRE".$project->id."XX238453SCORP";
                $project->save();
            }else{

                $project = new Project();
                $project->name = $request->get('name');
                $project->company_name = $request->get('company_name');
                $project->phone = $request->get('phone');
                $project->website = $request->get('website');
                $project->address = $request->get('address');
                $project->project_desc = $request->get('project_desc');
                $project->contract_location = $request->get('contract_location');
                $project->date_awarded = $request->get('date_awarded');
                $project->start_date = $request->get('start_date');
                $project->start_date = $request->get('duration');
                $project->amount = $request->get('amount');

                //        $project->photo = $input['image_name'];
                //        $project->certificate = $input['imagename'];
                $project->save();
                $project->contract_num = "PRE".$project->id."XX238453SCORP";
                $project->save();
        }


        return redirect()->route('admin.projects.list')->with('status', 'Project successfully created!');
    }



    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('deleted', "Project deleted successfully");
    }


}
