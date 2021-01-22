//Variable para determinar los valores provenientes del formulario 'redes'
var formulario_redes = document.getElementById('redes');

formulario_redes.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();

    //Obtengo los valores del formulario
    var datos_redes = new FormData(formulario_redes)

    //Defino el metodo post junto con la posible respuesta acerca de la clase de red
    fetch('../Dominio/PHP/Ejercicio3-6.php', {
        method: 'POST',
        body: datos_redes
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Su clase de red es = " + text)
            }
           
        })
})