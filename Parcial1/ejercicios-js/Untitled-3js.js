// JavaScript Document

alert("Hola mundo");
for(indice in array) 
{

}

var dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
for(i in dias) 
{
	alert(dias[i]);
}

window.onload = init;
    function init(){
        document.querySelectorAll(".more")[0].addEventListener("click",submenu);
        document.querySelector(".submenu > ul").style.display = "none"; 
    }
    
    function submenu(){
        var estado = document.querySelector(".submenu > ul").style.display;
        if (estado == "none"){
            document.querySelector(".submenu > ul").style.display = "block";
        }else{
            document.querySelector(".submenu > ul").style.display = "none";            
        };
        
    }