const mongoose = require('mongoose');

 function connect(){
     mongoose
     .connect("mongodb://localhost/suricatasClub", {
         useNewUrlParser: true,
         useUnifiedTopology:true,
     })
     .then(() => {
         console.log("Conectado com o Banco de dados");
     })
     .catch((error) => {
         console.log(`Error ao tentar a conexao ${error}`)
     })
 }

 module.exports = connect();
