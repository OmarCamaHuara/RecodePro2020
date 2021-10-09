function exibirCategoria(categoria){
    let elementos = document.getElementsByClassName('box_produto')
    console.log(elementos)
    for(var i = 0; i<=elementos.length; i++){
        console.log(elementos[i].id)
        if(categoria == elementos[i].id){
            elementos[i].style = 'display:block'
        }else{
            elementos[i].style = 'display:none'
        }
    }
}
function exibirTodo(){
    let elementos = document.getElementsByClassName('box_produto')
    for(var i = 0; i<=elementos.length; i++){
        elementos[i].style = 'display:block'
    }   
}
let destaque = (imagen) => {
    console.log(imagen)
    if(imagen.width == 240)
        imagen.width = 128
    else
        imagen.width = 240
}

