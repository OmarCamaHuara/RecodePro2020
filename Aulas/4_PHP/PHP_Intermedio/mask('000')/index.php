<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    
    <title>Como formatar campos d Formulário/ Mascara - jQuery</title>
</head>
<body>
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">CPF</label>
                <input class="form-control" type="text" minlength="14" maxlength="14" onkeypress="$(this).mask('000.000.000-00');">
            </div>
            <div class="form-group col-md-4">
                <label for="">CNPJ</label>
                <input class="form-control" type="text" minlength="18" maxlength="18" onkeypress="$(this).mask('00.000.000/0000-00');">
            </div>
            <div class="form-group col-md-4">
                <label for="">CEP</label>
                <input class="form-control" type="text" minlength="10" maxlength="10" onkeypress="$(this).mask('00.000-000');">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Altura / Peso</label>
                <input class="form-control" type="text" minlength="3" maxlength="3" onkeypress="$(this).mask('0,00');">
            </div>
            <div class="form-group col-md-4">
                <label for="">Moeda / Dinheiro</label>
                <input class="form-control" type="text" minlength="10" maxlength="10" onkeypress="$(this).mask('R$ 999.990,00');">
            </div>
            <div class="form-group col-md-4">
                <label for="">Telefone</label>
                <input class="form-control" type="text" minlength="14" maxlength="14" onkeypress="$(this).mask('(00) 0000-00009');">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Data</label>
                <input class="form-control" type="text" minlength="10" maxlength="10" onkeypress="$(this).mask('00/00/0000');">
            </div>
            <div class="form-group col-md-6">
                <label for="">Hora</label>
                <input class="form-control" type="text" minlength="5" maxlength="5" onkeypress="$(this).mask('00:00');">
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>