@extends('admin')
@section('guichet')
    <x-guest-layout>
        <form method="POST" action="{{ route('savePack') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="nom_pack" :value="__('Nom')" />
                <x-text-input id="nom_pack" class="block mt-1 w-full" type="text" name="nom_pack" :value="old('nom_pack')" required autofocus autocomplete="nom_pack" />
                <x-input-error :messages="$errors->get('nom_pack')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="azio" :value="__('Azio')" />
                <x-text-input id="azio" class="block mt-1 w-full" type="number" name="azio" :value="old('azio')" required autofocus autocomplete="azio" />
                <x-input-error :messages="$errors->get('azio')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="plafond" :value="__('Plafond')" />
                <x-text-input id="plafond" class="block mt-1 w-full" type="number" name="plafond" :value="old('plafond')" required autofocus autocomplete="plafond" />
                <x-input-error :messages="$errors->get('plafond')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Ajouter') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
@endsection
