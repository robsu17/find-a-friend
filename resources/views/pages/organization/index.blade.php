@extends('layouts.organization')
@section('title', 'Organização - '. $organization['name'])

@section('content')
    <div class="max-w-[800px] mx-auto space-y-8">
        @if($errors->any())
            <ul class="my-4 rounded-xl space-y-2">
                @foreach($errors->all() as $error)
                    <li class="border border-red-700 bg-red-primary-light p-2 rounded-xl text-white-light-primary">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @if($message)
            <ul class="my-4 rounded-xl space-y-2">
                <li class="border border-green-700 bg-green-primary/80 p-2 rounded-xl font-semibold text-lg text-gray-800">{{ $message }}</li>
            </ul>
        @endif
        <x-organization.index.header :organization="$organization"/>
        <x-organization.index.form />
    </div>
@endsection
