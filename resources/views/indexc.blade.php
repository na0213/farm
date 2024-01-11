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
    @vite(['resources/css/index.css'])
</head>

<body>
    
    <div class="main-container">
        <div class="image-container"></div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.js" integrity="sha512-wi1en5HQFr/+nc03XLj7iJohyUcclImFC3U5uOjYE+CM6FTla7scwzbuy56+Z5sIZ3sZy1KuNdjLIid4vhJMzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    {{-- @vite('resources/js/three.js') --}}
    @vite('resources/js/panolens.js')
    @vite('resources/js/main.js')


</body>

</html>