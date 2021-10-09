#coding: utf-8
#Criacao de uma funcao que executa a principais operacoes matematicas e retorna o resultado
def calculadoraGeral (valor1, valor2):
    soma = valor1 + valor2
    subtracao = valor1 - valor2
    multiplicacao = valor1 * valor2
    divisao = valor1 / valor2
    exponeciacao =  valor1 ^ valor2
    return "Soma: %s | Subtracao: %s | Muntiplicacao: %s" \
        "| Divisao: %s | Exponenciacao: %s"\
        %(soma, subtracao, multiplicacao, divisao, exponeciacao)

#Impresao do resultado da chamada da funcao passando parametros

print(calculadoraGeral(10,2))
print(calculadoraGeral(10,5))
print(calculadoraGeral(20,4))