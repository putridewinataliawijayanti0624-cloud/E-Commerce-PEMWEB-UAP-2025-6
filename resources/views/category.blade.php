@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-orange-600">Kategori: {{ $category->name }}</h1>
    
    @if($category->products->isEmpty())
        <p class="text-gray-700">Belum ada produk di kategori ini.</p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($category->products as $product)
            <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
                {{-- Gambar produk pertama --}}
                <img src="{{ asset($product->productImages->first()->image ?? 'imagesource/default.jpg') }}" 
                alt="{{ $product->name }}" 
                class="w-full h-48 object-cover rounded">

                {{-- Nama produk --}}
                <h2 class="text-xl font-semibold mt-2">{{ $product->name }}</h2>

                {{-- Nama toko --}}
                <p class="text-gray-500 text-sm">Toko: {{ $product->store->name ?? 'N/A' }}</p>

                {{-- Harga --}}
                <p class="text-gray-700 mt-1">${{ number_format($product->price, 2) }}</p>

                {{-- Tombol view --}}
                <a href="{{ route('store.show', $product->id) }}" 
                   class="mt-3 inline-block bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">
                   View
                </a>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
