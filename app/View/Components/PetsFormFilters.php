<?php

namespace App\View\Components;

use App\Services\GetStatesService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PetsFormFilters extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(protected readonly GetStatesService  $getStatesService)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $options = config('selects.options');
        $states = $this->getStatesService->handle();
        return view(
            'components.pets-form-filters',
            compact('states', 'options'
        ));
    }
}
