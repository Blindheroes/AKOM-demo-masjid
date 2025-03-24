<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Iman Mosque</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex items-center lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5 flex items-center space-x-2">
                    <img class="h-8 w-auto" src="nabawi-mosque.png" alt="Al-Iman Mosque">
                    <h1 class="text-xl font-bold">Al-Iman Mosque</h1>
                </a>
            </div>            
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Home</a>
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Prayes Times</a>
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Events</a>
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Donate</a>
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Community</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="#" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">Log in</a>
            </div>
          </nav>
    </header>
    
    <!-- Hero Section -->
    <section class="bg-gray-800 py-32">
        <div class="container mx-auto px-20 text-left">
            <h2 class="text-5xl font-bold text-white mb-6">Welcome to Al-Iman <span class="block">Mosque</span></h2>
            <p class="mt-4 text-lg text-white mb-6">Join our vibrant community in worship and learning</p>
            <div class="mt-6">
                <button class="bg-gray-400 px-6 py-3 rounded-lg hover:bg-gray-500 mr-4 text-black">Prayer Times</button>
                <button class="bg-black px-6 py-3 rounded-lg hover:bg-gray-700 text-white">Donate Now</button>
            </div>
        </div>
    </section>
    
    <!-- Prayer Times Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-20 text-center">
            <h2 class="text-3xl font-bold">Today's Prayer Times</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mt-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Fajr</h3>
                    <p class="text-2xl">5:30 AM</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Dhuhr</h3>
                    <p class="text-2xl">12:30 PM</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Asr</h3>
                    <p class="text-2xl">3:45 PM</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Maghrib</h3>
                    <p class="text-2xl">6:15 PM</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Isha</h3>
                    <p class="text-2xl">7:45 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-10">
            <h2 class="text-3xl font-bold text-left mb-10">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="bg-gray-800 text-gray-200 px-3 py-1 rounded-full text-sm">Friday Prayer</span>
                    <h3 class="text-xl font-semibold mt-4">Jumu'ah Prayer</h3>
                    <p class="text-gray-600">Every Friday at 1:00 PM</p>
                    <button class="mt-4 bg-white text-gray-700 flex items-center py-2 rounded space-x-2">
                        <img class="h-5 w-auto" src="bell.png" alt="Al-Iman Mosque">
                        <h5 class="hover:text-black hover:font-bold transition">Remind Me</h5>
                    </button>
                    
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="bg-gray-800 text-gray-200 px-3 py-1 rounded-full text-sm">Islamic Class</span>
                    <h3 class="text-xl font-semibold mt-4">Quran Study Circle</h3>
                    <p class="text-gray-600">Every Sunday at 10:00 AM</p>
                    <button class="mt-4 bg-white text-gray-700 flex items-center py-2 rounded space-x-2">
                        <img class="h-5 w-auto" src="bell.png" alt="Al-Iman Mosque">
                        <h5 class="hover:text-black hover:font-bold transition">Remind Me</h5>
                    </button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <span class="bg-gray-800 text-gray-200 px-3 py-1 rounded-full text-sm">Community</span>
                    <h3 class="text-xl font-semibold mt-4">Community Iftar</h3>
                    <p class="text-gray-600">March 15, 2025 at 6:30 PM</p>
                    <button class="mt-4 bg-white text-gray-700 flex items-center py-2 rounded space-x-2">
                        <img class="h-5 w-auto" src="bell.png" alt="Al-Iman Mosque">
                        <h5 class="hover:text-black hover:font-bold transition">Remind Me</h5>
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Donation Section -->
    <section class="py-20">
        <div class="container mx-auto px-10">
            <h2 class="text-3xl font-bold text-left mb-10">Support Our Mosque</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img class="h-10 w-auto mx-auto" src="donation/give.png" alt="">
                    <h3 class="text-xl font-semibold mt-4">General Donation</h3>
                    <p class="text-gray-600">Support our mosque’s daily operations and maintenance</p>
                    <button class="mt-4 bg-black text-white py-2 px-32 rounded hover:bg-gray-700 whitespace-nowrap">Donate Now</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img class="h-10 w-auto mx-auto" src="donation/gold.png" alt="">
                    <h3 class="text-xl font-semibold mt-4">Zakat Al-Mal</h3>
                    <p class="text-gray-600">Calculate and pay your annual Zakat</p>
                    <button class="mt-4 bg-black text-white px-32 py-2 rounded hover:bg-gray-700">Pay Zakat</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <img class="h-10 w-auto mx-auto" src="donation/rice.png" alt="">
                    <h3 class="text-xl font-semibold mt-4">Zakat Al-Fitr</h3>
                    <p class="text-gray-600">Pay your Ramadan Zakat Al-Fitr</p>
                    <button class="mt-4 bg-black text-white px-32 py-2 rounded hover:bg-gray-700">Pay Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stay Updated Section -->
    <section class="bg-gray-300 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold">Stay Updated</h2>
            <p class="text-gray-600 mt-2">Subscribe to receive notifications about upcoming events and important announcements</p>
            <div class="mt-6 flex justify-center space-x-3">
                <input type="email" placeholder="Enter your email" class="w-1/3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400">
                <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="bg-white py-16 px-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-left">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <div class="bg-gray-100 p-0 rounded-lg shadow-md">
                    <div class="h-48 bg-gray-300 rounded-md flex items-center justify-center">
                        <span class="text-gray-500">News Image</span>
                    </div>
                    <div class="p-5">
                    <h3 class="text-xl font-semibold mt-4">New Islamic Library Opening</h3>
                    <p class="text-gray-600 mt-2">We’re excited to announce the opening of our new Islamic library.</p>
                    <div class="flex justify-between items-center mt-8">
                        <p class="text-gray-500 text-sm">Jan 10, 2025</p>
                        <a href="#" class="text-gray-800 font-semibold">Read More →</a>
                    </div>
                    </div>
                    
                </div>
                <div class="bg-gray-100 p-0 rounded-lg shadow-md">
                    <div class="h-48 bg-gray-300 rounded-md flex items-center justify-center">
                        <span class="text-gray-500">News Image</span>
                    </div>
                    <div class="p-5">
                    <h3 class="text-xl font-semibold mt-4">Youth Program Launch</h3>
                    <p class="text-gray-600 mt-2">Starting next month, we’ll be launching a comprehensive youth program.</p>
                    <div class="flex justify-between items-center mt-8">
                        <p class="text-gray-500 text-sm">Jan 8, 2025</p>
                        <a href="#" class="text-gray-800 font-semibold">Read More →</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Directions Section -->
    <section class="bg-gray-100 py-16 px-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-left">Location & Directions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <!-- Map Placeholder -->
                <div class="h-64 bg-gray-300 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500">Map Integration</span>
                </div>
                <!-- Address & Contact Info -->
                <div>
                    <h3 class="text-xl font-semibold">Address</h3>
                    <p class="text-gray-600 mt-2">123 Mosque Street, City, <span class="block">State 12345</span></p>
                    <button class="mt-4 bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition">
                    Get Directions
                    </button>
                    <h3 class="text-xl font-semibold mt-6">Contact</h3>
                    <p class="text-gray-600 mt-2"><strong>📞</strong> (555) 123-4567</p>
                    <p class="text-gray-600"><strong>✉️</strong> info@al-iman-mosque.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Forum Section -->
    <section class="py-16 px-10 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-left">Community Forum</h2>
            <div class="mt-8 bg-gray-50 p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Recent Discussions</h3>
                <!-- Discussion List -->
                <div class="space-y-4">
                    <!-- Discussion Item -->
                    <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row justify-between">
                        <div class="flex items-center space-x-3">
                            <img class="h-10 w-auto" src="ikhwan.png" alt="">
                            <div>
                                <p class="font-semibold">Ahmad</p>
                                <p class="text-gray-600">Question about prayer times during travel</p>
                                <p class="text-gray-400 text-sm">2 hours ago • 5 replies</p>
                            </div>
                        </div>
                    </div>
                    <!-- Discussion Item -->
                    <div class="bg-white p-4 rounded-lg shadow flex flex-col md:flex-row justify-between">
                        <div class="flex items-center space-x-3">
                            <img class="h-10 w-auto" src="akhwat.png" alt="">
                            <div>
                                <p class="font-semibold">Sarah</p>
                                <p class="text-gray-600">Seeking advice on Ramadan preparation</p>
                                <p class="text-gray-400 text-sm">5 hours ago • 8 replies</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Discussion Button -->
                <div class="mt-6 text-left">
                    <button class="bg-black text-white px-6 py-2 rounded-lg hover:bg-gray-800 transition">
                        Start New Discussion
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 bg-gray-100 px-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-left mb-8">Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Gallery Item -->
                <div class="relative group">
                    <img src="https://via.placeholder.com/300" alt="Mosque Interior" class="w-full h-48 object-cover rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-semibold">Mosque Interior</p>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="relative group">
                    <img src="https://via.placeholder.com/300" alt="Prayer Hall" class="w-full h-48 object-cover rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-semibold">Prayer Hall</p>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="relative group">
                    <img src="https://via.placeholder.com/300" alt="Community Event" class="w-full h-48 object-cover rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-semibold">Community Event</p>
                    </div>
                </div>
                <!-- Gallery Item -->
                <div class="relative group">
                    <img src="https://via.placeholder.com/300" alt="Islamic Classes" class="w-full h-48 object-cover rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                        <p class="text-white text-lg font-semibold">Islamic Classes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mosque Management Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Mosque Management</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10 text-center">
                <!-- Imam Abdullah -->
                <div class="flex flex-col items-center">
                    <img src="management/headImam.png" alt="Imam Abdullah" class="w-24 h-24 rounded-full mb-4 shadow-lg">
                    <h3 class="text-xl font-semibold">Imam Abdullah</h3>
                    <p class="text-gray-600">Head Imam</p>
                </div>
                <!-- Dr. Hassan -->
                <div class="flex flex-col items-center">
                    <img src="management/direcctor.png" alt="Dr. Hassan" class="w-24 h-24 rounded-full mb-4 shadow-lg">
                    <h3 class="text-xl font-semibold">Dr. Hassan</h3>
                    <p class="text-gray-600">Director</p>
                </div>
                <!-- Mr. Yusuf -->
                <div class="flex flex-col items-center">
                    <img src="management\secretary.png" alt="Mr. Yusuf" class="w-24 h-24 rounded-full mb-4 shadow-lg">
                    <h3 class="text-xl font-semibold">Mr. Yusuf</h3>
                    <p class="text-gray-600">Secretary</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-12 px-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About Us -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <p class="text-gray-400 text-sm">
                        Al-Iman Mosque serves as a center for worship, education, and community gathering.
                    </p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">Prayer Times</a></li>
                        <li><a href="#" class="hover:text-white">Events</a></li>
                        <li><a href="#" class="hover:text-white">Donate</a></li>
                        <li><a href="#" class="hover:text-white">Community</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-400 text-sm">123 Mosque Street, City, State 12345</p>
                    <p class="text-gray-400 text-sm">(555) 123-4567</p>
                    <p class="text-gray-400 text-sm">info@aliman-mosque.com</p>
                </div>
                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/alimanmosque" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://www.twitter.com/alimanmosque" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/alimanmosque" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.youtube.com/alimanmosque" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="text-center text-gray-500 text-sm mt-10">
                <div class="border-t border-gray-700 mb-4"></div>
                &copy; 2025 Al-Iman Mosque. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
