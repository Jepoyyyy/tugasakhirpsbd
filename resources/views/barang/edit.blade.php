<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Masukan Barang Yang Ingin Dijual') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class=" p-5 sm:px-6 lg:p-8 " >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    
            <h5 class="card-title fw-bolder mb-3">Edit {{ $data->nama_barang }}</h5>
    
            <form method="post" id="addform" action="{{ route('barang.update', $data->id_barang) }}">
                @csrf
                <div class="p-5 mb-3 ">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data->nama_barang }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_barang" class="form-label">Jenis Barang</label>
                    <select name="jenis_barang" id="jenis_barang" class="form-control">
                        
                        <option value="{{ $data->jenis_barang }}">{{ $data->jenis_barang }}</option>
                       
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="{{ $data->harga_barang }}" >
                </div>
                
                <div class="flex items-center justify-end p-4">   
                    <x-primary-button class="ml-4">
                        {{ __('Update') }}
                    </x-primary-button>
            </form>
            </div>
        </div>  
    </div>  
</x-app-layout>
  