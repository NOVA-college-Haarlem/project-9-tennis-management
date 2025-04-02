<x-base-layout>
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Over Ons</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>

    <body class="bg-gray-200 text-gray-900">
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6">Over Ons</h1>

            <!-- Hoofdstuk 1 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter1')">
                    1. Welkom bij Tennisclub
                </button>
                <div id="chapter1" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Welkom bij <strong>Tennisclub</strong>, de plek waar sport, plezier en gemeenschap samenkomen. Ons doel is om een inspirerende omgeving te bieden voor zowel recreatieve als competitieve tennissers.</p>
                </div>
            </div>

            <!-- Hoofdstuk 2 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter2')">
                    2. Onze Missie
                </button>
                <div id="chapter2" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Bij Tennisclub streven we ernaar om een inclusieve en gastvrije omgeving te creëren waar iedereen, ongeacht leeftijd of vaardigheidsniveau, kan genieten van tennis. We geloven in het bevorderen van gezondheid, sportiviteit en vriendschap.</p>
                </div>
            </div>

            <!-- Hoofdstuk 3 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter3')">
                    3. Wat Wij Bieden
                </button>
                <div id="chapter3" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Bij Tennisclub bieden we een breed scala aan faciliteiten en activiteiten, waaronder:</p>
                    <ul class="list-disc pl-10">
                        <li>Professioneel onderhouden tennisbanen.</li>
                        <li>Trainingen en lessen voor alle niveaus.</li>
                        <li>Competities en toernooien voor leden.</li>
                        <li>Gezellige evenementen en sociale activiteiten.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 4 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter4')">
                    4. Waarom Tennisclub?
                </button>
                <div id="chapter4" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Bij Tennisclub draait alles om onze leden. Hier zijn enkele redenen waarom je voor ons zou kiezen:</p>
                    <ul class="list-disc pl-10">
                        <li><strong>Uitstekende faciliteiten:</strong> Onze banen en clubhuis zijn van topkwaliteit.</li>
                        <li><strong>Gemeenschap:</strong> Een warme en ondersteunende sfeer voor iedereen.</li>
                        <li><strong>Professionele begeleiding:</strong> Onze trainers helpen je om je spel te verbeteren.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 5 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter5')">
                    5. Ons Team
                </button>
                <div id="chapter5" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Ons team bestaat uit gepassioneerde trainers, vrijwilligers en medewerkers die zich inzetten om jouw ervaring bij Tennisclub onvergetelijk te maken. We staan altijd klaar om je te helpen.</p>
                </div>
            </div>

            <!-- Hoofdstuk 6 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter6')">
                    6. Contact
                </button>
                <div id="chapter6" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Heb je vragen of wil je meer informatie? Neem contact met ons op via <strong>info@tennisclub.com</strong>. We horen graag van je!</p>
                </div>
            </div>

            <!-- Hoofdstuk 7 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter7')">
                    7. Bedankt!
                </button>
                <div id="chapter7" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Bedankt dat je voor Tennisclub kiest. Samen maken we tennis leuk en toegankelijk voor iedereen!</p>
                </div>
            </div>
        </div>

        <script>
            function toggleDropdown(id) {
                const element = document.getElementById(id);
                element.classList.toggle('hidden');
            }
        </script>
    </body>

    </html>
</x-base-layout>