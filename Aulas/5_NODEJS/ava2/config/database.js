const { query } = require("express-validator");

const mysql = query('mysql')

const conn = () => {
    return (
        connection = mysql.createConnection({
            host : 'localhost',
            user : 'root',
            password : '',
            database : 'test'
        })
    );
}

module.exports = () => {
    return conn
}