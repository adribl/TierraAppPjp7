<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroJS Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/solucion.js"></script>
  <!--  <script>
        function calcula_densidad(){
        var masa= 5.97E24;
        var radio= 6378e3;
        var volumen= (4/3)*Math.PI*radio*radio*radio;
        var densidad= masa/volumen;
        var d=document.getElementById("resultadoA");
        d.innerHTML=densidad+' kg/(metro cubico)';
        }
    </script>
    <script>
        function calcula_ace(){
        var masa= 5.97E24;
        var gravedad=9.8;
        var radio= 405777100;
        var ace= (masa*gravedad)/radio;

        var ace=document.getElementById("resultadoA");
        d.innerHTML=d+' kg/(metro cubico)';
        }
    </script>-->
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroJS</a></h1>
      <nav>
      <ul>
        <li><a href="index.html" class="current">Inicio</a></li>
        <li><a href=basicoJS.html>Básica</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">

<section  class="problema">
  <h2>Problema:SUPONIENDO QUE LA TIERRA Y MARTE SE MOVIERAN ¿cuáto tiempo tardaría en llegar una señal que vieja a la velocidad de la luz?</h2>
  <p>Descripción:</p>
  <p>
¿cuáto tiempo tardaría en llegar una señal que vieja a la velocidad de la luz?<br>

<!--b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
c) Si el radio de la Tierra y su masa se redujera a una
tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>-->
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    t=d/c<br>

</section>


<section class="datos">
<h2>Datos:</h2>
   dtm= distancia tierra marte= 227.9 millones km. <br>
   c= velocidad de la luz= 300000 km/s<br>
  
</section>


<section class="calculos">
<h2>Solución</h2><!--b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
c) Si el radio de la Tierra y su masa se redujera a una
tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>-->
   <p>a)el tiempo que tarda en llegar la señal es de:<br>
t= d/c<br>
<p>donde:</p>
     d= 227900000 km<br>
     c= 300000Km/s.<br>
     </p>
    <button onclick="calcula_t();">Presiona para calcular</button>
</section>


<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div></section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
<script>
     function calcula_densidad(){
     var T=88;
     //var radio= 6378e3;
     //var volumen= (4/3)*Math.PI*radio*radio*radio;
     //var densidad= masa/volumen;
     var W=(2*Math.PI)/T;
     var d=document.getElementById("resultadoA");
     d.innerHTML=W+' rad/seg';
     }
 </script>
