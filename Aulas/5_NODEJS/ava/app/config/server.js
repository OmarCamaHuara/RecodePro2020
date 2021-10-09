var express = require('express');
var consign = require('consign');
var bodyParser = require('body-parser');

var app = express();
app.set('view engine', 'ejs');
app.set('views', '././ava/views');

app.use(bodyParser.urlencoded( { extended: true }))

consign()
.include('././ava/routes')
.then('././ava/config/database.js')
.then('././ava/models')
.into(app);

module.exports = app;
