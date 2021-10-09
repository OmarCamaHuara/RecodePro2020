const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send('hello');
})

app.get('/sobre', (req, res) => {
    res.sendFile(__dirname + "/blog.html");
})

app.post('/blog', (req, res) => {
    res.sendFile(__dirname + "/blog.html");
})

app.listen(port, () => {
    console.log(`Exemplo app listening at http://localhost:${port}`);
})