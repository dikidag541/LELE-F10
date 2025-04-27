@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6 transition-all duration-300 ml-0" id="mainContent">
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Produksi</h1>
        <div class="w-full md:w-auto">
            @include('components.produksi.dropdownSiklus')
        </div>
    </div>

    <!-- Grid Input Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
        <form action="{{ route('bibit.store') }}" method="POST">
            @csrf
        
            <!-- Card Bibit -->
            <div class="bg-white rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow border border-gray-100 card-active ring-2 ring-blue-500">
                <div class="cursor-pointer" onclick="showTable('bibit')">
                    <h2 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Bibit
                    </h2>
                </div>
        
                <div class="space-y-3">
                    <div onclick="showTable('bibit')">
                        <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Jumlah Bibit (kg)</label>
                        <input type="number" name="kuantitas" required
                            class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-300 focus:border-blue-300 cursor-pointer transition"
                            placeholder="Masukkan jumlah">
                    </div>
        
                    <div onclick="showTable('bibit')">
                        <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Tipe Bibit</label>
                        <select name="type" required
                            class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-300 focus:border-blue-300 cursor-pointer transition">
                            <option value="">Pilih tipe bibit</option>
                            <option value="Bibit Premium">Bibit Premium</option>
                            <option value="Bibit Standar">Bibit Standar</option>
                        </select>
                    </div>
        
                    <div onclick="showTable('bibit')">
                        <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Tanggal</label>
                        <input type="date" name="tanggal" required
                            class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-blue-300 focus:border-blue-300 cursor-pointer transition">
                    </div>
        
                    <div class="pt-2">
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition">
                            Simpan Bibit
                        </button>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Card Pakan -->
        <div class="bg-white rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow border border-gray-100">
            <div class="cursor-pointer" onclick="showTable('pakan')">
                <h2 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Pakan
                </h2>
            </div>
            <div class="space-y-3">
                <div onclick="showTable('pakan')">
                    <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Jumlah Pakan (kg)</label>
                    <input type="number" name="pakan_jumlah"
                        class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-green-300 focus:border-green-300 cursor-pointer transition"
                        placeholder="Masukkan jumlah">
                </div>
                <div onclick="showTable('pakan')">
                    <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Tipe Pakan</label>
                    <select name="pakan_tipe"
                        class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-green-300 focus:border-green-300 cursor-pointer transition">
                        <option value="">Pilih tipe pakan</option>
                        <option value="premium">Pakan Premium</option>
                        <option value="standar">Pakan Standar</option>
                    </select>
                </div>
                <div onclick="showTable('pakan')">
                    <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Tanggal</label>
                    <input type="date" name="pakan_tanggal"
                        class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-green-300 focus:border-green-300 cursor-pointer transition">
                </div>
            </div>
        </div>

        <!-- Card Panen -->
        <div class="bg-white rounded-lg shadow-sm p-4 hover:shadow-md transition-shadow border border-gray-100">
            <div class="cursor-pointer" onclick="showTable('panen')">
                <h2 class="text-lg font-semibold mb-3 text-gray-800 border-b pb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Panen
                </h2>
            </div>
            <div class="space-y-3">
                <div onclick="showTable('panen')">
                    <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Jumlah Panen (kg)</label>
                    <input type="number" name="panen_jumlah"
                        class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-orange-300 focus:border-orange-300 cursor-pointer transition"
                        placeholder="Masukkan jumlah">
                </div>
                <div onclick="showTable('panen')">
                    <label class="block text-sm font-medium text-gray-600 mb-1 cursor-pointer">Tanggal</label>
                    <input type="date" name="panen_tanggal"
                        class="w-full p-2 text-sm border border-gray-200 rounded-md focus:ring-2 focus:ring-orange-300 focus:border-orange-300 cursor-pointer transition">
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed bottom-6 right-6">
        <button class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition transform hover:scale-105 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span class="sr-only">Create</span>
        </button>
    </div>

    <!-- Tables Section -->
    <div class="mt-8 space-y-8">
        <!-- Bibit Table -->
        <div id="bibit-table">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Data Bibit</h2>
                <div class="text-sm text-gray-500">Total: <span class="font-medium">1,250 kg</span></div>
            </div>
@include('components.produksi.tables.BibitTable', ['bibits' => $dataBibit])
        </div>

        <!-- Pakan Table (hidden by default) -->
        <div id="pakan-table" class="hidden">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Data Pakan</h2>
                <div class="text-sm text-gray-500">Total: <span class="font-medium">980 kg</span></div>
            </div>
            @include('components.produksi.tables.PakanTable')
        </div>

        <!-- Panen Table (hidden by default) -->
        <div id="panen-table" class="hidden">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Data Panen</h2>
                <div class="text-sm text-gray-500">Total: <span class="font-medium">2,040 kg</span></div>
            </div>
            @include('components.produksi.tables.PanenTable')
        </div>
    </div>
</div>

<script>
    // Function to show selected table
    function showTable(tableType) {
        // Hide all tables
        document.querySelectorAll('#bibit-table, #pakan-table, #panen-table').forEach(el => {
            el.classList.add('hidden');
        });

        // Show selected table
        document.getElementById(tableType + '-table').classList.remove('hidden');

        // Update active card styling
        document.querySelectorAll('.bg-white').forEach((card, index) => {
            card.classList.remove('card-active', 'ring-2', 'ring-blue-500');
            if ((tableType === 'bibit' && index === 0) ||
                (tableType === 'pakan' && index === 1) ||
                (tableType === 'panen' && index === 2)) {
                card.classList.add('card-active', 'ring-2', 'ring-blue-500');
            }
        });

        // Smooth scroll to table
        document.getElementById(tableType + '-table').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    // Sidebar layout adjustment
    document.addEventListener('DOMContentLoaded', function() {
        const adjustLayout = () => {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            if (sidebar.classList.contains('-translate-x-full')) {
                mainContent.classList.remove('md:ml-64');
                mainContent.classList.add('md:ml-0');
            } else {
                mainContent.classList.remove('md:ml-0');
                mainContent.classList.add('md:ml-64');
            }
        };

        adjustLayout();
        document.getElementById('toggleSidebar')?.addEventListener('click', adjustLayout);
        document.getElementById('closeSidebar')?.addEventListener('click', adjustLayout);
        window.addEventListener('resize', adjustLayout);
    });
</script>

<style>
    .card-active {
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.1), 0 2px 4px -1px rgba(59, 130, 246, 0.06);
    }
    input, select {
        transition: all 0.2s ease;
    }
    table {
        min-width: 100%;
    }
    @media (max-width: 768px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
</style>
@endsection
