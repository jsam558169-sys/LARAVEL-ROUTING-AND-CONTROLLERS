<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        return "Student Controller Nako Ni!";
    }

    public function update(Request $request)
    {
        $name = $request->name;

        return redirect('/students')->with('name', $name);
    }
}
