@extends('admin')
@section('guichet')
    <x-guest-layout>
        <form method="POST" action="{{ route('saveguichet') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nom')"/>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                              autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="name" :value="__('Prenom')"/>
                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')"
                              required autofocus autocomplete="prenom"/>
                <x-input-error :messages="$errors->get('prenom')" class="mt-2"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')"/>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                              required autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="name" :value="__('N° CNI')"/>
                <x-text-input id="formFile" class="block mt-1 w-full" type="text" name="numero_cni"
                              :value="old('numero_cni')" required autofocus autocomplete="numero_cni"/>
                <x-input-error :messages="$errors->get('numero_cni')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="name" :value="__('Votre Piece')"/>
                <x-text-input id="cni_file" class="block mt-1 w-full" type="file" name="cni_file"
                              :value="old('cni_file')" required autofocus autocomplete="cni_file"/>
                <x-input-error :messages="$errors->get('cni_file')" class="mt-2"/>
            </div>

            <div>
                <x-input-label for="name" :value="__('Telephone')"/>
                <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone"
                              :value="old('telephone')" required autofocus autocomplete="telephone"/>
                <x-input-error :messages="$errors->get('telephone')" class="mt-2"/>
            </div>
            <div>
                <x-input-label for="name" :value="__('Adresse')"/>
                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')"
                              required autofocus autocomplete="adresse"/>
                <x-input-error :messages="$errors->get('adresse')" class="mt-2"/>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')"/>

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password"/>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

@endsection
