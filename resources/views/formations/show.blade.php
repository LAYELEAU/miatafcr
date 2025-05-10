@extends('layouts.app') <!-- ou adapte selon ton layout -->

@section('content')
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('build/assets/images/formation-default.jpg') }}" alt="Image Formation" class="w-full h-64 object-cover">

            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $formation->title }}</h1>
                
                <p class="text-gray-600 mb-6">
                    {{ $formation->description }}
                </p>

                <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
                    <div class="text-sm text-gray-500">
                        📅 Date : <span class="font-medium">{{ $formation->date ?? 'À venir' }}</span>
                    </div>
                    <div class="text-sm text-gray-500">
                        🕘 Durée : <span class="font-medium">{{ $formation->duration ?? 'Non précisée' }}</span>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{ route('formations.index') }}" 
                       class="inline-block bg-[#ffbe58] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#a3021b] transition">
                        ← Retour aux formations
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
