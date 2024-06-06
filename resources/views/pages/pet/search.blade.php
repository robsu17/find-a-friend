@extends('layouts.pets')
@section('title', 'Adote seu pet')

@section('content')
    <div class="bg-red-primary h-screen flex justify-center items-center">
        <div class="flex flex-col gap-24">
            <div>
                <img src="{{ asset('img/app-logo.svg') }}">
            </div>
            <div class="flex gap-32 mb-20">
                <div class="flex items-end">
                    <h1 class="text-7xl font-nunito font-extrabold text-white">
                        Leve <br>
                        a felicidade <br>
                        para o seu lar
                    </h1>
                </div>
                <img src="{{ asset('img/faf-dogs.svg') }}">
            </div>
            <div class="flex justify-between">
                <p class="font-nunito text-2xl font-semibold text-white">
                    Encontre o animal de estimação ideal <br>
                    para seu estilo de vida!
                </p>
                <x-search-pets />
            </div>
        </div>
    </div>
@endsection
