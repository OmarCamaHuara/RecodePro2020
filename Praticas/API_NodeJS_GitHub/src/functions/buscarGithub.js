const fetch = require('node-fetch')

module.exports = async function buscarGithub(GitHub){
    const response = await fetch(`https://api.github.com/users/${GitHub}`);
    const json = await response.json();

    return json;
}