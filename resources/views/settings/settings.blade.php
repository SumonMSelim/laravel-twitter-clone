@extends('layouts.master')

@section('main')
    <div class="border border-t-0 flex-1 h-auto">
        <div class="bg-white sticky top-0">
            <div class="flex">
                <div class="flex-1 m-2">
                    <h2 class="font-semibold px-4 py-2 text-gray-900 text-xl">
                        Settings
                    </h2>
                </div>
            </div>
            <hr/>
        </div>

        <div>
            @include('partials._notification')

            <div class="mt-5">
                @include('partials._update-username-form')
            </div>

            <hr class="border-2"/>

            <div class="mt-5">
                @include('partials._update-email-form')
            </div>

            <hr class="border-2"/>

            <div class="mt-5">
                @include('partials._update-phone-form')
            </div>
        </div>
    </div>
@stop
