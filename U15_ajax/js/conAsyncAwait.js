var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click',async function(){
    loader.classList.add('active');
	try {
        const response = await fetch('php/leer-datos.php');
        // const response = await fetch('php/usuarios.php');
        // const response = await fetch('https://api.npoint.io/8e4aa45001f6d850981a');

        if (!response.ok) {
            throw new Error(`Error al cargar usuarios: ${response.statusText}`);
        }

        const datos = await response.json();

        datos.forEach(persona => {
            var elemento = document.createElement('tr');
            elemento.innerHTML += `<td>${persona.id}</td>`;
            elemento.innerHTML += `<td>${persona.nombre}</td>`;
            elemento.innerHTML += `<td>${persona.edad}</td>`;
            elemento.innerHTML += `<td>${persona.pais}</td>`;
            elemento.innerHTML += `<td>${persona.correo}</td>`;
            document.getElementById('tabla').appendChild(elemento);
        });
		
    } catch (error) {
        console.error("Hubo un error al obtener los datos:", error);
    } finally {
        loader.classList.remove('active');
    }
});

