
function ordemDecrescente(botao,primeiroElemento){

	if(document.getElementsByClassName("nomes")[0].innerHTML == primeiroElemento){

		document.getElementById("detalhes").innerHTML= "";

		var vet = document.getElementById("nomes-clientes").innerHTML.toString();	

		var str = vet.substring(61,vet.length-5).split(",");

		console.log(str);

		var j = str.length-2;

		var txt = new Array(j+1);

		for(i=0;i<str.length-1;i++){

			txt[i] = document.getElementsByClassName("mostra-detalhes")[i].value;
		}

		for(i=0;i<str.length-1;i++){

			document.getElementsByClassName("nomes")[i].innerHTML = str[j];
			//document.getElementsByClassName("mostra-detalhes")[i].disabled = true; // desabilita o botão mas é uma opção feia
			
			document.getElementsByClassName("mostra-detalhes")[i].value = txt[j];

			j--;
		}

	}

	return false;
}

function ordemCrescente(botao,ultimoElemento){

	if(document.getElementsByClassName("nomes")[0].innerHTML != ultimoElemento){

		document.getElementById("detalhes").innerHTML= "";

		var vet = document.getElementById("nomes-clientes").innerHTML.toString();		
		var str = vet.substring(61,vet.length-5).split(",");
		var j = str.length-2;

		var txt = new Array(j+1);

		for(i=0;i<str.length-1;i++){

			txt[i] = document.getElementsByClassName("mostra-detalhes")[i].value;

			console.log(txt[i]);
		}

		console.log(str);

		for(i=0;i<str.length-1;i++){

			document.getElementsByClassName("nomes")[i].innerHTML = str[i];
			//document.getElementsByClassName("mostra-detalhes")[i].disabled = true; // desabilita o botão mas é uma opção feia
			document.getElementsByClassName("mostra-detalhes")[i].value = txt[j];
			j--;
		}
	}

	return false;
}