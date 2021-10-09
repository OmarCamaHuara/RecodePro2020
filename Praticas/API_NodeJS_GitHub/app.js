const express = require('express');
const app = express();

const bodyParser = require('body-parser');
const buscarGithub = require('./src/functions/buscarGithub');

app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended:true })) //perguntar

app.set('view engine', 'ejs')
app.set('views', './src/views')

app.get('/', (req, res) => {
    res.render('index')
})

app.post('/envia-github', async(req, res) => {
    const { GitHub } = req.body;
    
    const resultado = await buscarGithub(GitHub)

    console.log(resultado)

    res.render('resultado', { dado:resultado })
})

app.listen(3333)