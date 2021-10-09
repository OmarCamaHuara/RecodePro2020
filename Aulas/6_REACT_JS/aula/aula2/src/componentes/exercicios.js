const array = [1, 2, 3];

//toda una function(value){ return value} pasa a ser escrita de la siguiente form value=>value*2 cuando solo se tiene valores unitarios

const arrayModified = array.map(value=>value*3); 

console.log(arrayModified);


class Tabulada{
    constructor(numero, valores){
        this.numero = numero;
        this.valores = valores;
    }

    get tabela(){
        return this.valores.map(valor=>{
            return {
                numero : this.numero,
                valor : valor,
                resultado : this.numero * valor
            }
        });
    }
}
let x = new Tabulada(4, [2,3,4])
console.table(x.tabela)