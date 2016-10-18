var x;
x=$(document);
x.ready(inicializar);

function inicializar()
{

  x=$(".titulo-blog");
  x.click(titulo);

  x=$(".tit1");
  x.click(titulo1);

  x=$(".sub");
  x.click(subtitulo);

  x=$("#ocultar");
  x.click(ocultame);

  x=$("#mostrar");
  x.click(muestrame);

}
    function titulo()
{
var x;
x=$(".titulo-blog");
x.css("background", "green" );
x.css("font-family", "Comic Sans Ms");
x.css("color", "white");
x.css("font-size","5em");
}
function titulo1()
{
var x;
x=$(".tit1");
x.css("background", "yellow" );
x.css("font-family", "Comic Sans Ms");
x.css("color", "white");
x.css("font-size","3.5em");
}
function subtitulo()
{
var x;
x=$(".sub");
x.css("background", "pink" );
x.css("font-family", "Comic Sans Ms");
x.css("color", "white");
x.css("font-size","1.5em");
}

function ocultame()
{
var x;
x=$(".img-thumbnail");
x.css("background", "blue" );
x.toggle("slow");
}
function muestrame()
{
var x;
x=$(".img-thumbnail");
x.css("background", "blue" );
x.toggle("slow");
}
