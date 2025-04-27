<div class="flex flex-col md:flex-row gap-4">
    <!-- Tabel Utama -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg flex-1">
        <table class="w-full text-sm text-left rtl:text-right text-gray-800">
            <thead class="text-xs uppercase bg-[#696CFF] text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">No.</th>
                    <th scope="col" class="px-6 py-3">Tanggal</th>
                    <th scope="col" class="px-6 py-3">Kuantitas</th>
                    <th scope="col" class="px-6 py-3">Tipe</th>
                    <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">1</td>
                    <td class="px-6 py-4">4794 Fairway Drive</td>
                    <td class="px-6 py-4">510-604-8670</td>
                    <td class="px-6 py-4">Pakan Premium</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end space-x-3">
                            <button class="text-[#696CFF] hover:text-[#5a5de8]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </button>
                            <button class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">2</td>
                    <td class="px-6 py-4">1154 Thompson Drive</td>
                    <td class="px-6 py-4">510-298-7529</td>
                    <td class="px-6 py-4">Pakan Premium</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end space-x-3">
                            <button class="text-[#696CFF] hover:text-[#5a5de8]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </button>
                            <button class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Data rows lainnya... -->
            </tbody>
        </table>
    </div>

    <!-- Panel Total di Samping -->
    <div class="w-full md:w-64 bg-[#696CFF] text-white p-4 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mb-4">Total Pakan</h3>
        <div class="space-y-3">
            <div>
                <label class="block text-sm font-medium mb-1">Total (kg)</label>
                <div class="bg-white/20 p-2 rounded text-xl font-bold">2,040</div>
            </div>
        </div>
    </div>
</div>
