
var app = require('./app/config/server');

var rotaHome = require('./app/routes/home');
var rotaFront = require('./app/routes/front');
var rotaBack = require('./app/routes/back');

app.listen(3000, function(){
    console.log("Seu servidor node esta rodando!!!")
});
