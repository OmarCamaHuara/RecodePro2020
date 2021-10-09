const express = require('express');
const app = express();

const mongoose = require('mongoose');
const bcrypt = require('bcryptjs');

//models
require('./src/models/Usuario');
const Usuario = mongoose.model("usuarios");

// connection 
require('./src/db/connect');

app.use(express.json())

app.get('/', async(req, res) => {
    const usuarioResponse = await Usuario.find();
    const usuarioJson = await usuarioResponse;

    return res.json(usuarioJson);
});

app.post('/usuarios',async (req, res) => {
    const validate = await Usuario.findOne({ email:req.body.email });
    if(validate){
        return res.json({
            message: "Ja existe um usuario com este email. Tente outro"
        })
    }else{
        const novoUsuario = new Usuario({
            nome: req.body.nome,
            email: req.body.email,
            senha: req.body.senha,
        });

        bcrypt.genSalt(10, (error, salt) => {
            bcrypt.hash(novoUsuario.senha, salt, (error, hash) => {
                if(error){
                    res.json({message: "Error ao cadastrar o Usuario"})
                }else{
                    // efecticamente colocando o hash na nossa senha
                    novoUsuario.senha = hash
                    novoUsuario.save()

                    res.json({ message: "Cadastro consluido com succeso", usuario:novoUsuario});
                }
            })
        })
    }
});

app.put('/usuarios/:id', async(req, res) => {
    const{id} = req.params
    // Pesquisando por um unico usuario
    const usuario = await Usuario.findOne({_id: id})

    //Alterando os dados existentes
    usuario.nome = req.body.nome
    usuario.email = req.body.email
    usuario.senha = req.body.senha

    // salvando alteracoes
    usuario.save()

    res.json({message: "Usuario alterado"})
})

app.delete('/usuarios/:id', async(req, res) => {
    const { id } = req.params;
    await Usuario.findOneAndDelete({ _id:id });

    res.json({ message: "Usuario Deletado!" })
})

app.listen(3333)