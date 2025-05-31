<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="MI Islamiyah Banjarpoh - Lembaga Pendidikan Islam" />
    <title>{{ isset($title) ? $title . ' - MI Islamiyah Banjarpoh' : 'MI Islamiyah Banjarpoh' }}</title>
    <link rel="icon" href="{{ asset('storage/'.$school->favicon) }}" type="image/x-icon">
    <!-- Preload important resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" as="style">

    <!-- Tailwind CSS via CDN (better to install locally) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" defer></script>

    <!-- AOS Animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        :root {
            --primary-color: #1d4ed8;
            /* blue-700 */
        }

        body {
            font-family: "Inter", sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .hero-bg {
            background-image: url("https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>

    {{ $styles ?? '' }}
</head>

<body class="flex min-h-screen flex-col bg-white text-gray-800">
    <x-partials.navbar />

    {{ $slot }}

    <x-partials.footer />

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>

    <script defer>
        // Initialize AOS after page load
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                easing: 'ease-in-out',
            });

            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');

            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Scroll Effect - Navbar berubah warna saat discroll
            window.addEventListener("scroll", () => {
                const navbar = document.getElementById("navbar");
                if (window.scrollY > 50) {
                    navbar.classList.remove("bg-transparent");
                    navbar.classList.add("bg-blue-700", "shadow-lg");
                } else {
                    navbar.classList.remove("bg-blue-700", "shadow-lg");
                    navbar.classList.add("bg-transparent");
                }
            });
        });

        // Load external scripts after page is interactive
        if (window.requestIdleCallback) {
            window.requestIdleCallback(loadNonCriticalResources);
        } else {
            window.addEventListener('load', loadNonCriticalResources);
        }
    </script>

    {{ $scripts ?? '' }}
</body>

</html>
