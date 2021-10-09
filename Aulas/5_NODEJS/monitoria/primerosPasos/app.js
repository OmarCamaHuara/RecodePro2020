import express from 'express';
import cors from 'cors'
const server = express();


server.use(express.json()); // todos os datos seran feiton en formato JSON
server.use(cors())
//CRUD

// CREATE = INSERT 
// READ = SELECT
// UPDATE =  UPDATE
// DELETE = DELETE

const usuarios = ["Omar", "Oscar", "Ulices", "Alexander"]

server.get("/comentarios", (req, res) => {
    res.json(usuarios)
})

// SELECT * FROM comentarios WHERE id = :index
server.get("/comentarios/:id", (req, res) => {
    const {id} = req.params
    res.json(usuarios[id])
})

// INSERT INTO comentarios(name) VALUES ("Mitsuhiko")
server.post("/comentarios", (req, res) =>{
    const {name} = req.body
    usuarios.push(name)
    res.json("Cadastro feito")
})

// UPDATE comentarios SET name = "Gui" WHERE id = 3
server.put("/comentarios/:id", (req, res) => {
    const { id } = req.params // Recuperando parametros da URL
    const { name } = req.body // Recuperando valor enviado no Body

    usuarios[id] = name; // sobreescribimos 
    res.json(usuarios)

})

server.delete("/comentarios/:id", (req, res) => {
    const { id } = req.params // criar uma variavel index e ao mesmo tempo puxar o atributo de params

    usuarios.splice(id, 1)
    res.json(usuarios)
})


server.listen(3333)
