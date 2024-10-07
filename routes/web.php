<?php

use App\Exports\ExperienceExport;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $experiences = Experience::select('company_name','job_title','start_date','end_date','description')->get();
    $projects = Project::select('name','category','thumbnail_image','demo_url','tech_stacks')->get();
    return view('layouts.app',[
        'experiences' => $experiences,
        'projects' => $projects,
    ]);
});

Route::get('/excel',function(){
    return Excel::download(new ExperienceExport, 'users.xlsx');
});
