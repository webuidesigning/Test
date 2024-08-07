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


<div class="p-6">
    <div class="text-2xl text-center py-4">Disclaimer</div>
    <div class="">
        Elite Credit Card Rewards Points does not sell any loans on our own and do not charge any fee from any customers/viewers. We advise customers/viewers to choose from best offers from Banks and its advertisers. We do not guarantee any loans as loan sanction is as per Banks and Nbfcs. We suggest all users to never pay any upfront amount for any loan disbursal and if any person who call you as representative of Elite Credit Card Rewards Points and ask for any amount report the incident immediately via putting us a mail.
    </div>
    <br>
    <br>
    <div class="text-2xl">
        Content Disclaimer
    </div>
    <div>
        The information published at Elite Credit Card Rewards Points is collected from either Banks website or from market research. The information is given for the customers to read more about the product and make an informed decision. The information provided here is collected from sources we believe to be reliable. In order to make available various financing schemes of individual companies/organizations, certain data has been reorganized/restructured/tabulated. A certain set of assumptions have also been made to enable the comparison of schemes. Users are advised to recheck the same with the individual companies/organizations. This site does not take any responsibility for any sudden/uninformed changes in the terms and conditions or structure of any schemes including the interest rate or any other such clause.
    </div>
    <div>
        Thus, the information available on, or through this website or any ads placed on third party websites / sms/ emailers/ any format in any media is/are the information provided by the Banks/NBFCs. This information is intended to provide assistance in the field of banking/non-banking facility being provided by the Banks/NBFCs to the public. The information on financial facility/ies should not be customers/viewers only source of financial information. We strongly recommend you to contact the concerned Bank/NBFC.   
    </div>
    <br>
    <div class="">  
        
    Any information provided by Elite Credit Card Rewards Points on its calculators and website, campaign pages, advertisements, videos, voice, social media content or any message/content (hereby referred to as "marketing materials") is for indicative purposes only and will not amount to any pre-qualification or eligibility  or approval for sanction of any Service. 
    Eligibility for any sanction of any product/service on Elite Credit Card Rewards Points may require additional information and documents which cannot be gathered in this calculator/marketing material. The figures and formulae built into this calculator/marketing material may vary and are subject to changes at any time without notice.

        
    Elite Credit Card Rewards Points does not take the responsibility for the accuracy, validity, consistency of any of the details entered therein. Nothing contained herein shall confer any rights, remedies, obligations or liabilities to user nor provide any remedy, claim, liability, reimbursement, cause of action against Elite Credit Card Rewards Points The use of this information is subject to the terms and conditions governing such products, services and offers as referred herein above and specified by Elite Credit Card Rewards Points from time to time and applicable laws.   

        
    Nothing contained herein shall constitute and /or deem to constitute an offer and/or an invitation to an offer or a legally binding obligation on Elite Credit Card Rewards Points. Any person seeking access to  Elite Credit Card Rewards Points’s loan eligibility calculator and any marketing material/content shall be deemed to have accepted and acknowledged that they are doing so for information purposes only.
    </div>
    <br>
    <br>
    <div class="text-2xl">
        Product Disclaimer :
    </div>
    <div>
 Please remember that any provider of financial services is entitled to register with Wishfin.com. Wishfin.com does not examine whether the advertisers are good, reputable or quality sellers of goods / service. You must satisfy yourself about all relevant aspects of the terms of service prior to availing any product/service availed through Wishfin.com. Wishfin.com has also not negotiated or discussed any terms of engagement with any of the advertisers. This due diligence should be done by you. Purchasing of goods or availing of services from advertisers shall be at your own risk. The advertiser, before advertising with us, should also agree to terms and conditions and privacy policy for the customers and should check all terms and conditions carefully before availing any referral services.

We do not investigate, represent or endorse the accuracy, legality, legitimacy of the service providers who advertise with us. References that we make to any names, marks, products or services of third parties or hypertext links to third party sites or information do not constitute or imply our endorsement, sponsorship or recommendation of the third party, of the quality of any product or service, advice, information or other materials displayed, purchased, or obtained by you as a result of an advertisement or any other information or offer in or in connection with the Media.

<br>
<br>
THE MATERIAL AND THE MEDIA USED TO PROVIDE THE MATERIAL (INCLUDING THE WEBSITE ) ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. DISCLAIMS, TO THE FULLEST EXTENT PERMITTED UNDER LAW, ANY WARRANTIES REGARDING THE SECURITY, RELIABILITY, TIMELINESS, ACCURACY AND PERFORMANCE OF THE MEDIA AND MATERIALS. Elite Credit Card Rewards Points  DOES NOT WARRANT THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE CONTENT IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS.
<br>
<br>
Elite Credit Card Rewards Points DISCLAIMS ANY AND ALL WARRANTIES TO THE FULLEST EXTENT OF THE LAW, INCLUDING ANY WARRANTIES FOR ANY INFORMATION, GOODS, OR SERVICES, OBTAINED THROUGH, ADVERTISED OR RECEIVED THROUGH ANY LINKS PROVIDED BY OR THROUGH THE MEDIA SOME COUNTRIES OR OTHER JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES, SO THE ABOVE EXCLUSIONS MAY NOT APPLY TO YOU. YOU MAY ALSO HAVE OTHER RIGHTS THAT VARY FROM COUNTRY TO COUNTRY AND JURISDICTION TO JURISDICTION.

We do not help in providing any dsa of the Banks.
    </div>
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
