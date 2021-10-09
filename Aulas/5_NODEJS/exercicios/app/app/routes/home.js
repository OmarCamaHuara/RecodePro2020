module.exports = function(app){
    app.get('/', function(req, res){
        re.render('home/index');
    })
}