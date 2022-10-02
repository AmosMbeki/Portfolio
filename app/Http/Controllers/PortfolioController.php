<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('portfolio.index', [
            'projects' => Project::latest()->get(),
            'skills' => Skill::latest()->get(),
            'experiences' => Experience::latest()->get(),
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        // Contact::create($formFields); 

        return redirect('/')->with('message', 'Message sent successfully!');
    }
}
