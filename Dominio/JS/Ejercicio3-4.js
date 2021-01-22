//Variable para determinar los valores provenientes del formulario 'estilo_simple'
var formulario_get_estilo_simple = document.getElementById('estilo_simple');

formulario_get_estilo_simple.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();

    //Obtengo los valores del formulario
    var datos_get_estilo_simple = new FormData(formulario_get_estilo_simple)

    //Defino el metodo post junto con la posible respuesta acerca del genero
    fetch('../Dominio/PHP/Ejercicio3-4.php', {
        method: 'POST',
        body: datos_get_estilo_simple
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Su estilo de aprendizaje es = " + text)
            }
           
        })
})