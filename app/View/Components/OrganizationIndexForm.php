<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OrganizationIndexForm extends Component
{
    public array $options;

    /**
     * Create a new component instance.
     */
    public function __construct(array $options)
    {
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.organization.index.form');
    }
}
