@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6 text-orange-600">{{ $product->name }}</h1>

    <div class="flex flex-col md:flex-row gap-6">
        <div class="md:w-1/2">
            <img src="{{ asset($product->productImages->first()->image ?? 'imagesource/default.jpg') }}" 
            alt="{{ $product->name }}" 
            class="w-full h-96 object-cover rounded">
        </div>

        <div class="md:w-1/2">
            <p class="text-gray-700 mb-2"><strong>Kategori:</strong> {{ $product->productCategory->name ?? 'N/A' }}</p>
            <p class="text-gray-700 mb-2"><strong>Toko:</strong> {{ $product->store->name ?? 'N/A' }}</p>
            <p class="text-gray-700 mb-2"><strong>Harga:</strong> ${{ number_format($product->price, 2) }}</p>
            <p class="text-gray-700 mb-2"><strong>Deskripsi:</strong> {{ $product->description ?? '-' }}</p>
            
            <a href="#" class="mt-4 inline-block bg-orange-600 text-white px-6 py-2 rounded hover:bg-orange-700">Beli Sekarang</a>
        </div>
    </div>
</div>
@endsection