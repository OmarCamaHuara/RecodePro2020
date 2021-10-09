module.exports = function(ava){
    ava.get('/', function(req, res){
        res.render('home/index');
    });
}