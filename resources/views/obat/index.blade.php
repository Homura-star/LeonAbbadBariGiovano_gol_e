<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat - Apotek Premium</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        .table-row-hover:hover {
            background-color: rgba(241, 245, 249, 0.5);
            transform: translateY(-1px);
            transition: all 0.2s ease;
        }
    </style>
</head>

<body class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-2">Sistem Informasi Obat</h1>
            <p class="text-slate-500 text-lg">Kelola stok dan data obat dengan tampilan modern dan intuitif.</p>
        </div>

        <div class="glass-card rounded-3xl overflow-hidden shadow-2xl">
            <div class="px-8 py-6 border-b border-slate-200 flex justify-between items-center bg-white/50">
                <h2 class="text-xl font-bold text-slate-800">Daftar Stok Obat</h2>
                <div class="flex space-x-3">
                    <button
                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm transition-all focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 flex items-center shadow-lg shadow-indigo-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Obat
                    </button>
                    <button
                        class="px-4 py-2 bg-white text-slate-700 border border-slate-200 hover:bg-slate-50 rounded-xl font-semibold text-sm transition-all shadow-sm">
                        Export PDF
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50">
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                ID</th>
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                Nama Obat</th>
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                Jenis</th>
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                Harga</th>
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200">
                                Stok</th>
                            <th
                                class="px-8 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-200 text-center">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($obats as $obat)
                            <tr class="table-row-hover group bg-white/40">
                                <td class="px-8 py-5 text-sm font-medium text-slate-400">#{{ $obat['id'] }}</td>
                                <td class="px-8 py-5">
                                    <div class="font-bold text-slate-800">{{ $obat['nama'] }}</div>
                                    <div class="text-xs text-slate-500 mt-0.5">{{ $obat['deskripsi'] }}</div>
                                </td>
                                <td class="px-8 py-5">
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-bold 
                                        @if($obat['jenis'] == 'Tablet') bg-blue-50 text-blue-600 @elseif($obat['jenis'] == 'Kapsul') bg-purple-50 text-purple-600 @elseif($obat['jenis'] == 'Sirup') bg-amber-50 text-amber-600 @else bg-slate-50 text-slate-600 @endif">
                                        {{ $obat['jenis'] }}
                                    </span>
                                </td>
                                <td class="px-8 py-5 font-semibold text-slate-700">Rp
                                    {{ number_format($obat['harga'], 0, ',', '.') }}</td>
                                <td class="px-8 py-5">
                                    <div class="flex items-center">
                                        <span class="font-bold text-slate-800 mr-2">{{ $obat['stok'] }}</span>
                                        <div class="w-16 h-1.5 bg-slate-100 rounded-full overflow-hidden">
                                            <div class="h-full bg-emerald-500"
                                                style="width: {{ $obat['stok'] > 100 ? 100 : $obat['stok'] }}%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5 text-center">
                                    <div
                                        class="flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors"
                                            title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                            title="Hapus">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-8 py-4 bg-slate-50/50 border-t border-slate-200 text-center">
                <p class="text-xs text-slate-400 font-medium tracking-wide">© 2026 Apotek Premium Management System</p>
            </div>
        </div>
    </div>
</body>

</html>