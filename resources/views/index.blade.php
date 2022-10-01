<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext"
        rel="stylesheet">

    <title>VLagria</title>

    @include('CssAndScripts.css')

</head>

<body>

    <header class="top-area">
        @include('portfolio.header')
    </header>

    <section id="welcome-hero" class="welcome-hero">
        @include('portfolio.welcome')
    </section>

    <section id="about" class="about">
        @include('portfolio.about')
    </section>

    <section id="skills" class="skills">
        @include('portfolio.skill')
    </section>

    <section id="experience" class="experience">
        @include('portfolio.experience')
    </section>

    <section id="profiles" class="profiles">
        @include('portfolio.profile')
    </section>

    <section id="portfolio" class="portfolio">
        @include('portfolio.portfolio')
    </section>

    {{-- <section id="clients" class="clients">
        @include('portfolio.clients')
    </section> --}}

    <section id="contact" class="contact">
        @include('portfolio.contact')
    </section>

    <footer id="footer-copyright" class="footer-copyright">
        @include('portfolio.footer')
    </footer>

    @include('CssAndScripts.scipt')
</body>

</html>
