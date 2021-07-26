<x-guest-layout class="bg-blue-100">
    <x-jet-authentication-card>
        <x-slot name="logo">
           
        </x-slot>
        <label class="text-4xl text-gray-700 start-label tracking-wide font-semibold start-label"> Reset Password </label>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}" class="mt-6">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label class="font-semibold text-base" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus readonly />
            </div>

            <div class="mt-4">
                <x-jet-label class="font-semibold text-base" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="New Password" />
            </div>

            <div class="mt-4">
                <x-jet-label class="font-semibold text-base" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat password" />
            </div>

            <div class="flex items-center justify-end mt-8 md:mt-4 space-x-3 ">
                <a href="https://pahlawandesignstudio.com" class="border-gray-400 hover:text-white text-base text-gray-400 border-2  tracking-wide rounded-lg py-2 px-4 font-semibold hover:bg-gray-400 duration-300">
                    {{ __('LOGIN') }}
                </a>
                <x-jet-button class="bg-blue-400 hover:bg-blue-600 text-base">
                    {{ __('Reset') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
