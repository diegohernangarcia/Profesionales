<script>
var errorh2= $("div#content >h2#title > span").text();
var error= $("div#content h3:first");

var tiempo=5;function redireccion(){if(tiempo==0){tiempo=0;clearInterval(redir);window.location="TU-PAGINA";}$("#cronometro").html(tiempo);tiempo--;}redir=setInterval(function(){redireccion();},1000);
$("#content").html("");error.remove();
</script>

<div id="pagina-error" >
<center><img src="http://img.webme.com/pic/a/adan-2994/error.png" align="middle">La pagina que solicitas no existe <br>Pagina principal en: <b><span id="cronometro">...</span></b><br><a href="TU-PAGINA">Volver</a></center>
</div>