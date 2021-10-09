module.exports = () => {

    this.getUsuario = (connection, callback) => {
        connection.query("SELECT * FROM usuario", callback);
    }
    this.getUsuarioId = (id, connection, callback) => {
        connection.query("SELECT * FROM usuario WHERE id = "+ id, callback);
    }
    this.getUsuarioEmail = (email, connection, callback) => {
        connection.query("SELECT * FROM usuario WHERE id = "+ email, callback);
    }
    this.setUsuario = (usuario, connection, callback) => {
        connection.query("INSERT INTO usuario set ?", usuario);
    }
    return this;
}