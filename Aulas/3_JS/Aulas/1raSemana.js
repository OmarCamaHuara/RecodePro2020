// Elabora um algoritmo que a partir de 3 numeros imprima as seguientes operacoes,
// com textos indicando cada operacao:
// Soma do primero e terceiro numeros
// Multiplicacao do segundo e terceiro numeros
// Subtracao do terceiro e do primeiro numero

var priNum = 5
var segNum = 10
var terNum = 15

console.log(`Primer numero: ${priNum}`)
console.log(`Segundo numero: ${segNum}`)
console.log(`Tercer numero: ${terNum}`)

console.log(`Soma do ${priNum} + ${terNum} = ${priNum+terNum}`)
console.log(`Multiplicacao do ${segNum} + ${terNum} = ${segNum+terNum}`)
console.log(`Subtracao do ${terNum} + ${priNum} = ${terNum+priNum}`)


// Creacao de uma classe

class Pessoa{

    constructor(nome){
        this.nome = nome
    }

    falar(frace){
        console.log(`${this.nome} disse: ${frace}`)
    }
}   

var p1 = new Pessoa('Omar')
var p2 = new Pessoa('Romildo')
p1.falar('Oi tude bem')
p2.falar('Nao disse nada, Fala Romildo kkkkk')

