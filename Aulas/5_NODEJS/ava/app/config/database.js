var mysql = require('mysql');

var connMySQL = () => {

    return mysql.createConnection({
        host : 'localhost',
        user : 'root',
        password :'',
        database :'projeto_node'
    });
}

module.exports = function(){
    return connMySQL;
}