# Codigo: utf-8
# Laco de  repeticao for executado 20 vezes (0 a 19) uma contagem qualquier

for i in range(0,20): #Funcao range executa de 0 a 19, nao contemplado o 20
    print("i = "+ str(i))
print("------------------")

# Laco  de repeticao para ser executado 18 vezes;
# Porem, ao chegar na condicao i == 5 a funcao Break para o contagem;

for i in range(0, 18):
    print('Rodando '+str(i))
    if i == 5:
        print("Chegou na condicao i = " + str(i))
        break
print("Sai do for")
print("------------------")

# Laco de repeticao que executa perante a um Array/Lista;

for carros in ["Ka", "HB20", "Kwid", "Onix", "UP", "Mobi"]:
    print("Carro : "+ carros)
print("------------------")