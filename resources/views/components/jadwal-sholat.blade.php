
    <!-- Prayer Times Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-20 text-center">
            <h2 class="text-3xl font-bold">Today's Prayer Times</h2>
            <p> at {{$jadwal['lokasi']}}, {{ $jadwal['daerah'] }}</p>
            <p>{{$jadwal['jadwal']['tanggal']}}</p>
            <form method="GET" action="" class="mb-4 flex flex-col sm:flex-row gap-2">
                <input type="text" name="city" placeholder="Ganti Kota" class="border p-2 rounded-lg w-full sm:w-auto flex-1" required>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Cari</button>
            </form>


            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mt-8">
                @if(isset($jadwal['jadwal']))
                @foreach([ 'subuh',  'dzuhur', 'ashar', 'maghrib', 'isya'] as $waktu)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold">{{ ucfirst($waktu) }}</h3>
                        <p class="text-2xl">{{ $jadwal['jadwal'][$waktu] }}</p>
                    </div>
                @endforeach
                @else
                    <p class="text-red-500 mt-4">Data jadwal tidak tersedia.</p>
                @endif
            </div>
        </div>
    </section>
