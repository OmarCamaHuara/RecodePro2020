module.exports = (app) => {
    
    app.get('/usuarios', (req, res) => {
        var connetion = app.app.config.database();

        var query = app.app.models.usuarioModel;
        query.getUsuarios(connection, 
            (error, results, fields) => {
                console.log(error, results)
                res.render('paginas/usuarios', { dados : results });
            });
    });

    app.post('/usuario/buscar/email', (req, res) => {
        var usuario = req.body;
        var connection = app.app.config.database();
        var usuarioModel = app.app.models.usuarioModel;

        usuarioModel.getUsuarioEmail(usuario, connection, (error, results) => {
            console.log(error, results, usuario)
            res.render('paginas/usuarios', { dados:results });
        });
    });

    app.post('/usuario/buscar/id', (req, res) => {
        var usuario = req.body;
        var connection = app.app.config.database();
        var usuarioModel = app.app.models.usuarioModel;

        usuarioModel.getUsuarioId(usuario, connection, (error, results) => {
            console.log(error, results)
            res.render('paginas/usuarios', { dados: results });
        });
    });
}