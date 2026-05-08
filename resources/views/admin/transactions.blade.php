@extends('layouts.admin')
@section('content')
<main class="flex-1 p-10 overflow-y-auto">
    <header class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black">Laporan Transaksi</h1>
            <p class="text-slate-500 font-medium">Pantau arus kas dan penjualan tiket Anda.</p>
        </div>
        <div class="flex gap-4">
            <button
                class="px-6 py-3 border-2 border-slate-200 rounded-2xl font-bold hover:bg-white hover:border-indigo-600 hover:text-indigo-600 transition">
                Ekspor Excel
            </button>
            <button
                class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
                Unduh PDF
            </button>
        </div>
    </header>

    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
        <div class="px-8 py-6 bg-slate-50/50 border-b flex flex-wrap gap-4 items-center">
            <div class="flex-1 min-w-[300px] flex gap-2">
                <input type="text" placeholder="Cari Order ID, Nama, atau Email..."
                    class="flex-1 px-5 py-3 rounded-xl border-slate-200 border bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition uppercase text-sm font-medium tracking-wide">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                    <tr>
                        <th class="px-8 py-4">Order ID</th>
                        <th class="px-8 py-4">Detail Pembeli</th>
                        <th class="px-8 py-4">Event</th>
                        <th class="px-8 py-4">Tgl Transaksi</th>
                        <th class="px-8 py-4">Status</th>
                        <th class="px-8 py-4 text-right">Total Tagihan</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-t">
                    @forelse($transactions as $transaction)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6">
                            <span class="font-mono font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-lg text-sm">{{ $transaction->order_id }}</span>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-bold text-slate-800">{{ $transaction->customer_name }}</p>
                            <p class="text-xs text-slate-500">{{ $transaction->customer_email }}</p>
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-medium text-slate-700">{{ $transaction->event->title ?? '-' }}</p>
                        </td>
                        <td class="px-8 py-6 text-sm text-slate-500">
                            {{ $transaction->created_at->format('d M Y, H:i') }}
                        </td>
                        <td class="px-8 py-6">
                            <span class="px-3 py-1 rounded-lg text-xs font-bold uppercase
                                @if($transaction->status === 'Success') bg-green-100 text-green-700 ring-1 ring-green-200
                                @elseif($transaction->status === 'Pending') bg-orange-100 text-orange-700 ring-1 ring-orange-200
                                @else bg-slate-100 text-slate-600 ring-1 ring-slate-200 @endif">
                                {{ $transaction->status }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-right font-black text-slate-900">
                            Rp {{ number_format($transaction->total_price, 0, ',', '.') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-8 py-10 text-center text-slate-500">Belum ada transaksi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-8 py-6 bg-slate-50/50 border-t">
            {{ $transactions->links() }}
        </div>
    </div>
</main>
@endsection