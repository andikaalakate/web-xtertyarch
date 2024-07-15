<?php

namespace App\View\Components;

use App\Models\HomeFeature as ModelsHomeFeature;
use App\Models\HomeTide;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeFeature extends Component
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
        $dataFeature = ModelsHomeFeature::where('is_active', true)->first();
        $dataTideFeature = HomeTide::where([
            ['is_active', true],
            ['section', 'feature']
        ])->first();
        return view('components.home-feature', compact('dataFeature', 'dataTideFeature'));
    }
}
