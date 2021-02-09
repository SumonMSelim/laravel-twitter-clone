<form action="{{ route('settings.phone') }}" method="post">
    @csrf

    <div class="px-3">

        <div class="mb-2">
            <label class="block font-bold mb-2 text-grey-darker text-sm" for="phone_number">
                Phone Number
                <input
                    class="appearance-none border capitalize focus:outline-none focus:placeholder-blue-400 focus:ring-2 focus:ring-blue-400 focus:text-blue-400 h-12 px-3 py-2 rounded shadow text-xs w-full mt-2"
                    value="{{ $user->phone_number }}"
                    name="phone_number"
                    id="phone_number"
                    type="text"
                    placeholder="Set your phone number"
                    required
                />
            </label>
        </div>

        <div class="mb-2">
            <button class="bg-blue-400 hover:bg-blue-600 px-4 py-2 rounded-full text-sm text-white">
                Update phone number
            </button>
        </div>
    </div>
</form>
