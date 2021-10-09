const conn = require('../config/connection');

class Postagem {
    constructor(){
        this.id;
        this.titulo;
        this.descricao;
    }

    getAll(req, res) {
        conn.query("SELECT * FROM postagens", (error, result) => {
            if(error){
                res.send(error)
            }else{
                res.json(result)
            }
        });
    }

    registrarPostagem(req, res){
        conn.query(
            `INSERT INTO postagens (titulo, descricao) VALUES ('${this.titulo}','${this.descricao}')`,
            (error, result) => {
                if(error){
                    res.send(error)
                }else {
                    res.status(201).send("Postagem cadastrado")
                }
            }

        )
    }
}

module.exports = new Postagem;