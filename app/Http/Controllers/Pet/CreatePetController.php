<?php

namespace App\Http\Controllers\Pet;

use App\DTO\PetDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePetRequest;
use App\Models\Pet;
use App\Services\CreatePetService;
use App\Services\errors\PetAlreadyExistError;
use App\Services\errors\ResourceNotFound;
use App\Services\GetOrganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreatePetController extends Controller
{
    public function __construct(
        private readonly GetOrganization $getOrganization,
        private readonly CreatePetService $createPetService,
    ) {}

    public function index()
    {
        try {
            $organization = $this->getOrganization->handle(Auth::user()->getAuthIdentifier());
        } catch (ResourceNotFound $exception) {
            return view('pages.organization.index')->withErrors(
                ['message' => $exception->getMessage()]
            );
        }

        $message = session()->get('message.success');

        return view('pages.organization.index',
            compact('organization', 'message')
        );
    }

    public function create(CreatePetRequest $request)
    {
        try {
            $pet = $this->createPetService->handle($request);

            session()->flash('message.success', "Pet " . $pet->name . " adicionado com sucesso");

            return to_route('organization.index');

        } catch (\Exception $exception) {
            if ($exception instanceof PetAlreadyExistError) {
                return to_route('organization.index')->withErrors([
                    'message' => $exception->getMessage()
                ]);
            }

            throw $exception;
        }
    }
}
