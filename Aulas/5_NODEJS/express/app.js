const express = require('express')

const bodyParser = require('body-parser')

const mysql = require('mysql')

const app = express();
const port = process.env.PORT || 5000;

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

//MySQL
const pool = mysql.createPool({
    connectionLimit : 10,
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'fullsckteletro'
})

// get all produtos
app.get('', (req, res) => {
    pool.getConnection((err, connection) => {
        if(err) throw err 
            console.log(`Connected as id ${connection.threadId}`)

        connection.query('SELECT * FROM produtos', (err, rows) => {
            connection.release() // return the connection to pool

            if(!err){
                res.send(rows)
            }else{
                console.log(err)
            }
        })
    })
})

// get a comentariso por id

app.get('/:id', (req, res) => {

    pool.getConnection((err, connection) => {
        if(err) throw err 
            console.log(`Connected as id ${connection.threadId}`)

        connection.query('SELECT * FROM produtos WHERE idproduct = ?',[req.params.id], (err, rows) => {
            connection.release() // return the connection to pool

            if(!err){
                res.send(rows)
            }else{
                console.log(err)
            }
        })
    })
})


// get a comentariso por id

app.delete('/:id', (req, res) => {

    pool.getConnection((err, connection) => {
        if(err) throw err 
            console.log(`Connected as id ${connection.threadId}`)

        connection.query('DELETE FROM produtos WHERE idproduct = ?',[req.params.id], (err, rows) => {
            connection.release() // return the connection to pool

            if(!err){
                res.send(`Comentrario con el ID: ${req.params.id}`)
            }else{
                console.log(err)
            }
        })
    })
})

// Listen on enviroment port or 5000
app.listen(port, () => console.log(`Listen on port ${port}`))
