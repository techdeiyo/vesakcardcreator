<!-- 
==============================================================================
                              Vesak Card Creator
  Developed and Designed by Sanjana Sandanayaka & Dilmith & Akindu Fernando
                 Website: https://vesak.sanjana.dev
         Description: Traditional Sinhala E-Vesak Card Maker
                          Language: Sinhala (සිංහල)
                                Year: 2025
==============================================================================









-->

<!-- 
© 2025 vesak.sanjana.dev — සියලු හිමිකම් ඇවිරිණි | All rights reserved.
Developed by Sanjana Shamal Sandanayaka
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=0.4, maximum-scale=1.0, user-scalable=no">
    <title>Vesak Card Creator</title>
    <meta name="description" content="කුඩා කල පාසල් මිතුරන් හා පවුලේ හිතවතුන් අතර වෙසක් කාඩ් හුවමාරුව සුලබව දක්නට ලැබුනු වෙසක් අංගයකි.
                        අතීතයේ මතක සිහි කරමින් ඔබගේම E වෙසක් කාඩ්පතක් තනා ගන්න.
                        ඔබ කැමති රූපයක් සමඟ වෙසක් පණිවිඩයක් එක් කර, හිතවතුන් සමඟ බෙදාගන්න.vesak.sanjana.dev වෙත පිවිසෙන්න.">
    <meta name="keywords" content="Vesak Card, E Vesak Card, වෙසක් පත් පත්‍ර, Sinhala Vesak Card, Vesak Greetings Online, වෙසක් සුබ පැතුම්">
    <meta name="author" content="Sanjana Shamal">

    <meta property="og:title" content="Vesak Card Creator">
    <meta property="og:description" content="කුඩා කල පාසල් මිතුරන් හා පවුලේ හිතවතුන් අතර වෙසක් කාඩ් හුවමාරුව සුලබව දක්නට ලැබුනු වෙසක් අංගයකි.
                        අතීතයේ මතක සිහි කරමින් ඔබගේම E වෙසක් කාඩ්පතක් තනා ගන්න.
                        ඔබ කැමති රූපයක් සමඟ වෙසක් පණිවිඩයක් එක් කර, හිතවතුන් සමඟ බෙදාගන්න.">
    <meta property="og:url" content="https://vesak.sanjana.dev">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://vesak.sanjana.dev/card/vesakcard1.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vesak Card Creator">
    <meta name="twitter:description" content="කුඩා කල පාසල් මිතුරන් හා පවුලේ හිතවතුන් අතර වෙසක් කාඩ් හුවමාරුව සුලබව දක්නට ලැබුනු වෙසක් අංගයකි.
                        අතීතයේ මතක සිහි කරමින් ඔබගේම E වෙසක් කාඩ්පතක් තනා ගන්න.
                        ඔබ කැමති රූපයක් සමඟ වෙසක් පණිවිඩයක් එක් කර, හිතවතුන් සමඟ බෙදාගන්න.">
    <meta name="twitter:image" content="https://vesak.sanjana.dev/card/vesakcard1.png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;700&display=swap');

        .sinhala-font {
            font-family: 'Noto Sans Sinhala', sans-serif;
        }

        /* Force desktop layout on mobile */
        body {
            min-width: 100%;
            overflow-x: auto;
        }

        /* Make container scrollable on small screens */
        .container {
            min-width: 100%;
        }
    </style>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-36WB1S5PPQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-36WB1S5PPQ');
</script>

</head>

