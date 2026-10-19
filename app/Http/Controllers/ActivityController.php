<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::with(['organization', 'community'])->get();
        return view('activities.index', compact('activities'));
    }
}