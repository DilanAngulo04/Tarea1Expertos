//Variable para determinar los valores provenientes del formulario 'recinto'
var formulario_getRecinto = document.getElementById('recinto');

formulario_getRecinto.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();

    //Obtengo los valores del formulario
    var datos_getRecinto = new FormData(formulario_getRecinto)


    //Defino el metodo post junto con la posible respuesta acerca del recinto de origen
    fetch('../Dominio/PHP/Ejercicio3-2.php', {
        method: 'POST',
        body: datos_getRecinto
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Su recinto de origen es = " + text)
            }
           
        })
    
    
        
})