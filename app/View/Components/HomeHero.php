<?php

namespace App\View\Components;

use App\Models\HomeHero as ModelsHomeHero;
use App\Models\HomeTide;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class HomeHero extends Component
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
        $dataHero = ModelsHomeHero::where('is_active', true)->first();
        $dataTideHero = HomeTide::where([
            ['is_active', true],
            ['section', 'hero']
        ])->first();

        return view('components.home-hero', ['dataHero'=> $dataHero, 'dataTideHero'=> $dataTideHero]);
    }
}
