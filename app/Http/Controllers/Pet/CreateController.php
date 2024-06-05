<?php

namespace App\Http\Controllers\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePetRequest;
use App\Services\CreatePetService;

class CreateController extends Controller
{
    public function __construct(private readonly CreatePetService $createPetService)
    {
    }

    public function __invoke(CreatePetRequest $request)
    {
        dd($request->validated());
    }
}
