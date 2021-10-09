// importante para mas adelate 
// Desestructuracao 

const pessoa = {
    nome: "Omar",
    idade: 19,
    sexo: "Masculino"
}

const {nome} = pessoa;
console.log(nome);

const frutas = [
    "Banana",
    "Maca",
    "Morango",
    "Uva"
]

const [banana, maca, morango, uva] = frutas;

console.log(uva);

// estructura de reoeticao map()
// metodo de arrays

// 1er parametro: Function de callback
// 2do parametro: Retorno
frutas.map(function(elemento){
    console.log(elemento);
});
