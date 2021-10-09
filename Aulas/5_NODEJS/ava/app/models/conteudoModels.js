module.exports = () => {

    this.getConteudo = (connection, callback) => {
        connection.query("SELECT * FROM conteudos", callback);
    }
    this.getConteudoFront = (connection, callback) => {
        connection.query("SELECT * FROM conteudos WHERE categoria = 'frontend'", callback);
    }
    this.getConteudoBack = (connection, callback) => {
        connection.query("SELECT * FROM conteudos WHERE categoria = 'backend'", callback);
    }
    this.salvarConteudoFront = (conteudo, connection, callback) => {
        connection.query("INSERT INTO conteudos set ?", conteudo);
    }
    return this;
}