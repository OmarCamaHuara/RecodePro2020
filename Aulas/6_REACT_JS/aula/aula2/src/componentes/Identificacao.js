import React from 'react';
import Nome from './Nome';
import Desenvolvedor from './Desenvolvedor'
import Descricao from './Descricao'
import Clock from './Clock'

class Identificacao extends React.Component{
    render(){
        return(
            <div>
                <Desenvolvedor/>
                <Nome/>
                <p>Apelido: Cama Huarahuara</p>

                <Clock/>

                <Descricao item="Objetivo " valor="Aprender tecnologias incriveis para construir coisas magnificas"/>

                <Descricao item="Tecnologias Aprendidas " valor="JavaScript, NodeJS, PHP, HTML, Bootstrap, CSS"/>
            </div>
        )
    }
}

export default Identificacao;