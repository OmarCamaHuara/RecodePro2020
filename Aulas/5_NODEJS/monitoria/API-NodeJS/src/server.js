import express from 'express'
import cors from 'cors'
import mysql from 'mysql'

const server = express();

server.use(express.json());
server.use(cors());

const conn = mysql.createConnection({
    host : "localhost",
    user :  "root",
    password : "",
    database : "recodepro"
})


server.get("/usuarios", (req, res) => {

    conn.query("SELECT * FROM usuarios", (error, result) => {
        if(error){
            res.send(error)
        }else{
            res.send(result)
        }
    });

});

server.post("/usuarios", (req, res) => {
    const { name } = req.body;
    
    conn.query(`INSERT INTO usuarios (name) VALUES ('${name}')`, (error, result) => {
        if(error){
            res.send("Erro ao inserir usuario")
        }else{
            res.status(201).json({
                message: "Usuario cadastrado com sucesso"
            })
        }
    })
})

server.listen(3333)