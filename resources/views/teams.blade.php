@extends('layouts.app')

@section('content')
<div class="w-full shadow-lg rounded">
    <div class="flex bg-grey-light uppercase font-semibold justify-center items-center">
        <div class="w-1/6">
        </div>
        <div class="w-1/4 pt-4 pb-4">
            City
        </div>
        <div class="w-1/4 pt-4 pb-4">
            Mascot
        </div>
        <div class="w-1/4 pt-4 pb-4">
            Stadium
        </div>
    </div>
    @foreach($teams as $team)
    <div class="flex justify-center items-center border-b-2">
        <div id="{{ $team->id }}" class="w-1/6 mt-2">
            <img class="w-10 h-10 rounded-full mr-4" src="https://via.placeholder.com/400x400">
        </div>
        <div class="w-1/4 pt-2 pb-2">
            {{ $team->city }}
        </div>
        <div class="w-1/4 pt-2 pb-2">
            {{ $team->mascot }}
        </div>
        <div class="w-1/4 pt-2 pb-2">
            {{ $team->stadium }}
        </div>
    </div>
    @endforeach
</div>
@endsection

