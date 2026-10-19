<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::with(['title', 'organization'])->get();
        return view('staff.index', compact('staff'));
    }
}