import React, { useState, useEffect } from 'react';


export default function Formulario({children}){

    const [cep, setCep] = useState("");
    const [rua, setRua] = useState("");
    const [barrio, setBarrio] = useState("");
    
    useEffect(() => {
        async function chamaApi(){
            if(cep.length === 8){
                const url = "https://viacep.com.br/ws/" +cep +"/json/";
                const resp = await fetch(url);
                const dadosJson = await resp.json()

                console.log(dadosJson)

                setRua(dadosJson.logradouro)
                setBarrio(dadosJson.bairro)
            }
        }
        chamaApi()
    }, [cep])

    function alterarCep(event){
        setCep(event.target.value)
    }

    function alterarRua(event){
        setRua(event.target.value)
    }

    function alterarBarrio(event){
        setBarrio(event.target.value)
    }

    return(
        <div>
            <form>
                <div className="mb-3">
                    <label for="cep" className="form-label">CEP</label>
                    <input type="text" className="form-control" value={cep} onChange={alterarCep} />
                </div>
                <div className="mb-3">
                    <label for="cep" className="form-label">Rua</label>
                    <input type="text" className="form-control" value={rua} onChange={alterarRua} />
                </div>
                <div className="mb-3">
                    <label for="cep" className="form-label">Barrio</label>
                    <input type="text" className="form-control" value={barrio} onChange={alterarBarrio} />
                </div>
                <button type="submit" className="btn btn-primary">Enviar</button>
            </form>
        </div>
    )
}