@foreach ($errors->all() as $error)
    <div
        class="flex justify-center items-center m-1 py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">

        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-alert-octagon w-5 h-5 mx-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>

        <div class="font-normal max-w-full flex-initial">
            {{ $error }}
        </div>
    </div>
@endforeach

@if(session()->has('type') && session('type') === 'success')
    <div
        class="flex justify-center items-center m-1 py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300">

        <div class="font-normal max-w-full flex-initial">
            {{ session('message') }}
        </div>
    </div>
@endif

@if(session()->has('type') && session('type') === 'error')
    <div
        class="flex justify-center items-center m-1 py-1 px-2 bg-white rounded-md text-red-700 bg-red-100 border border-red-300 ">

        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-alert-octagon w-5 h-5 mx-2">
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
        </div>

        <div class="font-normal max-w-full flex-initial">
            {{ session('message') }}
        </div>
    </div>
@endif
