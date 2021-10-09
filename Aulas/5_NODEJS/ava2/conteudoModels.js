module.exports = function(){

    this.getUsuarios = function (connection, callback){
        connection.query("SELECT * FROM usuario", callback);
    }

    this.getUsuarioId = function (id,connection, callback){
        connection.query("SELECT * FROM usuario WHERE id = "+id, callback);
    }

    this.getUsuarioEmail = function (email,connection, callback){
        connection.query("SELECT * FROM usuario WHERE id = "+email,callback);
    }

    this.setUsuario = function(usuario, connection, callback){
        connection.query('INSERT INTO usuario set ?', usuario);
    }

    return this;
}
