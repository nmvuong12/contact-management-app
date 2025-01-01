<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showforGuest(string $id)
    {
        //
        $staff = Staff::findOrFail($id);

        return view('guest.showStaff', compact('staff'));
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $codeDepartment = $request->input('codeDepartment');

        $department = Department::findOrFail($codeDepartment);
        $staffMembers = Staff::query()
        ->when($name, function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        ->when($codeDepartment, function ($query, $department_id) {
            return $query->where('department_id', 'like', '%' . $department_id . '%');
        })
        ->paginate(6);

        return view('guest.showDepartment', compact('department', 'staffMembers'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function showforStaff()
    {
        $staff = Auth::user()->staff;

        $department = $staff->department;

        return view('dashboard', compact('staff', 'department'));
    }
    public function edit(string $id)
    {
        //
        $staff = Staff::findOrFail($id);

        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        $staff->update($request->all());
        
        $staff->user->update(['name' => $request->name]);
        return redirect()->route('dashboard')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
