@extends('layouts.organization')
@section('title', 'Cadastre sua Org')

@section('content')
    <div class="flex items-center h-full">
        <div class="grid grid-cols-2 gap-10 mx-auto">
            <div>
                <img src="{{ asset('img/faf-logo-large.svg') }}">
            </div>
            <x-shared.form-layout title="Cadastre sua organização!">
                <x-organization.register.form />
            </x-shared.form-layout>
        </div>
    </div>
@endsection
