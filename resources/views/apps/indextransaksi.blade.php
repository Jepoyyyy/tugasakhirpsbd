<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaksi') }}
        </h2>
        <div class="bg-white px-4 py-3 shadow-sm ">
            <div class="container d-flex justify-content-between">
                 <div class="p-1">
                    <form class="form-inline d-flex justify-content-end" action="{{ route('transaksi.search') }}" method="GET" role="search">
                        <div class="col-5 p-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search"
                                aria-label="Search">
                        </div>
                        
                    </form>
                </div>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <a href="{{ route('transaksi.add') }}" class="btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Tambah Transaksi
                </a>
                <div class="flex items-center justify-center">
                    <table class="table-auto border border-collapse p-4">
                        <thead>
                            <tr>
                                <th class="border p-4">ID</th>
                                <th class="border p-4">Barang</th>
                                <th class="border p-4">Penjual</th>
                                <th class="border p-4">Pembeli</th>
                                <th class="border p-4">Jumlah</th>
                                <th class="border p-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($transaksiData as $data)
                            <tr>
                                <td class="border p-4">{{ $data->id_transaksi }}</td>
                                <td class="border p-4">{{ $data->nama_barang }}</td>
                                <td class="border p-4">{{ $data->nama_penjual}}</td>
                                <td class="border p-4"> {{ $data->name }}</td>
                                <td class="border p-4"> {{ $data->jumlah_transaksi }}</td>
                                <td class="border p-4">
                                    <a href="{{ route('transaksi.delete', ['id' => $data->id_transaksi]) }}" class="btn btn-primary">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
