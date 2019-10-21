// JavaScript Document

function diasFunc() 
{
  	var num;
	var x = document.getElementById("mes").value;
  	var dias =[31,29,31,30,31,30,31,31,30,31,30,31];
	var opDias;
	 opDias="<select id='dias' onchange='imagen()'>";
		
		for(num=1;num<=dias[x];num++)
		{
			opDias+="<option value="+num+">"+num+"</option>";
		}
		opDias+="</select>";
		
		document.getElementById("demo").innerHTML=opDias;
  		document.getElementById("myImg").src="imagenessemana/" + dias[x];
  
}
