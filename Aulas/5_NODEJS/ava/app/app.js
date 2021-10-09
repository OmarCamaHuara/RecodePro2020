var ava = require('./ava/config/server');

var rotaHome = require('./ava/routes/home')(ava);
var rotaHome = require('./ava/routes/front')(ava);
var rotaHome = require('./ava/routes/back')(ava);

ava.listen(3000, function(){
    console.log("Servidor rodando con Express")
})

