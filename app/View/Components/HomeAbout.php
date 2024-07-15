<?php

namespace App\View\Components;

use App\Models\HomeAbout as ModelsHomeAbout;
use App\Models\HomeTide;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeAbout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $dataAbout = ModelsHomeAbout::where('is_active', true)->first();
        $dataTideAbout = HomeTide::where([
            ['is_active', true],
            ['section', 'about']
        ])->first();
        return view('components.home-about', ['dataTideAbout' => $dataTideAbout, 'dataAbout' => $dataAbout]);
    }
}
