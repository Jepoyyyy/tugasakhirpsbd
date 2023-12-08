<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="bg-white px-4 py-3 shadow-sm ">
            <div class="container d-flex justify-content-between">
                <div class="p-2">
                
                </div>
                <div class="p-1">
                    <form class="form-inline d-flex justify-content-end" action="{{ route('barang.search') }}" method="GET" role="search">
                        <div class="col-5 p-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search"
                                aria-label="Search">
                        </div>
                        <div class="col-3 py-0 px-2">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="flex items-center justify-center">
                    <table class="table-auto border border-collapse">
                        <thead>
                            <tr>
                                <th class="border p-4">ID</th>
                                <th class="border p-4">Nama</th>
                                <th class="border p-4">Jenis</th>
                                <th class="border p-4">Harga</th>
                                <th class="border p-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if (count($datas) > 0) --}}
                            @foreach ($datas as $data)
                            <tr>
                                <td class="border p-4">{{ $data->id_barang }}</td>
                                <td class="border p-4">{{ $data->nama_barang }}</td>
                                <td class="border p-4">{{ $data->jenis_barang }}</td>
                                <td class="border p-4">Rp. {{ $data->harga_barang }}</td>
                                <td class="border p-4">
                                    <a href="{{ route('transaksi.add') }}" class="btn btn-primary">
                                        Beli Sekarang
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
