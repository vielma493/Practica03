<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    @include("plantilla2")

</head>
<body>
      
       <div id="dynamic-content">

    </div>
</body>

<footer style="text-align: center; background-color: #f8f9fa; padding: 20px;">
    <p class="text-center">
           {{ Auth::user()->name }} <br>
           {{ Auth::user()->email }}</p>
</footer>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.dropdown-item', function (e) {
        e.preventDefault(); 
        
        var url = $(this).data('url'); 
        
        $.ajax({
            url: url,
            method: 'GET',
            success: function (data) {
                // Inserta el contenido cargado dentro del div #dynamic-content
                $('#dynamic-content').html(data);
            },
            error: function () {
                alert('Ocurrió un error al cargar el contenido.');
            }
        });
    });
</script>
