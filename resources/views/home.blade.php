<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Karir ICBS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('sections.navbar')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.jobs')

    @include('sections.process')

    @include('sections.benefits')

    @include('sections.cta')

    @include('sections.footer')

</body>
</html>