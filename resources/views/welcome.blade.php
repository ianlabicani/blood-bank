<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-red-600 text-2xl font-bold">Blood Bank</a>
            <div class="flex items-center space-x-4">
                <a href="/" class="text-gray-600 hover:text-red-600 font-semibold">Home</a>
                <a href="{{ route('about-us') }}" class="text-gray-600 hover:text-red-600 font-semibold">About Us</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="text-gray-600 hover:text-red-600 font-semibold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-red-600 font-semibold">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-gray-600 hover:text-red-600 font-semibold">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

    </nav>

    <!-- Hero Section -->
    <header class="bg-red-600 text-white">
        <div class="container mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl font-bold md:text-5xl">Donate Blood, Save Lives</h1>
            <p class="mt-4 text-lg">Join our mission to provide life-saving blood to those in need.</p>
            <div class="mt-6">
                <a href="#donate"
                    class="bg-white text-red-600 px-6 py-3 rounded-md font-semibold shadow hover:bg-gray-100">Donate
                    Now</a>
                <a href="#learn-more" class="ml-4 text-white underline">Learn More</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Why Donate Blood?</h2>
            <p class="mt-4 text-gray-600">Every two seconds, someone needs blood. Your donation can save up to three
                lives.</p>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://via.placeholder.com/100" alt="Lives Saved" class="mx-auto">
                    <h3 class="mt-4 text-lg font-semibold text-red-600">Save Lives</h3>
                    <p class="mt-2 text-sm text-gray-600">Your blood donation can make the difference between life and
                        death.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://via.placeholder.com/100" alt="Community Impact" class="mx-auto">
                    <h3 class="mt-4 text-lg font-semibold text-red-600">Support Community</h3>
                    <p class="mt-2 text-sm text-gray-600">Ensure a stable blood supply for local hospitals and clinics.
                    </p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img src="https://via.placeholder.com/100" alt="Health Benefits" class="mx-auto">
                    <h3 class="mt-4 text-lg font-semibold text-red-600">Health Benefits</h3>
                    <p class="mt-2 text-sm text-gray-600">Donating blood can improve your cardiovascular health and
                        well-being.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="donate" class="bg-red-600 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold">Ready to Make a Difference?</h2>
            <p class="mt-4 text-lg">Join our community of life-saving donors. Your small act of kindness can change the
                world.</p>
            <div class="mt-6">
                <a href="#"
                    class="bg-white text-red-600 px-6 py-3 rounded-md font-semibold shadow hover:bg-gray-100">Become a
                    Donor</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Blood Bank. All Rights Reserved.</p>
            <p>Follow us on <a href="#" class="text-red-500 underline">Facebook</a> | <a href="#"
                    class="text-red-500 underline">Instagram</a></p>
        </div>
    </footer>

</body>

</html>
