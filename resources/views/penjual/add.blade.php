<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masukan Data Penjual') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" p-5 sm:px-6 lg:p-8 " >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <form method="POST" action="{{ route('penjual.store') }}">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <!-- Name -->
        <div class ="p-4">
            <x-input-label for="name" :value="__('Nama ')" />
            <x-text-input id="nama_penjual" class="block mt-1 w-full" type="text" name="nama_penjual" :value="old('nama_penjual')" required autofocus autocomplete="nama" />
            <x-input-error :messages="$errors->get('nama_penjual')" class="mt-2" />
        </div>

        {{-- Phone --}}
        <div class="p-4">
            <x-input-label for="kota_penjual" :value="__('kota')" />
            <x-text-input id="kota_penjual" class="block mt-1 w-full" type="text" name="kota_penjual" :value="old('kota_penjual')" required autofocus autocomplete="kota" />
            <x-input-error :messages="$errors->get('kota_penjual')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end p-4">   
                <x-primary-button class="ml-4">
                    {{ __('Buat') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
</div>
        
  </x-app-layout>
  