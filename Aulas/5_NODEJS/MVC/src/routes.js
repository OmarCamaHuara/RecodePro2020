const { Router } = require('express')

const routes = new Router;

const PostagensController = require('./controllers/PostagensController');
const CategoriaController = require('./controllers/CategoriaController')

routes.get("/postagens", PostagensController.indexAction);
routes.post("/postagens", PostagensController.registrarPostagemAction);


module.exports = routes;