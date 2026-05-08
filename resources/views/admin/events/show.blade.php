@extends('layouts.admin')
@section('title', 'Detail Event - Admin')
@section('page_title', 'Detail Event')
@section('page_subtitle', 'Informasi lengkap acara.')
@section('content')
<div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm max-w-3xl">
    <div class="flex gap-6 mb-6">
        @if($event->poster_path)
        <img src="{{ asset('storage/' . $event->poster_path) }}" class="w-48 h-64 rounded-2xl object-cover shadow-sm">
        @else
        <div class="w-48 h-64 rounded-2xl bg-slate-100 flex items-center justify-center">
            <span class="text-slate-400">No Poster</span>
        </div>
        @endif
        <div class="flex-1">
            <h2 class="text-2xl font-black text-slate-800">{{ $event->title }}</h2>
            <p class="text-slate-500 mt-1">{{ $event->category->name ?? '-' }}</p>
            <div class="mt-4 space-y-2">
                <p><span class="font-bold text-slate-600">Tanggal:</span> {{ $event->date->format('d M Y H:i') }}</p>
                <p><span class="font-bold text-slate-600">Lokasi:</span> {{ $event->location }}</p>
                <p><span class="font-bold text-slate-600">Harga:</span> Rp {{ number_format($event->price, 0, ',', '.') }}</p>
                <p><span class="font-bold text-slate-600">Stok:</span> {{ $event->stock }}</p>
            </div>
        </div>
    </div>
    <div class="mb-6">
        <h3 class="font-bold text-slate-700 mb-2">Deskripsi</h3>
        <p class="text-slate-600">{{ $event->description }}</p>
    </div>
    <div class="pt-4 flex justify-end gap-4 border-t border-slate-100">
        <a href="{{ route('admin.events.edit', $event->id) }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition">Edit</a>
        <a href="{{ route('admin.events.index') }}" class="px-6 py-3 text-slate-500 font-bold hover:text-slate-800 transition">Kembali</a>
    </div>
</div>
@endsection