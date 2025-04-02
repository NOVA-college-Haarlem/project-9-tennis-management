<x-base-layout>
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
        <title>Privacybeleid</title>
    </head>

    <body class="bg-gray-200 text-gray-900">
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6">Privacybeleid</h1>
            <p class="mb-4">Bij de Tennisclub hechten we veel waarde aan uw privacy en zorgen we ervoor dat uw persoonlijke gegevens op een veilige en verantwoorde manier worden behandeld. Dit privacybeleid beschrijft hoe we uw gegevens verzamelen, gebruiken en beschermen.</p>

            <!-- Hoofdstuk 1 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter1')">
                    1. Welke informatie verzamelen we?
                </button>
                <div id="chapter1" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>We verzamelen de volgende soorten informatie wanneer u lid wordt van de Tennisclub of onze diensten gebruikt:</p>
                    <ul class="list-disc pl-10">
                        <li><strong>Persoonlijke informatie:</strong> Uw naam, e-mailadres, telefoonnummer, adres en andere gegevens die u verstrekt bij registratie of lidmaatschap.</li>
                        <li><strong>Gebruiksgegevens:</strong> Informatie over hoe u onze website en diensten gebruikt, zoals bezochte pagina's en interacties.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 2 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter2')">
                    2. Hoe gebruiken we uw informatie?
                </button>
                <div id="chapter2" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Uw informatie wordt gebruikt voor de volgende doeleinden:</p>
                    <ul class="list-disc pl-10">
                        <li>Om uw lidmaatschap te beheren en onze diensten te leveren.</li>
                        <li>Om u te informeren over evenementen, toernooien en andere clubactiviteiten.</li>
                        <li>Om de veiligheid en integriteit van onze club en website te waarborgen.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 3 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter3')">
                    3. Wat kunnen andere leden zien?
                </button>
                <div id="chapter3" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Wanneer u lid bent van de Tennisclub, kunnen bepaalde gegevens zichtbaar zijn voor andere leden:</p>
                    <ul class="list-disc pl-10">
                        <li><strong>Openbare informatie:</strong> Uw naam en lidmaatschapsstatus kunnen zichtbaar zijn voor andere leden.</li>
                        <li><strong>Privé-informatie:</strong> Uw contactgegevens worden alleen gedeeld met andere leden wanneer dit nodig is voor clubactiviteiten of zoals vereist door de functionaliteit van onze diensten.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 4 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter4')">
                    4. Hoe beschermen we uw informatie?
                </button>
                <div id="chapter4" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>We implementeren industriestandaard beveiligingsmaatregelen om uw persoonlijke gegevens te beschermen tegen ongeautoriseerde toegang, openbaarmaking of misbruik. Hoewel we ons best doen om uw gegevens te beschermen, kunnen we absolute veiligheid niet garanderen.</p>
                </div>
            </div>

            <!-- Hoofdstuk 5 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter5')">
                    5. Uw rechten
                </button>
                <div id="chapter5" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>U heeft het recht om:</p>
                    <ul class="list-disc pl-10">
                        <li>Uw persoonlijke gegevens te bekijken en bij te werken via uw profielinstellingen.</li>
                        <li>Verwijdering van uw gegevens aan te vragen, tenzij deze nodig zijn voor uw lidmaatschap.</li>
                        <li>Contact met ons op te nemen met vragen of zorgen over uw privacy.</li>
                    </ul>
                </div>
            </div>

            <!-- Hoofdstuk 6 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter6')">
                    6. Wijzigingen in dit privacybeleid
                </button>
                <div id="chapter6" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>We kunnen dit privacybeleid van tijd tot tijd bijwerken. Eventuele wijzigingen worden op deze pagina geplaatst, en we raden u aan het beleid regelmatig te bekijken.</p>
                </div>
            </div>

            <!-- Hoofdstuk 7 -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-green-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-green-400"
                    onclick="toggleDropdown('chapter7')">
                    7. Contact
                </button>
                <div id="chapter7" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Als u vragen heeft over dit privacybeleid of hoe uw informatie wordt behandeld, neem dan contact met ons op via <strong>info@tennisclub.com</strong>.</p>
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