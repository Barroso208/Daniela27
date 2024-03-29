<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1mes.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&family=Noto+Sans&family=Oswald&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>6ºmes juntos</title>
</head>
<body>
    <div class="password">
        <form class="form" method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="fname">Contraseña:</label>
            <input type="password" id="fname" name="fname"><br><br>
            <input type="button" class="enviar" value="Validar" onclick="musica()">
        </form>
    </div>
    <nav>
        <a href="#daniela" class="nav-link">D</a>
        <a href="#juntos" class="nav-link">+</a>
        <a href="#barroso" class="nav-link">A</a>
    </nav>
    <div class="hueco">hola</div>
    <div class="portada1">
        <div class="volumen">SUBE EL VOLUMEENN!!!   ❤️ 😉❤️ </div>
        <div onclick="musica()" class="pulsa">PULSA AQUÍ PARA QUE COMIENZE LA MÚSICA <br> (puede tardar un poco)</div>
        <div>
            <h1 class="titulo-portada">Te amo <br>Daniela</h1>
            <img class="icono-corazon" src="corazon.png" alt="corazón">
        </div>
        <audio id="audio" src="cancion.mp3"  loop></audio>
        <a href="#juntos" class="enlace-directo">ENLACE DIRECTO A FOTOS <br> 👫🏼</a>
    </div>
    <div class="daniela" id="daniela">
        <div class="perfil">
            <img src="daniela.jpg" alt="" class="foto-perfil">
            <h3 class="titulo-perfil"> Daniela Lungu</h3>
        </div>
        <div class="biografia">
<h2 class="titulo-biografia">Biografia de Daniela:</h2>
            <h3 class="bio-links"> <strong>Gustos:</strong>  baile, su hermana, la familia , los estudios.</h3>
            <h3 class="bio-links"> <strong>Personalidad:</strong>  fuerte, trabajadora, humilde, perfeccionista, seria y graciosa </h3>
            <h3 class="bio-links"> <strong>Pasiones:</strong>  el baile y la medicina</h3>
            <h3 class="bio-links"> <strong>Puntos fuertes:</strong>  se esfuerza mucho y consigue lo que quiere.</h3>
            <h3 class="bio-links"> <strong>Puntos débiles:</strong> se cree que es fea y se queja mucho.</h3>
        </div>
    </div>
    <div class="barroso" id="barroso">
        <div class="perfil">
            <img src="yo.jpg" alt="" class="foto-perfil">
            <h3 class="titulo-perfil"> Alejandro Barroso</h3>
        </div>
        <div class="biografia">
            <h2 class="titulo-biografia">Biografia de Alejandro:</h2>
            <h3 class="bio-links"> <strong>Gustos:</strong>  informatica, viajar, padel, familia.</h3>
            <h3 class="bio-links"> <strong>Personalidad:</strong>  tímido, empático, amable, majo, simpatico, cariñoso, humilde y conformista.</h3>
            <h3 class="bio-links"> <strong>Pasiones:</strong>  la informática y cambiar el mundo.</h3>
            <h3 class="bio-links"> <strong>Puntos fuertes:</strong>  Vive la vida, hace lo que quiere y consigue lo que quiere.</h3>
            <h3 class="bio-links"> <strong>Puntos débiles:</strong> hace daño a los demás, no expresa lo que siente y es tonto.</h3>
        </div>
    </div>
    <div class="galeria" id="juntos">
        <h2 class="juntos">Los dos juntos<br>(lo mejor)</h2>
        <img src="IMG-20200329-WA0013.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Lo mejor que tengo♥️</h3>
        <img src="IMG-20200427-WA0047.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Mi mejor amiga y mi novia🤤🤤❤️</h3>
        <img src="IMG-20200427-WA0051.jpg" alt="" class="fotos amorfa">
        <h3 class="titulo-fotos">Los mejores momentos de mi vida: contigo.😍😍</h3>
        <img src="IMG-20200427-WA0058.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Lo único que deseo es que cada mañana bajes del cielo y me despiertes con un beso.😘🥰 </h3>
        <img src="IMG-20200427-WA0064.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Lo más bonito es que no eres consciente de lo bella que eres y esa inocencia es lo que más me enamora de ti.😍❤️ </h3>
        <img src="IMG-20200604-WA0010.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">No me importa que pasen las horas, los días y los años; lo único que deseo es que todo ese tiempo que pase sea a tu lado, princesa.👸❤️</h3>
        <img src="IMG-20200711-WA0023.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">El destino de nuestros labios es encontrarse, ¿para qué alargarlo más?🤷🏼‍♂️😘 </h3>
        <img src="IMG-20200712-WA0029.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Dueñas son las flores de las praderas, las nubes del cielo, pero tú, cariño mío, eres dueña de mis sentimientos.😍 </h3>
        <img src="IMG-20200713-WA0036.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Tu mirada delata nuestra bonita historia de amor, tus besos apasionados revelan nuestro romance desenfrenado.🤤🤤😍😍 </h3>
        <img src="IMG-20200825-WA0007.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">Quiero que la distancia entre nosotros sea tan corta que nos obligue a besarnos.💋❤️ </h3>
        <img src="IMG-20200825-WA0017.jpg" alt="" class="fotos">
        <h3 class="titulo-fotos">SOMOS LA PAREJA PERFECTA🤷🏼❤️🤷🏼‍♂️</h3>
        <video class="fotos" id="video" controls autoplay loop> 
            <source src="VID-20200825-WA0019.mp4" type="video/mp4">
        </video>
        <h3 class="titulo-fotos">ERES LO MEJOR😍 <br> MIL GRACIAS❤️ </h3>
    </div>
    <div class="contnue">
        <h2 class="continue-text">Aquí van nuestras proximas fotos</h2>
    </div>
    <script src="js.js"></script>
</body>
</html>
