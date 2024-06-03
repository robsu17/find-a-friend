@extends('layouts.organization')
@section('title', 'Faça o login')

@section('content')
    <div class="flex items-center h-full">
        <div class="grid grid-cols-2 gap-10 mx-auto">
            <div>
                <img src="{{ asset('img/faf-logo-large.svg') }}">
            </div>
            <x-shared.form-layout title="Boas-vindas!">
                <x-organization.login.form />
            </x-shared.form-layout>
        </div>
    </div>
@endsection
