<x-base-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homepagina</title>
        <style>
            .hero {
                position: relative;
                text-align: center;
                color: white;
            }

            .hero-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .hero-text h1 {
                font-size: 4rem; /* Twice as large */
                font-weight: bold;
            }

            .hero-text p {
                font-size: 1.5rem; /* Larger paragraph text */
                margin-top: 3rem; /* Increased spacing */
            }
        </style>
    </head>
    <body>
        <div class="hero">
            <img src="/images/Court.jpg" alt="Court Image" class="w-full h-auto object-cover" />
            <div class="hero-text">
                <h1>Welcome to the Tennis Club</h1>
                <p>Join us for a great time on the court!</p>
            </div>
        </div>
    </body>
    </html>
</x-base-layout>