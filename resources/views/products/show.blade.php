@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white p-10">

    <h1 class="text-3xl font-bold text-orange-600 mb-6">
        {{ $product->name }}
    </h1>

    {{-- gambar --}}
    <div>
        @if($product->productImages->first())
            <img src="{{ asset('imagesource/' . $product->productImages->first()->image) }}"
                 class="w-64 rounded-xl shadow">
        @else
            <img src="{{ asset('imagesource/noimage.png') }}" class="w-64 opacity-50">
        @endif
    </div>

    <p class="mt-6 text-xl font-semibold">
        Harga: Rp {{ number_format($product->price, 0, ',', '.') }}
    </p>

    <p class="mt-4 text-gray-700">
        {{ $product->description }}
    </p>

    {{-- 🔥 Tombol Checkout --}}
    <a href="{{ route('orders.index') }}"
       class="inline-block mt-8 bg-orange-600 hover:bg-orange-700 
              text-white font-semibold py-2 px-6 rounded-lg shadow">
        Checkout
    </a>

</div>
@endsection
