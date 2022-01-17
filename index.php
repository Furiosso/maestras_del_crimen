<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./includes/css/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="./includes/logos/redes_sociales/favicon/favicon2.ico" type="image/x-icon" rel="shortcut icon" />
    <title>Maestras del Crimen</title>

</head>
<body>
    <header>
        <nav>
            <div class="casilla" title="Inicio"><i class="fas fa-home"></i></div>
            <div class="casilla" title="¿Quiénes somos?"><i class="fas fa-question"></i></div>
            <div id="blogger" class="casilla" title="Blog"><i class="fab fa-blogger"></i></div>
            <div class="casilla" title="Cursos"><i class="fas fa-graduation-cap"></i></div>
            <div class="casilla" title="Consultoría"><i class="far fa-comments"></i></div>
            <div class="casilla" title="Contacto"><i class="fas fa-envelope"></i></div>
        </nav>
        <div class="menu" flag="0">
            <ul>
                <li><a href="#analisis" id="anal">ANÁLISIS DE NOTICIAS</a></li>
                <li><a href="#blog" id="blogg">BLOG</a></li>
            </ul>
        </div>
        <script src="./includes/js/js.js"></script>
        <img src="./includes/logos/JPG/imagen_de_portada.jpg" alt="Maestras del Crimen Logo" class="imagen_principal">
        <article>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cupiditate ipsam eaque sit animi id, distinctio sapiente explicabo sequi natus asperiores blanditiis, ab officiis vitae odio suscipit doloremque quos eveniet.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius amet recusandae aut quisquam? Laboriosam sapiente fugit magni culpa quia cumque, blanditiis quas! Fuga placeat asperiores ducimus quae voluptates eius dolorum.
            <br><a href="#"><button>LEER MÁS</button></a>
        </article>
    </header>
    <main>
        <section id="analisis">
            <header class="zocalo">
                <h1>ANÁLISIS DE NOTICIAS</h1>
            </header>
            <div class=entradas>
                <?php
                    for($i = 0; $i < 3; $i++):
                ?>
                    <article id="analisis_<?=$i?>">
                        <div class="imagen"><img src="./includes/logos/redes_sociales/redes/Twitter/Maestras_Twitter_Perfil_Black_Icon.png"></div>
                        <div class="texto analisis">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam rem fugit ipsam laborum deserunt amet at, ullam voluptates quisquam nemo tempore sequi autem. Temporibus reprehenderit veritatis voluptas ut, unde aliquid?
                        </div>
                    </article>
                <?php endfor ?>
            </div>
        </section>        
        <section id="blog">
            <header class="zocalo">
                <h1>BLOG</h1>
            </header>
            <div class=entradas>
                <?php
                    for($i = 0; $i < 3; $i++):
                ?>
                    <article id="blog_<?=$i?>">    
                        <div class="imagen"><img src="./includes/logos/redes_sociales/redes/Twitter/Maestras_Twitter_Perfil_Colour_Icon.png"></div>                    
                        <div class="texto">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam rem fugit ipsam laborum deserunt amet at, ullam voluptates quisquam nemo tempore sequi autem. Temporibus reprehenderit veritatis voluptas ut, unde aliquid?
                        </div>
                    </article>
                <?php endfor ?>
            </div>
        </section>
    </main>
    <footer>
        (...)
    </footer>
</body>
</html>