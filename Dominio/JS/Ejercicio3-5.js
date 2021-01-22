//Variable para determinar los valores provenientes del formulario 'tipo_profesor'
var formulario_tipo_profesor = document.getElementById('tipo_profesor');

formulario_tipo_profesor.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();

    //Obtengo los valores del formulario
    var datos_tipo_profesor = new FormData(formulario_tipo_profesor)

    //Defino el metodo post junto con la posible respuesta acerca del tipo de profesor
    fetch('../Dominio/PHP/Ejercicio3-5.php', {
        method: 'POST',
        body: datos_tipo_profesor
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Tipo de profesor = " + text)
            }
           
        })
})