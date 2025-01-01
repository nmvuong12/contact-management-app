<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = $request->input('name');
        $code = $request->input('code');
        //
        $departments = Department::query()
        ->when($name, function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        ->when($code, function ($query, $code) {
            return $query->where('code', 'like', '%' . $code . '%');
        })
        ->paginate(6);

        return view('guest.index', compact('departments'));
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
    public function showforGuest(Request $request, string $id)
    {
        //
        $department = Department::findOrFail($id);
        // $name = $request->input('name');
        // $staffMembers = $department->staff()->query()
        //     ->when($name, function ($query, $name) {
        //         return $query->where('name', 'like', '%' . $name . '%');
        //     })
        //     ->paginate(5);
        $staffMembers = $department->staff()->paginate(5);
        return view('guest.showDepartment', compact('department', 'staffMembers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
