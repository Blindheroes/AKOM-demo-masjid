
<div class="container">
    <h1>Jadwal Sholat di {{ $jadwal['lokasi'] ?? 'Kota Tidak Diketahui' }}</h1>

    @if(isset($jadwal['jadwal']))
    <ul>
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
        <p>Data jadwal sholat tidak tersedia.</p>
    @endif

    <!-- Form pencarian untuk mengganti kota -->
    <form action="{{ url('/demo/jadwal-sholat') }}" method="GET">
        <div class="form-group">
            <label for="city">Masukkan Nama Kota:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="misal: jakarta" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Cari</button>
    </form>
</div>
