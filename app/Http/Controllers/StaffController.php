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
    public function index(Request $request)
    {
        //     
        $name = $request->input('name');
        $nameDepartment = $request->input('nameDepartment');

        $department_ids = Department::where('name', 'like', '%' . $nameDepartment . '%')->pluck('id');
        //
        $staffs = Staff::query()
        ->when($name, function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        ->when($department_ids, function ($query) use ($department_ids) {
            return $query->whereIn('department_id', $department_ids);
        })
        ->orderBy('id', 'desc')
        ->paginate(6);

        return view('admin.staff.index', compact('staffs'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departments = Department::all();

        return view('admin.staff.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $staff = Staff::create([
            'name'=> $request->name,
            'title'=> $request->title,
            'academic_rank'=> $request->academic_rank,
            'degree'=> $request->degree,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'department_id'=> $request->department_id,
        ]);

        return redirect()->route('admin.staff')->with('success', 'Thêm cán bộ thành công!');
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
    public function showforAdmin()
    {
        
    }
    public function edit(string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        
        return view('staff.edit', compact('staff'));
    }
    public function editforAdmin(string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        $departments = Department::all();
        return view('admin.staff.edit', compact('staff', 'departments'));
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
    public function updateforAdmin(Request $request, string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        $staff->update($request->all());
        if($staff->user)
            $staff->user->update(['name' => $request->name]);
        return redirect()->route('admin.staff')->with('success', 'Cập nhật cán bộ thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
