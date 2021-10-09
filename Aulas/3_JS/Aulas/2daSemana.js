/*var altura = 10;

if(altura < 5){
    console.log('Baixo')
}else if (altura > 8 ){
    console.log('Alto')
}else{
    console.log('Medio')
}


// abstracao do carro
// ejercicio

class Carro{

    constructor(marca){
        this.marca = marca
    }

    ligar(sw){
        console.log(`${this.marca} esta : ${sw}`)
    }
}   

var car = new Carro('Toyota')
car.ligar(1)

// Emcapsulamento 
// Herenca
// Polimorfismo

class Pessoa{
    constructor(nome){
        this.nome = nome
    }

    falar(frace){
        console.log(`${this.nome} disse: ${frace}`)
    }
}

class Aluno extends Pessoa{
    estudar(disciclina){
        console.log(`${this.nome} estuda: ${disciclina}`)
    }
}

class Professor extends Pessoa{
    ensinar(disciplina){
        console.log(`${this.nome} ensina: ${disciplina}`)
    }
    falar(frace){
        console.log(`${this.nome} FALA ALTO: ${frace}`)
    }
    falar(frace, quantidade){
        console.log(`${this.nome} fala ${quantidade} vezes mais alto: ${frace}`)
    }
}

var p1 = new Aluno('Omar')
var pro1 = new Professor('Eduardo')
p1.falar('Oi tudo bem')
p1.falar('Como vai??')
p1.estudar('Biologia')
pro1.ensinar('Matematica')
pro1.falar('Gafanhoto')
pro1.falar('Bolivia',3)
*/

class Pessoa {
    constructor(nome,idade,altura){
    this.nome = nome
    this.idade = idade
    this.altura = altura
    
    }
    
    
    mostrar(){
    console.log('Meu nome é :'+ this.nome)
    console.log('minha idade é :'+ this.idade)
    console.log('minha altura é :'+ this.altura)
    }
    }
    var p1 = new Pessoa('FELIPEE',20,1.73) 
    p1.mostrar()