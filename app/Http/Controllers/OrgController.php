<?php

namespace App\Http\Controllers;

use App\Models\Org_configuration;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Org_configuration::latest()->paginate(10);
        return view('organization.index',compact('organizations'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:org_configurations,email'],
            'phone' => ['required'],
            'address' => ['required'],
            //'logo' => ['required'],
        ]);

        Org_configuration::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            //'logo' => $request['logo'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Organization created successfully');
        return redirect()->route('organization.index');
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $organization = Org_configuration::findOrFail($id);
        return view('organization.edit',compact('organization'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $organization = Org_configuration::findOrFail($id);

        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:org_configurations,email,'.$id],
            'phone' => ['required'],
            'address' => ['required'],
            //'logo' => ['required'],
        ]);

        $organization->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            //'logo' => $request['logo'],
            'is_active' => 1,
        ]);

        flash()->addSuccess('Organization updated successfully');
        return redirect()->route('organization.index');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Org_configuration::findOrFail($id)->delete();

        flash()->addSuccess('Organization deleted successfully');
        return redirect()->route('organization.index');
    }
}