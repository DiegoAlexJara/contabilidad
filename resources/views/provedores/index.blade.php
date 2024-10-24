@extends('components.app-layots')
@section('title')
    PROVEDORES
@endsection
@push('estyls')
    <link rel="stylesheet" href="{{ asset('css/provedores-index.css') }}">
@endpush

@section('content')
    <div class=" p-4 sm:ml-64 ">
        <div class="inline-flex" style="margin: 10px">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block  p-3 ps-10  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos..." required style="width:500px" />
            </div>
            <a href="{{ route('provedores.create') }}" style="margin-left: 10px">
                <button type="button"
                    class=" mt-1    text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-6 py-2 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    AGREGAR
                </button>
            </a>
        </div>

        @if (session('message'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                {{ session('message') }}
            </div>
        @endif


        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 tables" style="width: 100%">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        CODIGO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        MONEDA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ESTATUS
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EDITAR
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($provedors as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                            @if ($item->id <= 9)
                                0{{ $item->id }}
                            @else
                                {{ $item->id }}
                            @endif

                        </th>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->currency }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-4">
                            @livewire('ProvedoresEditar', ['Idprovedor' => $item->id], key($item->id))
                            {{-- @livewire('EditImage', ['IdUser' => $registro->id, 'model' => \App\Models\Productos::class], key($registro->id)) --}}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

@push('JS')
@endpush
