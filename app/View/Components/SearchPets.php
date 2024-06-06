<?php

namespace App\View\Components;

use App\Services\GetCitiesServices;
use App\Services\GetStatesService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchPets extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected readonly GetStatesService  $getStatesService,
        protected readonly GetCitiesServices $getCitiesServices
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $states = $this->getStatesService->handle();
        return view('components.search-pets', compact('states'));
    }
}
