<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
        <h2 class="text-2xl font-bold mb-4">Welcome</h2>

        @if(Auth::check())
            <!-- Jika sudah login, tampilkan tombol Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">
                    Logout
                </button>
            </form>
        @else
            <!-- Jika belum login, tampilkan tombol Login Google -->
            <a href="{{ route('google.login') }}" class="w-full flex justify-center items-center bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                <i class="fab fa-google mr-2"></i> Login with Google
            </a>
        @endif
    </div>
</div>
