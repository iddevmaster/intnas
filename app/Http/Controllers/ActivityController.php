<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('content.activity.all-activities');
    }

    public function addActivity()
    {
        return view('content.activity.add-activity');
    }

    public function editActivity()
    {
        return view('content.activity.edit-activity');
    }
}
