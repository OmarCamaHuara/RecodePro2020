const mysql = require('mysql')

const Conn = () => {
    console.log ('Connection DB');
    return(
        connection = mysql.createConnection({
            host : 'localhost',
            user : 'root',
            password : '',
            database : 'fullsckteletro'
        })
    );
}

module.exports = () => {
    return Conn
}