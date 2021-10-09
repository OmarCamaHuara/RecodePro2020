
module.exports = (app) => {
    app.get('/produtos', (req, res) => {
        const conn = app.config.database();
        const query = app.models.getContent;

        query.getProdutos( conn, (error, results, fields) => {
            console.log(error, results);
            res.json(results)
        })  
    })
}