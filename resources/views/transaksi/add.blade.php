<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lakukan Transaksi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" p-5 sm:px-6 lg:p-8 " >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <form action="{{ route('transaksi.store') }}" method="post">
        @csrf
    
        <x-input-label for="nama_penjual" :value="__('Tipe Akun')"/>
            <select class="block mt-1 w-full" name="id_penjual" >
                @foreach($penjualData as $penjual)
                <option value="{{ $penjual->id_penjual}}">{{ $penjual->nama_penjual }}</option>
            @endforeach
            </select>
        <x-input-label for="nama_barang" :value="__('Tipe Akun')"/>
            <select class="block mt-1 w-full" name="id_barang" >
                @foreach($barangData as $barang)
                <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
            @endforeach
            </select>
        <x-input-label for="name" :value="__('Tipe Akun')"/>
            <select class="block mt-1 w-full" name="id_user" >
                @foreach($userData as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
            </select>
            <div>
            <x-input-label for="jumlah_transaksi" :value="__('Jumlah Transaksi')" />
            <x-text-input id="jumlah_transaksi" class="block mt-1 w-full" type="number" name="jumlah_transaksi" :value="old('jumlah_transaksi')" required autofocus autocomplete="jumlah_transaksi" />
            <x-input-error :messages="$errors->get('jumlah_transaksi')" class="mt-2" />
            </div>
            
        <button class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-4' type="submit">Tambah Transaksi</button>
    </form> 
</div>
</div>
</div>
  </x-app-layout>
  