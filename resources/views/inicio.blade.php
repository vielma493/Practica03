@if (Route::has('login'))
<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        @include("menu2")
    @else
        @include("menu1")
        @endif
        @endauth

<body>
    <div class="header">
    <h1>Sistema de gestion de horarios ITPN</h1>


    
</div>
    <img src="/logotec.png" alt="Fondo" class="background" style="width: 100px; height: auto;">

</body>
</nav>

<h1 class="bnv">Bienvenido, selecciona una opcion</h1>

<footer style="background-color: #f8f9fa; padding: 20px; text-align: left;">
    <a href="https://developer.mozilla.org/es/docs/Web/HTML" target="_blank">HTML</a> 
    <a href="https://www.php.net/manual/es/intro-whatis.php" target="_blank">PHP</a> 
    <a href="https://laravel.com/" target="_blank">Laravel</a> 
    <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blank">JavaScript</a> 
    <a href="https://developer.mozilla.org/es/docs/Web/CSS" target="_blank">CSS</a>
</footer>


<style>
   /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    
}

.header {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, #1c30df, #6593f8);
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    letter-spacing: 1.5px;
    border-radius: 10px;

    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

h1 {
    margin: 0;
    padding: 10px 0;
    
}

/* Navbar */
nav {
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 15px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);

    
}

nav a {
    text-decoration: none;
    font-size: 1rem;
    color: #555;
    padding: 8px 12px;
    border-radius: 4px;
    transition: all 0.3s ease;
    
}

nav a:hover {
    background-color: #4781ff;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    nav {
        flex-wrap: wrap;
        justify-content: center;
      

    }

    .header {
        font-size: 1.2rem;
    }
}

footer{
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;

}
.bnv{
    text-align: center;
}
</style>
        