//Variable para determinar los valores provenientes del formulario 'genero'
var formulario_get_genero = document.getElementById('genero');

formulario_get_genero.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();

    //Obtengo los valores del formulario
    var datos_get_genero = new FormData(formulario_get_genero)

    //Defino el metodo post junto con la posible respuesta acerca del genero
    fetch('../Dominio/PHP/Ejercicio3-3.php', {
        method: 'POST',
        body: datos_get_genero
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Su genero es = " + text)
            }
           
        })
    
})