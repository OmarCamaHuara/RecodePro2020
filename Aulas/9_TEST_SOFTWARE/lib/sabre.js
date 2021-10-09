function corAtivada(nome){
    let cor;
    switch(nome){
        case "Yoda":
            cor = "Verde";
            break;
        case "Mace Windu":
            cor = "Roxo";
            break;
        default:
            cor = "Nome invalido";
            break;
    }
    return cor;
}
module.exports.corAtivada = corAtivada;