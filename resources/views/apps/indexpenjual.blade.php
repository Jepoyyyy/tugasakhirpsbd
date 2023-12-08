<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
     </h2>
     
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('penjual.add') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">
                    Tambah Penjual
                </a>
                <a href="{{ route('barang.add') }}" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">
                    Tambah Barang
                </a>
          </div>
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
            <a href="{{ route('barang.edit', ['id' => $data->id_barang]) }}" class="btn btn-{{ $data->id_barang % 2 == 0 ? 'primary' : 'info' }}">
                Edit
            </a>
            
            <a href="{{ route('barang.delete', ['id' => $data->id_barang]) }}" class="btn btn-danger">
                Hapus
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
</x-app-layout>
