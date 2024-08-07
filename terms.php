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


<div class="p-6 flex flex-col gap-4">
    <div class=" text-2xl text-center">
        Terms and Conditions
    </div>
    <p>
        Elite Credit Card Rewards Points. Is a website (the "Site") operated by Mywish Marketplaces Pvt. Ltd ("Elite Credit Card Rewards Points"). Elite Credit Card Rewards Points provides its services to you subject to the following conditions. Before you may use the Site, you must read and accept all of the terms and conditions in, and linked to, this Terms of Use and the linked Privacy Policy. We strongly recommend that, as you read this ToU, you also access and read the linked information, since it is incorporated into and hereby made part of this ToU. This ToU is effective upon acceptance. Use of any functionality of the Site constitutes acceptance of this ToU. If this ToU conflicts with any other documents, the ToU will control for the purposes of usage of the Site. If you do not agree to be bound by this ToU and the Privacy Policy, you may not use the Site in any way. Be sure to return to this page periodically to review the most current version of the ToU. We reserve the right at any time, at our sole discretion, to change or otherwise modify the TOS without prior notice, and your continued access or use of this Site signifies your acceptance of the updated or modified TOS.
    </p>
    <div class="text-2xl text-center">
        Description of Services
    </div>
    <p>
        In the Site, Elite Credit Card Rewards Points provides users with access to information primarily about Financial and Utility Services including but not restricted to, Loans, Credit Cards, investments ,Communication Services (the "Service"). You are responsible for obtaining access to the Site, and that access may involve third-party fees (such as Internet service provider or airtime charges). In addition, you must provide and are responsible for all equipment necessary to access the Site. By making use of this site, and furnishing your personal / contact details, you hereby agree that you are interested in availing and purchasing the services that you have selected. You hereby agree that Elite Credit Card Rewards Points may contact you either electronically or through phone, to understand your interest in the selected products and services and to fulfill your demand. You also agree that Elite Credit Card Rewards Points reserves the right to make your details available to partners and you may be contacted by the partners for information and for sales through email, telephone, WhatsApp and/or sms. You agree to receive promotional materials and/or special offers from Elite Credit Card Rewards Points through email, WhatsApp or sms.
    </p>
    <div class="text-2xl text-center">
        License and Site Access
    </div>
    <p>
Elite Credit Card Rewards Points grants you a limited license to access and make personal use of the Site and the Service. This license does not include any downloading or copying of any kind of information for the benefit of another individual, vendor or any other third party; caching, unauthorized hypertext links to the Site and the framing of any Content available through the Site uploading, posting, or transmitting any content that you do not have a right to make available (such as the intellectual property of another party); uploading, posting, or transmitting any material that contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer software or hardware or telecommunications equipment; any action that imposes or may impose (in Elite Credit Card Rewards Points's sole discretion) an unreasonable or disproportionately large load on Elite Credit Card Rewards Points's infrastructure; or any use of data mining, robots, or similar data gathering and extraction tools. You may not bypass any measures used by Elite Credit Card Rewards Points to prevent or restrict access to the Site. Any unauthorized use by you shall terminate the permission or license granted to you by Elite Credit Card Rewards Points. By using the Site you agree not to: (i) use this Site or its contents for any commercial purpose; (ii) make any speculative, false, or fraudulent transaction or any transaction in anticipation of demand; (iii) access, monitor or copy any content or information of this Site using any robot, spider, scraper or other automated means or any manual process for any purpose without our express written permission; (iv) violate the restrictions in any robot exclusion headers on this Site or bypass or circumvent other measures employed to prevent or limit access to this Site; (v) take any action that imposes, or may impose, in our discretion, an unreasonable or disproportionately large load on our infrastructure; (vi) deep-link to any portion of this Site (including, without limitation, the purchase path for any service) for any purpose without our express written permission; or (vii) "frame", "mirror" or otherwise incorporate any part of this Site into any other website without our prior written authorization.
    </p>
    <div class="text-2xl text-center">
        Eligibility
    </div>
    <p>
        The Service is not available to minors under the age of 18 or to any users suspended or removed from the system by Elite Credit Card Rewards Points for any reason
    </p>
    <div class="text-2xl text-center">
       Your Account
    </div>
    <p>
        In consideration of your use of the Site, you represent that you are of legal age to form a binding contract and are not a person barred from receiving services under the laws of India or other applicable jurisdiction and will only use the Site to make legitimate purchases for you or for another person for whom you are legally authorized to act (and will inform such other persons about the ToU and/or Privacy Policy) that apply to the purchase you have made on their behalf (including all rules and restrictions applicable thereto). You also agree to provide true, accurate, current and complete information about yourself as prompted by the Site. If you provide any information that is untrue, inaccurate, not current or incomplete (or becomes untrue, inaccurate, not current or incomplete), or Elite Credit Card Rewards Points has reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, Elite Credit Card Rewards Points has the right to refuse any and all current or future use of the Site (or any portion thereof). Notwithstanding the above, we retain the right at our sole discretion to deny access to anyone to the Site and the Services we offer, at any time and for any reason, including, but not limited to, for violation of the ToU or Privacy Policy.
    </p>
    <div class="text-2xl text-center">
        Submitted Content
    </div>
    <p>
        Elite Credit Card Rewards Points does not claim ownership of any materials you make available through the Site. At Elite Credit Card Rewards Points’s sole discretion, such materials may be included in the Service in whole or in part or in a modified form. With respect to such materials you submit or make available for inclusion on the Site, you grant Elite Credit Card Rewards Points a perpetual, irrevocable, non-terminable, worldwide, royalty-free and non-exclusive license to use, copy, distribute, publicly display, modify, create derivative works, and sublicense such materials or any part of such materials (as well as use the name that you submit in connection with such submitted content). You hereby represent, warrant and covenant that any materials you provide do not include anything (including, but not limited to, text, images, music or video) to which you do not have the full right to grant the license specified in this Section 4. We take no responsibility and assume no liability for any submitted content posted or submitted by you. We have no obligation to post your comments; we reserve the right in our absolute discretion to determine which comments are published on the Site. If you do not agree to these terms and conditions, please do not provide us with any submitted content. You agree that you are fully responsible for the content you submit. You are prohibited from posting or transmitting to or from this Site: (i) any unlawful, threatening, libelous, defamatory, obscene, pornographic, or other material or content that would violate rights of publicity and/or privacy or that would violate any law; (ii) any commercial material or content (including, but not limited to, solicitation of funds, advertising, or marketing of any good or services); and (iii) any material or content that infringes, misappropriates or violates any copyright, trademark, patent right or other proprietary right of any third party. You shall be solely liable for any damages resulting from any violation of the foregoing restrictions, or any other harm resulting from your posting of content to this Site.
    </p>
    <div class="text-2xl text-center">
        License Disclaimer
    </div>
    <p>
        Nothing on any Elite Credit Card Rewards Points’s website shall be construed as conferring any license under any of Elite Credit Card Rewards Points’s or any third party's intellectual property rights, whether by estoppel, implication, or otherwise

    </p>










</div>



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
