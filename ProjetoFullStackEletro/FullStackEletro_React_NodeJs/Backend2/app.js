import express from 'express';
import cors from 'cors';
import mysql from 'mysql';

const server = express();

server.use(express.json());
server.use(cors());

const conn = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'fullsckteletro'
})

server.get("/produtos", (req, res) => {
    conn.query("SELECT * FROM produtos", (error, result) => {
        if(error){
            res.send(error)
        }else{
            res.send(result)
        }
    })
})

server.get("/comentarios", (req, res) => {
    conn.query("SELECT * FROM comentarios", (error, result) => {
        if(error){
            res.send(error)
        }else{
            res.send(result)
        }
    })
})

server.get("/comComentarios", (req, res) => {

    const { nome } = req.body;
    const { msg } = req.body;
    
    conn.query(`INSERT INTO comentarios(nome, msg) VALUES ('${nome}', '${msg}')`, (error, result) => {
        if(error){
            res.send("Error ao inserir")
        }else{
            res.status(201).json({
                message: "Comentario feito"
            })
        }
    }) 
})

server.listen(5000)