class Pessoa{
    constructor(nome){
        this.nome = nome
    }
    mostrar(){
       console.log(`O nome e: ${this.nome}`) 
    }
}
class Leitor extends Pessoa{
    constructor(tel, ender){
        this.tel = tel
        this.ender = ender
    }
    mostrar(){
        console.log(`${this.tel} --- ${this.ender}`)
    }
}
 var p1 = new Pessoa('Felipe')
 var p2 = new Leitor('154647', 'Lapa')
 p1.mostrar()
 p2.mostrar()