@vite('resources/css/app.css')
  
  <div class="max-w-2xl mx-auto p-6 bg-black text-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-red-500 mb-4">Jadwal Sholat di {{ $jadwal['lokasi'] ?? 'Kota Tidak Diketahui' }}</h1>
    
    @if(isset($jadwal['jadwal']))
    <ul class="space-y-2">
        <li><strong>Imsak:</strong> {{ $jadwal['jadwal']['imsak'] }}</li>
        <li><strong>Subuh:</strong> {{ $jadwal['jadwal']['subuh'] }}</li>
        <li><strong>Terbit:</strong> {{ $jadwal['jadwal']['terbit'] }}</li>
        <li><strong>Dhuha:</strong> {{ $jadwal['jadwal']['dhuha'] }}</li>
        <li><strong>Dzuhur:</strong> {{ $jadwal['jadwal']['dzuhur'] }}</li>
        <li><strong>Ashar:</strong> {{ $jadwal['jadwal']['ashar'] }}</li>
        <li><strong>Maghrib:</strong> {{ $jadwal['jadwal']['maghrib'] }}</li>
        <li><strong>Isya:</strong> {{ $jadwal['jadwal']['isya'] }}</li>
    </ul>
    @else
        <p class="text-gray-400">Data jadwal sholat tidak tersedia.</p>
    @endif

    <!-- Form pencarian untuk mengganti kota -->
    <form action="{{ url('/demo/jadwal-sholat') }}" method="GET" class="mt-6">
        <label for="city" class="block text-red-500 font-semibold mb-2">Masukkan Nama Kota:</label>
        <input type="text" name="city" id="city" class="w-full p-2 rounded-md bg-gray-800 text-white border border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="misal: Jakarta" required>
        <button type="submit" class="mt-4 w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition">Cari</button>
    </form>
</div>
