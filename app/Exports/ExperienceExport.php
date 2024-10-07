<?php

namespace App\Exports;

use App\Models\Experience;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExperienceExport implements FromView
{

    public function view(): View
    {
        return view('welcome', [
            'experiences' => Experience::all()
        ]);
    }

    
}
