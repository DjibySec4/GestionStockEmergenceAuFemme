// Infos à faire passer dans la top bar
var infoSlide = document.getElementById("souhaits");
var index = 0;
var values = ["<b>Portez vos masques</b>", " <b>Protégez vous</b>", "<b>Et diminuez la contagion</b>", "<b>#Covid19 #prévention<b/> "];

function next()
{
   index++;
   infoSlide.style.opacity = 0;
   if(index > (values.length - 1) )
   {
      index = 0;
   }
   setTimeout(slide, 1000)
}

function slide()
{
   infoSlide.innerHTML = values[index];
   infoSlide.style.opacity = 1;
   setTimeout(next, 1000)
}
slide();