<body class="bg-gray-100 min-h-screen sinhala-font">
    <div class="container mx-auto py-8 px-4">

        <!-- Card Editor -->
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Card Preview -->
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-center text-orange-600 mb-8">Vesak Card Creator</h1>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-4 border-2 border-orange-500" id="vesak-card" style="max-width: 600px; margin: 0 auto;">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left Side - Lantern Image -->
                        <div class="w-full md:w-1/2 bg-gradient-to-b from-orange-50 to-amber-50 flex items-center justify-center cursor-pointer" id="card-image-container" style="min-height: 400px;">
                            <div class="text-center w-full h-full">
                                <img id="selected-image" src="card/vesakcard1.png" class="w-full h-full object-cover" alt="Traditional Vesak Lantern">
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="w-full md:w-1/2 p-6 flex flex-col bg-gradient-to-b from-amber-50 to-yellow-50">
                            <!-- Stamp -->
                            <div class="self-end mb-4 cursor-pointer" id="stamp-container">
                                <img id="selected-stamp" src="stamp/stamp5.png" class="w-20 h-20 object-contain" alt="Vesak Stamp">
                            </div>

                            <!-- Poem -->
                            <div class="flex-1 flex flex-col justify-center items-center text-center p-4">
                                <p id="selected-poem" class="text-gray-800 text-sm md:text-base" style="font-size: 12px;">
                                    වෛරී සිතක ගිනි ජාලා නිවෙන්නයි <br>
                                    මෙත් සිතකින් ලෝකයදෙස බලන්නයි<br>
                                    අමා දහම් සිසිලස් බව දැනෙන්නයි<br>
                                    මේ ඇරයුම මොක් පුරයට වඩින්නයි<br>
                                </p>
                            </div>

                            <!-- Sender/Recipient (for display) -->
                            <div class="mt-auto text-left space-y-1">
                                <p id="from-name" style="font-size: 12px;" class="text-sm text-gray-700 font-medium"> .................... <span id="from-display"></span>විසින්</p>
                                <p id="to-name" style="font-size: 12px;" class="text-sm text-gray-700 font-medium"> ...................... <span id="to-display"></span>වෙත</p>

                                <!-- QR Code and Copyright -->
                                <div class="flex items-center mt-4 pt-2 border-t border-gray-200">
                                    <img src="frame.png" alt="QR Code" class="w-12 h-12 mr-2">
                                    <div class="text-xs text-gray-500">
                                        <div>create your E Vesak Card</div>
                                        <div>vesak.sanjana.dev</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center mt-6">
                    <button id="export-btn" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded-lg transition">
                        Export as Image
                    </button>
                    <button id="share-btn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition">
                        Share
                    </button>
                    <button id="reset-btn" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition">
                        Reset
                    </button>
                </div>
                <div class="mx-auto bg-white rounded-lg shadow-lg p-6 mt-4 text-center">
                    <h2 class="text-xl font-semibold text-orange-600 mb-2">වෙසක් කාඩ් නිර්මාණය කරන ආකාරය</h2>
                    <p class="text-sm text-gray-700 mb-4">කුඩා කල පාසල් මිතුරන් හා පවුලේ හිතවතුන් අතර වෙසක් කාඩ් හුවමාරුව සුලබව දක්නට ලැබුනු වෙසක් අංගයකි.
                        අතීතයේ මතක සිහි කරමින් ඔබගේම E වෙසක් කාඩ්පතක් තනා ගන්න.
                        ඔබ කැමති රූපයක් සමඟ වෙසක් පණිවිඩයක් එක් කර, හිතවතුන් සමඟ බෙදාගන්න.
                    </p>
                    <p class="mt-6 text-xs text-gray-400">&copy; 2025 vesak.sanjana.dev — Developed by Dilmith Vidarshana & Sanjana Sandanayaka & Akindu Fernando</p>
                </div>
            </div>

            <!-- Customization Panel -->
            <div class="lg:w-80 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4 text-orange-600">Customize Your Card</h2>
                <div class="space-y-4">
                    <!-- Image Selection -->
                    <div>
                        <h3 class="font-semibold mb-2">Vesak Card Image</h3>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="image-option cursor-pointer" data-image="card/vesakcard1.png">
                                <img src="card/vesakcard1.png" class="w-full h-25 object-cover border-2 border-orange-200 rounded" alt="Traditional Lantern">
                            </div>
                            <div class="image-option cursor-pointer" data-image="card/vesakcard2.png">
                                <img src="card/vesakcard2.png" class="w-full h-25 object-cover border-2 border-orange-200 rounded" alt="Colorful Lantern">
                            </div>
                            <div class="image-option cursor-pointer" data-image="card/vesakcard3.png">
                                <img src="card/vesakcard3.png" class="w-full h-25 object-cover border-2 border-orange-200 rounded" alt="Buckets Lantern">
                            </div>
                            <div class="image-option cursor-pointer" data-image="card/vesakcard4.png">
                                <img src="card/vesakcard4.png" class="w-full h-25 object-cover border-2 border-orange-200 rounded" alt="Buckets Lantern">
                            </div>
                            <div class="image-option cursor-pointer" data-image="card/vesakcard5.png">
                                <img src="card/vesakcard5.png" class="w-full h-25 object-cover border-2 border-orange-200 rounded" alt="Buckets Lantern">
                            </div>
                            <div class="image-option cursor-pointer" data-image="custom">
                                <div class="w-full h-20 bg-gray-100 rounded flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                </div>
                                <input type="file" id="custom-image-upload" class="hidden" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <!-- Stamp Selection -->
                    <div>
                        <h3 class="font-semibold mb-2">Stamp Design</h3>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="stamp-option cursor-pointer" data-stamp="stamp/stamp5.png">
                                <img src="stamp/stamp5.png" class="w-full h-20 object-contain border-2 border-orange-200 rounded" alt="Dharma Wheel">
                            </div>
                            <div class="stamp-option cursor-pointer" data-stamp="stamp/stamp4.png">
                                <img src="stamp/stamp4.png" class="w-full h-20 object-contain border-2 border-orange-200 rounded" alt="Bodhi Leaf">
                            </div>
                            <div class="stamp-option cursor-pointer" data-stamp="stamp/stamp3.png">
                                <img src="stamp/stamp3.png" class="w-full h-20 object-contain border-2 border-orange-200 rounded" alt="Lotus">
                            </div>
                            <div class="stamp-option cursor-pointer" data-stamp="stamp/stamp2.png">
                                <img src="stamp/stamp2.png" class="w-full h-20 object-contain border-2 border-orange-200 rounded" alt="Lotus">
                            </div>
                            <div class="stamp-option cursor-pointer" data-stamp="stamp/stamp1.png">
                                <img src="stamp/stamp1.png" class="w-full h-20 object-contain border-2 border-orange-200 rounded" alt="Lotus">
                            </div>
                            <div class="stamp-option cursor-pointer" data-stamp="custom">
                                <div class="w-full h-20 bg-gray-100 rounded flex items-center justify-center border-2 border-dashed border-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                </div>
                                <input type="file" id="custom-stamp-upload" class="hidden" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <!-- Poem Selection -->
                    <div>
                        <h3 class="font-semibold mb-2">Poem/Blessing</h3>
                        <select id="poem-select" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                            <option value="මෝහ තණ්හා අවිදු නසමින්\nඅරි අටඟ මඟ පුරුදු කරමින්\nබුදුන්ගේ මෙත් වඳන් අසමින්\nඑතෙර වෙමු අපි සසර ගමනින්">මෝහ තණ්හා අවිදු නසමින්</option>
                            <option value="වෙසක් සඳට පෙර මේරු\nදුක් කදුලින් සිත පෑරු\nකෙලෙස් කැලැල් මකාගන්න\nහිමි වැඩි මග යමු යාලූ">වෙසක් සඳට පෙර මේරු</option>
                            <option value="සිල් සුවද පැතිරෙන\nමේ උතුම් තෙමගුලේ\nසුවපහන් වේවා සිත් සතන්\nනොවේවා දුක් සෝතැවුල්\nඔබට සුපින්බර වෙසක් මංගල්‍යයක් ම වේවා
