@extends('layouts.base')
@section('content')
<div class="bg-cover bg-mood-image bg-top text-blue-light" style="height: 873px; z-index: -1;">
    <div>
        <x-navbar/>
        <div class="pt-52 px-4 lg:px-24">
            <x-header />
            <div class="pt-10 gap-8 lg:columns-3">
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
                <x-teaser-tile />
            </div>
        </div>
        <div class="pt-32 lg:pt-36">
            <x-footer />
        </div>
    </div>
</div>
@endsection
