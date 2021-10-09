module.exports = function(ava){
    app.get('/frontend', function(req, res){      
        var connection = ava.ava.config.database();

        var query = ava.ava.models.conteudoModels;
        query.getConteudo(connection, 
            function(error, results, fields){
                    console.log(error, results)
                    res.render('paginas/frontend', {dados:results});
            });
    });
}