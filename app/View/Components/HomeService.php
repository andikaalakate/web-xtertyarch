<?php

namespace App\View\Components;

use App\Models\HomeService as ModelsHomeService;
use App\Models\HomeTide;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeService extends Component
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
        $dataService = ModelsHomeService::where('is_active', true)->get();
        $dataTideService = HomeTide::where([
            ['is_active', true],
            ['section', 'service']
        ])->first();
        return view('components.home-service', ['dataService' => $dataService, 'dataTideService' => $dataTideService]);
    }
}
