<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <div id="app">
        <div id="viewer"></div>
    </div>
    
    @vite('resources/js/app.js')
    <script>
        
        new PhotoSphereViewer.Viewer({
            container: document.querySelector('#viewer'),
            panorama: '/images/panorama.jpg'
        });
    </script>
</body>

</html>