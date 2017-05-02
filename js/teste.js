window.onload = function(){
	var dispara = document.getElementById("btn");
		dispara.onclick = function(){
			var requestAjax = iniciaAjax();
			var nome = document.getElementById("nome").value;
			if(requestAjax){
				requestAjax.onreadystatechange = function(){
					if(requestAjax.readyState == 4){
						if(requestAjax.status == 200 || requestAjax.status == 304){
							var divisao = document.getElementById("insere");
							divisao.innerHTML = requestAjax.responseText;
						}
					}
				};
				requestAjax.open("POST", "teste.php?", true);
				requestAjax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				requestAjax.send("nome=" + nome);
			}
		};
}





function iniciaAjax(){
	var objAjax = false;
	if(window.XMLHttpRequest){
		objAjax = new XMLHttpRequest();
		//alert("Navegador Outros recente!!Ajax OK");
	}else if(window.ActiveXObject){
		objAjax = new ActiveXObject("Msxml2.XMLHTTP");

		if(!objAjax){
			objAjax = new ActiveXObject("Microsoft.XMLHTTP");
			//alert("Navegador Microsoft antigo!!Ajax OK");
		}else{
			//alert("Navegador Microsoft recente!!Ajax OK");
		}
	}else{
		alert("Navegador nao suporta AJAX!");
	}
	return objAjax;
}



