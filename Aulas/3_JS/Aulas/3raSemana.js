/*let idade = 15
let genero = 'f'
let bairro = 'Liberdade'

if((idade <=18 && genero == 'f') || bairro == 'Liberdade'){
    console.log('Aluno apto ao estudo')
}else{
    console.log('Aluno nao apto para ao estudo')
}


let dia = 4
switch (dia) {
    case 1:
        console.log('Segunda')
        break;
    case 2:
        console.log('Terca')
        break;
    case 3:
        console.log('Cuarta')
        break;
    case 4:
         console.log('Quinta')
        break;
    case 5:
        console.log('Sexta')
        break;
    case 6:
        console.log('Domingo')
        break;
    default:
        console.log('No es un dia Valido')
        break;
}

var mes = 8 
switch (mes) {
    case 1:
        console.log('Enero')
        break;
    case 2:
        console.log('Febrero')
        break
    case 3: 
        console.log('Marzo')
        break
    case 4: 
        console.log('Abril')
        brea    
    case 5: 
        console.log('Mayo')
        break
    case 6: 
        console.log('Junio')
        break

    case 7: 
        console.log('Julio')
        break

    case 8: 
        console.log('Agosto')
        break
    case 9: 
        console.log('Septiembre')
        break
    case 10: 
        console.log('Octubre')
        break
    case 11: 
        console.log('Noviembre')
        break
    case 12: 
        console.log('Diciembre')
        break
    default:
        console.log('Mes no valido')
        break;
}


 console.log( "Digite una Operacion")
 console.log('Suma = +')
 console.log('Subtracao = -')
 console.log('Multiplicacao = *')
 console.log('Divicao = /')

 var operador = prompt('Digite um Operador Aritmetico')
var nro1
var nro2

function leendo(a, b) {
    a = +prompt('Digite un numero')
    b = +prompt('Digite otro numero')
    document.write(a)
    document.write(b)
}

 switch (operador) {
     case "+":
        nro1 = +prompt('Digite un numero')
        nro2 = +prompt('Digite otro numero')
        document.write(`${nro1} + ${nro2} = ${nro1+nro2}`)
        break;
    case "-":
        nro1 = +prompt('Digite un numero')
        nro2 = +prompt('Digite otro numero')
        document.write(`${nro1} - ${nro2} = ${nro1-nro2}`)
        break;
    case "*":
        nro1 = +prompt('Digite un numero')
        nro2 = +prompt('Digite otro numero')
        document.write(`${nro1} / ${nro2} = ${nro1*nro2}`)
        break;
    case "/":
        nro1 = +prompt('Digite un numero')
        nro2 = +prompt('Digite otro numero')
        document.write(`${nro1} * ${nro2} = ${nro1/nro2}`)
        break;
    default:
        document.write('No es un operador valido')
 }
*/

var num1 = 3
var num2 = 6
for(var i = num1; i <= num2; i++){
    console.log('++++++++++++++++++++++++')
    console.log('+++++ Tabela de: '+i+' +++++')
    console.log('++++++++++++++++++++++++')
    for(var j = 1; j <= 10; j++){
        console.log(j+' * '+i+' = '+j*i)
    }
}
