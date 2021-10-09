module.exports = (app) => {

    app.get('./usuariocad', (req, res) => {
        res.render('paginas/usuariocad');
    });

    app.post('/usuario/salvar', (req, res) => {
        var usuario = req.body;
        var connection = app.app.config.database();
        var usuarioModel = app.app.models.usuarioModel;

        usuarioModel.setUsuario(usuario, connection, (error, results) => {

        });

        usuarioModel.getUsuarios(connection, 
            (error, results, fields) => {
                console.log(error, results)
                    res.render('paginas/usuarios', { dados: results });
            });
    });
}