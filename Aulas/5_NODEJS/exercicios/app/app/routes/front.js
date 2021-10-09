var db =require('../config/database');
module.exports = function(app){
    var connection = db();
        any
    app.get('./frontend', function(req, res){
        var query = connection.query("select * from conteudos",
        function(error, results, fields){
            console.log(error, results)
            res.render('paginas/frontend',{dados:results});
        });
        query.on('error', function(error){
            console.log("[mysql error:]", error)
        });
    });
}