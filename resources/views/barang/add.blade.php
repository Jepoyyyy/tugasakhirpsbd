<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masukan Barang Yang Ingin Dijual') }}
        </h2>
    </x-slot>
  
    <form method="POST" action="{{ route('barang.store') }}">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <!-- Name -->
        <div class ="p-4">
            <x-input-label for="name" :value="__('Nama Barang')" />
            <x-text-input id="nama_barang" class="block mt-1 w-full" type="text" name="nama_barang" :value="old('nama_barang')" required autofocus autocomplete="nama" />
            <x-input-error :messages="$errors->get('nama_barang')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="p-4">
        <x-input-label for="jenis_barang" :value="__('Jenis Barang')"/>
            <select class="block mt-1 w-full" name="jenis_barang" >
            <option value="pakaian">Pakaian</option>
            <option value="aksesoris">Aksesoris</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
            </select>
        </div>
        {{-- Phone --}}
        <div class="p-4">
            <x-input-label for="harga_barang" :value="__('Harga Barang')" />
            <x-text-input id="harga_barang" class="block mt-1 w-full" type="text" name="harga_barang" :value="old('harga_barang')" required autofocus autocomplete="harga barang" />
            <x-input-error :messages="$errors->get('harga_barang')" class="mt-2" />
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
  