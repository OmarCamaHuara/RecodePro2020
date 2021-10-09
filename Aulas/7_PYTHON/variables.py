#Vemos abaixo 3 tipos de listas: Numéricas, Letras, Mistas

numeros = [1, 2, 3]
letras = ["A", "B", "C"]
LetrasNumeros = [1, "A", 2, "B"]

#Impressao de quantos dados possuem no array - len()
print("Tamanho de lista: ", len(numeros))

#imprimindo as listas

for i in range(len(numeros)):
    print(numeros[i])
print("------------")
for i in range(len(letras)):
    print(letras[i])
print("------------")
for i in range(len(LetrasNumeros)):
    print(LetrasNumeros[i])
print("------------")

# Agora vamos trocar o valor 2 (que esta na posicao 2) po "B"
LetrasNumeros[2] = "B"

# Vamos imprimir a nova lista para entender como ficou:
for i in range(len(LetrasNumeros)):
    print(LetrasNumeros[i])
print("------------")

# Vamos inserir um item no final de nossa lista
LetrasNumeros.append("C")

#
# Vamos exluir o item "B" de nossa lista
LetrasNumeros.remove("B")

# Vamos imprimir a nova lista para entender como ficou:
for i in range(len(LetrasNumeros)):
    print(LetrasNumeros[i])
print("------------")