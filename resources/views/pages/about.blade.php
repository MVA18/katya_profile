@extends('layouts.base')
@section('content')
<div>
    <div>
        <x-navbar />
        <div class="pt-16 px-4 lg:px-20 text-black">
            <x-about-header />
        </div>
        <x-about-profile />
        <x-about-experience :jobs="$jobs"/>
    </div>
</div>
<x-footer />
@endsection
