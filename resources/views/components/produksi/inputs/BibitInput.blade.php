<div class="bg-white rounded-lg shadow-md overflow-hidden p-6 h-full">
    <!-- Card Header -->
    <h2 class="text-xl font-semibold mb-6 text-gray-800 border-b pb-2">Bibit</h2>

    <!-- Form Inputs -->
    <div class="space-y-4">
        <!-- Jumlah pakan Input -->
        <div>
            <label for="jumlah_pakan" class="block mb-1 text-sm font-medium text-gray-700">Jumlah Pakan (kg)</label>
            <input
                type="number"
                id="jumlah_pakan"
                class="w-full p-2.5 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                placeholder="Masukkan jumlah"
                min="0"
            >
        </div>

        <!-- Tipe Bibit Input -->
        <div>
            <label for="tipe_bibit" class="block mb-1 text-sm font-medium text-gray-700">Tipe Bibit</label>
            <select
                id="tipe_bibit"
                class="w-full p-2.5 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
            >
                <option value="">Pilih tipe bibit</option>
                <option value="premium">Bibit Premium</option>
                <option value="standar">Bibit Standar</option>
            </select>
        </div>

        <!-- Date Picker -->
        <div>
            <label for="tanggal" class="block mb-1 text-sm font-medium text-gray-700">Tanggal</label>
            <div class="relative">
                <input
                    type="date"
                    id="tanggal"
                    class="w-full p-2.5 text-sm border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
        </div>
    </div>
</div>
