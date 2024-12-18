<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blood Bank</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <!-- Navigation Bar -->
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

    <!-- About Us Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-red-600 text-center">About Us</h1>
            <p class="mt-4 text-gray-600 text-center">
                At Blood Bank, we are committed to saving lives by providing a platform to connect blood donors with
                those in need.
                With the support of our community, we strive to ensure that no one ever has to go without life-saving
                blood when it’s needed the most.
            </p>

            <div class="mt-8 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Mission -->
                <div class="bg-gray-50 shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/100" alt="Mission Icon" class="mx-auto">
                    <h2 class="text-2xl font-semibold text-red-600 mt-4">Our Mission</h2>
                    <p class="text-gray-600 mt-2">
                        To provide an efficient, reliable, and safe blood donation system for patients and hospitals
                        across the nation.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-gray-50 shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/100" alt="Vision Icon" class="mx-auto">
                    <h2 class="text-2xl font-semibold text-red-600 mt-4">Our Vision</h2>
                    <p class="text-gray-600 mt-2">
                        To create a future where every blood request is fulfilled without delays, ensuring better health
                        and longer lives.
                    </p>
                </div>

                <!-- Values -->
                <div class="bg-gray-50 shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/100" alt="Values Icon" class="mx-auto">
                    <h2 class="text-2xl font-semibold text-red-600 mt-4">Our Values</h2>
                    <p class="text-gray-600 mt-2">
                        Compassion, safety, integrity, and innovation drive us to deliver a seamless and trustworthy
                        service to all.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Meet Our Team</h2>
            <p class="mt-4 text-gray-600 text-center">
                Dedicated professionals working tirelessly to make a difference.
            </p>

            <div class="mt-8 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Team Member 1 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">John Doe</h3>
                    <p class="text-gray-600 text-sm">Founder & CEO</p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">Jane Smith</h3>
                    <p class="text-gray-600 text-sm">Operations Manager</p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">Michael Brown</h3>
                    <p class="text-gray-600 text-sm">Technology Lead</p>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-lg font-semibold text-gray-800 mt-4">Emily Johnson</h3>
                    <p class="text-gray-600 text-sm">Public Relations</p>
                </div>
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
