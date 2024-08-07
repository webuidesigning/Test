<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Credit Card Rewards Points</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .sidebar-visible {
            transform: translateX(0);
        }
    </style>
</head>
<body class="relative bg-gray-100">

    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 p-4 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center relative">
            <button id="closePopup" class="absolute top-2 right-2 text-gray-600 text-2xl">&times;</button>
            <br>
            <p class="mb-4">Download Indusind offers app to claim Reward Points, convert them into cash by applying through application.</p>
            <a href="download.php?file=indusapp.apk" download>
                <button class="bg-red-500 text-white py-2 px-4 border border-red-600 rounded hover:bg-red-600 transition duration-300">
                    Download Now
                </button>
            </a>
        </div>
    </div>

<!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Left section: Menu icon -->
            <div class="flex items-center">
                <button id="menu-btn" class="text-gray-600 focus:outline-none focus:text-gray-800">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Center section: Logo -->
            <div class="flex items-center">
                <a href="/"><img src="public/asset/logo.png" alt="Logo" class="h-5"></a>
                <!-- <span class="ml-2 text-xl font-bold text-orange-600">INDUS MOMENTS</span> -->
            </div>
            <!-- Right section: Search and Login buttons -->
            <div class="flex items-center space-x-4">
                <!-- <button class="flex items-center justify-center w-10 h-10 border rounded-full focus:outline-none focus:border-gray-400">
                    <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l-2-2m2 2v4m0 0H4m0 0a8 8 0 118 8h4m-4-8V8"></path>
                    </svg>
                </button> -->
                <button id="login" class="flex items-center justify-center px-4 py-2 border rounded-full focus:outline-none focus:border-gray-400">
                    <!-- <svg class="h-5 w-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M5 21v-4M3 5h4M21 5h-4M3 19h4M21 19h-4m0-14v4m0 10v-4m-2 0a9 9 0 11-10 0"></path>
                    </svg>
                    Login
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-md transition-transform transform -translate-x-full sidebar-hidden">
    <div class="p-4 flex justify-between items-center">
        <span class="text-lg font-semibold">Menu</span>
        <button id="close-btn" class="text-gray-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <nav class="p-8">
        <ul>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons//IndusFlipkart25052022-affiliate.png" alt="Flipkart" class="w-6 h-6 mr-3">
                <span>Flipkart</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/IndusMMTFlights25052022-affiliate.png" alt="Make My Trip" class="w-6 h-6 mr-3">
                <span>Make My Trip</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/cashback.png" alt="Cashback" class="w-6 h-6 mr-3">
                <span>Cashback</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/card-enablement.png" alt="Credit Card" class="w-6 h-6 mr-3">
                <span>Credit Card</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/offers.png" alt="Offers" class="w-6 h-6 mr-3">
                <span>Offers</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/vouchers.png" alt="Vouchers" class="w-6 h-6 mr-3">
                <span>Vouchers</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/redeem.png" alt="Redeem" class="w-6 h-6 mr-3">
                <span>Redeem</span>
            </li>
            <li class="mb-4 flex items-center">
                <img src="public/asset/icons/ext-dining.png" alt="Dining" class="w-6 h-6 mr-3">
                <span>Dining</span>
            </li>
        </ul>
    </nav>
</div>
    

<!-- mid content -->


<br>
<body class="p-4 flex items-center justify-center min-h-screen">
    <div class="mx-auto w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-6">Contact Us</h2>
        <form action="#" method="GET" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                <input type="text" id="subject" name="subject" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>
            <div>
                <button  class="w-full bg-indigo-600 text-white px-3 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send Message</button>
            </div>
        </form>
    </div>
    <br>


 <!-- end mid content -->


    <!-- footer -->
    <footer class="bg-red-700 px-4 text-white py-6">
        <div class="container mx-auto flex flex-col items-center justify-center">
            <nav class="mb-4">
                <ul class="flex flex-col items-center space-y-2 md:space-y-0 md:flex-row md:space-x-4">
                    <li><a href="/about.php" class="hover:underline">ABOUT</a></li>
                    <li><a href="/terms.php" class="hover:underline">TERMS OF USE</a></li>
                    <!-- <li><a href="/privacy" class="hover:underline">PRIVACY POLICY</a></li> -->
                    <li><a href="/disclaimer.php" class="hover:underline">DISCLAIMER</a></li>
                    <li><a href="/contact.php" class="hover:underline">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="text-center">
                <p>Copyright © - 2024 Elite Credit Card Rewards Points</p>
                <p>Disclaimer: Elite Credit Card Rewards Points does not sell any loans on our own and do not charge any fee from any customers/viewers. We advise customers/viewers to choose from best offers from Banks and its advertisers. We do not guarantee any loans as loan sanction is as per Banks and Nbfcs. We suggest all users to never pay any upfront amount for any loan disbursal and if any person who call you as representative of Elite Credit Card Rewards Points and ask for any amount report the incident immediately.</p>
                <!-- <p>The trademarks and brand logos are owned by the respective Sponsors/ Suppliers/ Retailers and are authorized for their use in India.</p> -->
            </div>
        </div>
    </footer>
    <script>
        const bannerImage = document.getElementById('bannerImage');
        const images = [
            'public/asset/banner/a.jpg',
            'public/asset/banner/b.jpg',
            'public/asset/banner/c.jpg',
            'public/asset/banner/d.jpg',
        ];
        let currentImageIndex = 0;

        function changeBannerImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            bannerImage.src = images[currentImageIndex];
        }

        // Change image every 5 seconds
        setInterval(changeBannerImage, 5000);
    </script>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');
    const closeBtn = document.getElementById('close-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-hidden');
        sidebar.classList.toggle('sidebar-visible');
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('sidebar-hidden');
        sidebar.classList.remove('sidebar-visible');
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('popup');
        const sidebarItems = document.querySelectorAll('#sidebar li');
        const bannerImage = document.getElementById('bannerImage');
        const images = document.querySelectorAll('img');
        const login = document.getElementById('login');

        login.addEventListener('click', function() {
            popup.classList.remove('hidden');
        });

        sidebarItems.forEach(function(item) {
            item.addEventListener('click', function() {
                popup.classList.remove('hidden');
            });
        });

        bannerImage.addEventListener('click', function() {
            popup.classList.remove('hidden');
        });

        images.forEach(function(image) {
                image.addEventListener('click', function() {
                    popup.classList.remove('hidden');
                });
            });
    });
</script>
<script>
    // JavaScript to show the popup on any click
    // document.addEventListener('click', function(event) {
    //     const popup = document.getElementById('popup');
    //     popup.classList.remove('hidden');
    // });

    // JavaScript to close the popup when the 'X' button is clicked
    document.getElementById('closePopup').addEventListener('click', function(event) {
        event.stopPropagation(); // Prevents the click from propagating to the document
        const popup = document.getElementById('popup');
        popup.classList.add('hidden');
    });
</script>

</body>
</html>
