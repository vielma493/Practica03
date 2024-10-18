<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer {
            background-color: black;
            position: absolute;
            bottom: 0;
        }

        .text-center {
            text-align: center;
        }
    </style>
    @vite(["resources/sass/app.scss","resources/js/app.js"])
    
            @include("plantilla")
</head>
<body>
    
   <h1>Bienvenido</h1>

</body>
<footer style="text-align: center; background-color: #f8f9fa; padding: 20px;">
    <a href="https://developer.mozilla.org/es/docs/Web/HTML" target="_blank">HTML</a> 
    <a href="https://www.php.net/manual/es/intro-whatis.php" target="_blank">PHP</a> 
    <a href="https://laravel.com/" target="_blank">Laravel</a> 
    <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blank">Java Script</a> 
    <a href="https://developer.mozilla.org/es/docs/Web/CSS" target="_blank">CSS</a>
</footer>
</html>

