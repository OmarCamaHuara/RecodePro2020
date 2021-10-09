# Formato de declaracao de uma Tupla
carros = ("KA", "HB20", "Kwid", "Onix", "UP", "Mobi")
# EStrutura de tratamento de execao 
# (se o que esta dentro de Try trouxe algum erro e retornado o Exception)

try:
    carros[0] = "Fiesta"
except:
    print("Nao e possivel efectuar alteracoes em tuplas")

# Imressao de Tuplas para verificar se houve alteracao

for carro in carros:
    print(carro.capitalize())