@extends('layouts.organization')
@section('title', 'Organização - '. $organization['name'])

@section('content')
    <div class="max-w-[800px] mx-auto space-y-8">
        <x-organization.index.header :organization="$organization"/>
        <x-organization.index.form />
    </div>
@endsection
