var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
	var peticion = new XMLHttpRequest();
	// peticion.open('GET', 'https://api.npoint.io/8e4aa45001f6d850981a');
	peticion.open('GET', 'php/leer-datos.php');

	loader.classList.add('active');

	peticion.onload = function(){
		// console.log(JSON.parse(peticion.responseText)[0].nombre);
		var datos = JSON.parse(peticion.responseText);

		for(var i = 0; i < datos.length; i++){
			var elemento = document.createElement('tr');
			elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			document.getElementById('tabla').appendChild(elemento);
		}
	}

	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');
		}
	}

	peticion.send();
});