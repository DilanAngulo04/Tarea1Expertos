//console.log("Funcionando")

//Variable para determinar los valores provenientes del formulario 'estilo'
var formulario = document.getElementById('estilo');

formulario.addEventListener('submit', function(e){
    //Evito que el navegador ejecute la acci[on por default
    e.preventDefault();
    
    //console.log("-----------------------------me diste un click")

    //Obtengo los valores del formulario
    var datos = new FormData(formulario)

    //Calculo los valores de EC
    var EC = (Number(datos.get('c5')) + Number(datos.get('c9')) + Number(datos.get('c13')) + Number(datos.get('c17')) + Number(datos.get('c25')) + Number(datos.get('c29')))
    //Calculo los valores de EC
    var OR = (Number(datos.get('c2')) + Number(datos.get('c10')) + Number(datos.get('c22')) + Number(datos.get('c26')) + Number(datos.get('c30')) + Number(datos.get('c34')))
    //Calculo los valores de EC
    var CA = (Number(datos.get('c7')) + Number(datos.get('c11')) + Number(datos.get('c15')) + Number(datos.get('c19')) + Number(datos.get('c31')) + Number(datos.get('c35')))
    //Calculo los valores de EC
    var EA = (Number(datos.get('c4')) + Number(datos.get('c12')) + Number(datos.get('c24')) + Number(datos.get('c28')) + Number(datos.get('c32')) + Number(datos.get('c36')))
    
    //Incluyo el resultado de la suma de el formData para leerlo en el codigo php
    datos.set('EC', EC)
    datos.set('OR', OR)
    datos.set('CA', CA)
    datos.set('EA', EA)
    

    //Defino el metodo post junto con la posible respuesta acerca del estilo de aprendizaje
    fetch('../Dominio/PHP/Ejercicio3-1.php', {
        method: 'POST',
        body: datos
    })
        .then(res => res.text())
        .then(text => {

            if(text === 'error'){
                alert("Hubo un error al calular los datos") 
            }else{
                alert("Su estilo de apredizaje es = " + text)
            }
           
        })
    
    
        
})