<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @auth
    <li>
        <ul> <a href="{{ route('home') }}">Inicio</a> </ul>
        <ul> <a href="{{ route('showFormPost') }}">Nuevo post</a></ul>
        <ul> <a href="{{ route('myPosts') }}">Mis posts</a> </ul>
        <ul> <a href="{{ route('ayuda') }}">ayuda</a> </ul>

    </li>
    @endauth

    @guest
    <p>Por favor, <a href="{{ route('auth.login') }}">inicia sesión</a> o <a href="{{ route('auth.registro') }}">regístrate</a>.</p>
    @endguest

    <hr>


    @yield('content')





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="js/chat.js" defer></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="js/chat.js" defer></script>
    </div>


    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;

}

header {
    background-color: #33A2FF;
    color: white;
    padding: 10px 0;
    text-align: center;

}

nav ul {
    list-style-type: none;
    padding: 20;

}

nav ul li {
    display: inline;
    margin: 20 20px;

}

nav ul li a {
    color: white;

    text-decoration: none;
}

main {
    padding: 30px;
    justify-content: center;
  align-items: center;
}

form {
    margin-bottom: 20px;

}

form input[type="text"] {
    padding: 5px;
    width: 200px;
   display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  box-sizing: border-box;


}

form button {
    padding: 5px 10px;


}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #33A2FF;
}

header {
    background-color: #5D6E7C;
    color: white;
    padding: 10px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.navbar-menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-menu li {
    margin: 0 15px;
}

.navbar-menu li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.search-form {
    display: flex;
    align-items: center;
}

.search-input {
    padding: 5px 10px;
    border: none;
    border-radius: 3px 0 0 3px;
    outline: none;
}

.search-button {
    padding: 5px 10px;
    border: none;
    background-color: #555;
    color: white;
    border-radius: 0 3px 3px 0;
    cursor: pointer;
}

.search-button:hover {
    background-color: #666;
}

main {
    padding: 20px;
}

h2 {
    color: #333;
}

section {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}


body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #0044cc; /* Cambiado a azul */
    color: white;
    padding: 10px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.navbar-menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-menu li {
    margin: 0 15px;
}

.navbar-menu li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.search-form {
    display: flex;
    align-items: center;
}

.search-input {
    padding: 5px 10px;
    border: none;
    border-radius: 3px 0 0 3px;
    outline: none;
}

.search-button {
    padding: 5px 10px;
    border: none;
    background-color: #555;
    color: white;
    border-radius: 0 3px 3px 0;
    cursor: pointer;
}

.search-button:hover {
    background-color: #666;
}

main {
    padding: 20px;
}

h2 {
    color: #333;
}

section {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

#chat-box {
    border: 1px solid #ccc;
    padding: 10px;
    height: 200px;
    overflow-y: scroll;
    margin-bottom: 10px;
}

#chat-form {
    display: flex;
}

#chat-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px 0 0 3px;
}

#chat-form button {
    padding: 10px;
    border: none;
    background-color: #0044cc;
    color: white;
    border-radius: 0 3px 3px 0;
    cursor: pointer;
}

#chat-form button:hover {
    background-color: #003399;
}

.whatsapp-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
}

.whatsapp-button:hover {
    background-color: #128C7E;
}

.sitemap {
    list-style: none;
    padding: 0;
}

.sitemap > li {
    margin-bottom: 10px;
}

.sitemap a {
    color: #0044cc;
    text-decoration: none;
}

.sitemap ul {
    list-style: none;
    padding-left: 20px;
}

.sitemap ul li {
    margin-bottom: 5px;
}

.sitemap a:hover {
    text-decoration: underline;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

header {
    background-color: #0044cc; /* Azul */
    color: white;
}

.navbar-brand {
    font-size: 1.5rem;
}

.main-content {
    padding: 2rem;
}

h2 {
    color: #333;
}

#chat-box {
    border: 1px solid #ced4da;
    background-color: #fff;
    border-radius: 0.25rem;
}

#chat-form input {
    border-radius: 0.25rem 0 0 0.25rem;
}

#chat-form button {
    border-radius: 0 0.25rem 0.25rem 0;
}

.whatsapp-button {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background-color: #25D366;
    color: white;
    border-radius: 0.25rem;
    font-weight: bold;
    text-align: center;
}

.whatsapp-button:hover {
    background-color: #128C7E;
}

.sitemap > li > a {
    font-weight: bold;
    color: #0044cc;
    text-decoration: none;
}

.sitemap ul {
    padding-left: 1.5rem;
}

.sitemap ul li a {
    color: #6c757d;
    text-decoration: none;
}

.sitemap a:hover {
    text-decoration: underline;
}
    </style>




    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ddd;
        }
    </style>



    <main>

        <script type="text/javascript">
            document.querySelector('.stick').addEventListener('click', () => {
                document.querySelector('.four').value = '';

            });
        </script>
        <section>
            <h2>Contenido Principal</h2>
            <p>Este es el contenido principal de la página.</p>
        </section>
        <section>
            <h2>Necesitas Ayuda?</h2>
            <p>Si necesitas ayuda, puedes enviarnos un mensaje a WhatsApp:</p>
            <a href="https://wa.me/8444982989?text=Hola,%20necesito%20ayuda" class="whatsapp-button">Enviar mensaje a WhatsApp</a>
        </section>
        <section>
            <h2>Mapa del Sitio</h2>
            <ul class="sitemap">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a>
                    <ul>
                        <li><a href="#">Nuestra Historia</a></li>
                        <li><a href="#">Equipo</a></li>
                    </ul>
                </li>
                <li><a href="#">Servicios</a>
                    <ul>
                        <li><a href="#">Consultoría</a></li>
                        <li><a href="#">Desarrollo Web</a></li>
                        <li><a href="#">Marketing Digital</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </section>
    </main>

</body>

</html>