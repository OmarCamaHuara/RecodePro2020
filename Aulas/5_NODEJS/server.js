var http = require('http');
var server = http.createServer(function(req, res){
    res.end("<html><body>Hello Omar !!!</body></html>");
});
server.listen(3001);
console.log("Servidor Ativo!");