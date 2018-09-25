@extends('layouts.app')

@section('content')
<div class="w-full shadow-lg rounded">
    <div class="flex bg-grey-light uppercase font-semibold justify-center items-center">
        <div class="w-2">
        </div>
        <div class="w-1/5 pt-4 pb-4">
            Uniform Number
        </div>
        <div class="w-1/5 pt-4 pb-4">
            Name
        </div>
        <div class="w-1/5 pt-4 pb-4">
            Age
        </div>
        <div class="w-1/5 pt-4 pb-4">
            Position
        </div>
        <div class="w-1/5 pt-4 pb-4">
            Position Group
        </div>
    </div>
    @foreach($players as $player)
    <div class="flex justify-center items-center border-b-2">
        <div id="{{ $player->id }}" class="w-2 mt-2">
        </div>
        <div class="w-1/5 pt-2 pb-2">
            {{ $player->uniformNumber }}
        </div>
        <div class="w-1/5 pt-2 pb-2">
            {{ $player->firstName }} {{ $player->lastName }}
        </div>
        <div class="w-1/5 pt-2 pb-2">
            {{ $player->age }}
        </div>
        <div class="w-1/5 pt-2 pb-2">
            {{ $player->position->position }}
        </div>
        <div class="w-1/5 pt-2 pb-2">
            {{ $player->positionGroup->positionGroup }}
        </div>
    </div>
    @endforeach
</div>
@endsection
