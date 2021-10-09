# Codigo: utf-8
# Uso do IF como condicional simple

dedos - int(input("Voce tem quatos anos?? "))
if dedos == 18:
    print("Voce tem 18 anos")
elif dedos > 18:
    print("Voce tem mais de 18 anos")
else:
    print("Vocee menos de idade") 

# IF sendo utilizado com Switch Case
var1 = int(input("Digite um numero para var1"))
var2 = int(input("Digite um numero para var2"))

if var1 == 1:
    print("Numero var1 igual a 1")
elif var1 == 2 or var2 == 3:
    print("Var1 diferente de 1 ou var2 diferente de 2")
elif var1 >= 1000 or var2 <= -1000:
    print("Var1 maior que 1000 ou var2 nenor que -1000")
else: ("Nenhuma das alterativas anteriores")