<?php

namespace App\Services;

use App\DTO\Factories\PetDtoFactory;
use App\Http\Requests\CreatePetRequest;
use App\Repositories\PetsRepository;
use App\Services\errors\PetAlreadyExistError;

class CreatePetService
{
    public function __construct(
        private readonly PetsRepository $petsRepository,
        private readonly PetDtoFactory $petDtoFactory
    ) {}

    /**
     * @throws PetAlreadyExistError
     */
    public function handle(CreatePetRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['photos'] = [];

        foreach ($request->file('photos') as $photo) {
            $validatedData['photos'][] = $photo->store('photos', 'public');
        }

        $petDto = $this->petDtoFactory->createFromRequest($validatedData);

        $pet = $this->petsRepository->findPetByName($petDto->name);

        if (!is_null($pet)) {
            throw new PetAlreadyExistError();
        }

        return $this->petsRepository->create($petDto);
    }
}