">සිල් සුවද පැතිරෙන</option>
                            <option value="custom">Custom Message</option>
                        </select>
                        <textarea id="custom-poem-input" maxlength="100" class="w-full mt-2 p-2 border border-gray-300 rounded hidden" rows="4" placeholder="Enter your custom message..."></textarea>
                    </div>

                    <!-- Sender/Recipient Inputs -->
                    <div>
                        <h3 class="font-semibold mb-2">Sender & Recipient</h3>
                        <div class="mb-2">
                            <label for="from-input" class="block text-sm text-gray-600 mb-1">From:</label>
                            <input type="text" id="from-input" placeholder="Sender's name" maxlength="25" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">

                        </div>
                        <div>
                            <label for="to-input" class="block text-sm text-gray-600 mb-1">To:</label>
                            <input type="text" id="to-input" placeholder="Recipient's name" maxlength="25" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const cardImageContainer = document.getElementById('card-image-container');
            const selectedImage = document.getElementById('selected-image');
            const stampContainer = document.getElementById('stamp-container');
            const selectedStamp = document.getElementById('selected-stamp');
            const poemContainer = document.getElementById('selected-poem');
            const fromInput = document.getElementById('from-input');
            const toInput = document.getElementById('to-input');
            const fromDisplay = document.getElementById('from-display');
            const toDisplay = document.getElementById('to-display');
            const exportBtn = document.getElementById('export-btn');
            const shareBtn = document.getElementById('share-btn');
            const resetBtn = document.getElementById('reset-btn');

            // Customization elements
            const poemSelect = document.getElementById('poem-select');
            const customPoemInput = document.getElementById('custom-poem-input');

            // File upload inputs
            const customImageUpload = document.getElementById('custom-image-upload');
            const customStampUpload = document.getElementById('custom-stamp-upload');

            // Image selection
            document.querySelectorAll('.image-option').forEach(option => {
                option.addEventListener('click', function() {
                    const imageUrl = this.getAttribute('data-image');

                    if (imageUrl === 'custom') {
                        customImageUpload.click();
                    } else {
                        selectedImage.src = imageUrl;
                    }
                });
            });

            // Custom image upload
            customImageUpload.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        selectedImage.src = event.target.result;
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // Stamp selection
            document.querySelectorAll('.stamp-option').forEach(option => {
                option.addEventListener('click', function() {
                    const stampUrl = this.getAttribute('data-stamp');

                    if (stampUrl === 'custom') {
                        customStampUpload.click();
                    } else {
                        selectedStamp.src = stampUrl;
                    }
                });
            });

            // Custom stamp upload
            customStampUpload.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        selectedStamp.src = event.target.result;
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // Poem selection
            poemSelect.addEventListener('change', function() {
                if (this.value === 'custom') {
                    customPoemInput.classList.remove('hidden');
                    customPoemInput.focus();
                } else {
                    customPoemInput.classList.add('hidden');
                    poemContainer.textContent = this.value.replace(/\\n/g, '\n');
                }
            });

            // Custom poem input
            customPoemInput.addEventListener('input', function() {
                poemContainer.textContent = this.value;
            });

            // From/To inputs with real-time update
            fromInput.addEventListener('input', function() {
                fromDisplay.textContent = this.value;
                document.getElementById('from-name').textContent = ` ${this.value}  විසින්`;
            });

            toInput.addEventListener('input', function() {
                toDisplay.textContent = this.value;
                document.getElementById('to-name').textContent = ` ${this.value} වෙත`;
            });

            // Export as image
            exportBtn.addEventListener('click', function() {
                html2canvas(document.getElementById('vesak-card')).then(canvas => {
                    const link = document.createElement('a');
                    link.download = 'vesak-card.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                });
            });

            // Share button with native share dialog
            shareBtn.addEventListener('click', function() {
                html2canvas(document.getElementById('vesak-card')).then(canvas => {
                    canvas.toBlob(function(blob) {
                        const file = new File([blob], 'vesak-card.png', {
                            type: 'image/png'
                        });

                        if (navigator.share) {
                            navigator.share({
                                title: 'Vesak Greeting Card',
                                text: 'සුබ වෙසක් මංගල්‍යක් වේවා! ඔබේම වෙසක් කාඩ්පතක් සාදාගන්න vesak.sanjana.dev වෙත පිවිසෙන්න.',
                                files: [file]
                            }).catch(err => {
                                console.log('Error sharing:', err);
                                fallbackShare();
                            });
                        } else {
                            fallbackShare();
                        }
                    });
                });

                function fallbackShare() {
                    alert('Sharing not supported in this browser. Please use the Export button and share manually.');
                }
            });

            // Reset button
            resetBtn.addEventListener('click', function() {
                // Reset all fields
                selectedImage.src = 'card/vesakcard1.png';
                selectedStamp.src = 'https://i.imgur.com/5X8wz9P.png';
                poemContainer.textContent = 'වෛරී සිතක ගිනි ජාලා නිවෙන්නයි\nමෙත් සිතකින් ලෝකය දෙස බලන්නයි\nඅමා දහම් සිසිලස් බව දැනෙන්නයි\nමේ ඇරයුම මොක් පුරයට වඩින්නයි';
                fromInput.value = '';
                toInput.value = '';
                fromDisplay.textContent = '';
                toDisplay.textContent = '';
                document.getElementById('from-name').textContent = ' .................... විසින්';
                document.getElementById('to-name').textContent = ' ...................... වෙත';
                poemSelect.selectedIndex = 0;
                customPoemInput.value = '';
                customPoemInput.classList.add('hidden');

                // Reload the page to clear any URL parameters
                window.location.href = 'index.php';
            });

            // Check URL for shared card data
            function loadFromUrl() {
                const params = new URLSearchParams(window.location.search);

                if (params.has('image')) {
                    selectedImage.src = params.get('image');
                }

                if (params.has('stamp')) {
                    selectedStamp.src = params.get('stamp');
                }

                if (params.has('poem')) {
                    poemContainer.textContent = params.get('poem').replace(/\\n/g, '\n');
                    // Find matching poem in select or show custom
                    let found = false;
                    for (let i = 0; i < poemSelect.options.length; i++) {
                        if (poemSelect.options[i].value.replace(/\\n/g, '\n') === poemContainer.textContent) {
                            poemSelect.selectedIndex = i;
                            found = true;
                            break;
                        }
                    }
                    if (!found) {
                        poemSelect.value = 'custom';
                        customPoemInput.classList.remove('hidden');
                        customPoemInput.value = poemContainer.textContent;
                    }
                }

                if (params.has('from')) {
                    fromInput.value = params.get('from');
                    fromDisplay.textContent = params.get('from');
                    document.getElementById('from-name').textContent = ` ${params.get('from')} විසින්`;
                }

                if (params.has('to')) {
                    toInput.value = params.get('to');
                    toDisplay.textContent = params.get('to');
                    document.getElementById('to-name').textContent = ` ${params.get('to')} වෙත`;
                }
            }

            // Initialize by loading from URL if available
            loadFromUrl();
        });
    </script>
</body>

</html>