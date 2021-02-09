@extends('layouts.master')

@section('main')
    <div class="border border-t-0 flex-1 h-auto">
        <div class="bg-white sticky top-0">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="font-semibold px-4 py-2 text-gray-900 text-xl">
                        {{ __('twitter.home') }}
                    </h2>
                </div>
            </div>
            <hr class=""/>
        </div>

        <div>
            <!-- tweet box (form) -->
            @include('partials._tweet-box')

            <hr class="border-4"/>

            <div></div>

            <!-- tweet -->
            @include('partials._tweet')
        </div>
    </div>
@stop
