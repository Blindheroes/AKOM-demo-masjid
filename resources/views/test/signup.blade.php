<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
        <h2 class="text-2xl font-bold mb-4">Complete Your Signup</h2>

        <form action="{{ route('signup.submit') }}" method="POST">
            @csrf

            <div class="mb-4">
                <input type="text" value="{{ session('google_name') }}" disabled
                    class="w-full px-4 py-2 border rounded-lg bg-gray-200">
            </div>

            <div class="mb-4">
                <input type="email" value="{{ session('google_email') }}" disabled
                    class="w-full px-4 py-2 border rounded-lg bg-gray-200">
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="policy" name="policy" required class="mr-2">
                <label for="policy" class="text-gray-600 text-sm">
                    I agree to the <a href="#" class="text-blue-500 underline">Privacy Policy</a>
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" id="subscribe" name="subscribe" value="1" class="mr-2">
                <label for="subscribe" class="text-gray-600 text-sm">
                    Subscribe to News & Agenda
                </label>
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">
                Complete Signup
            </button>
        </form>
    </div>
</div>
