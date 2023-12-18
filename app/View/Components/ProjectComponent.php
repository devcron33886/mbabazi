<?php

namespace App\View\Components;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectComponent extends Component
{

   
    public function render(): View|Closure|string
    {
        $projects = Project::all();
        return view('components.project-component',['projects'=>$projects]);
    }
}
