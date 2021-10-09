import React from 'react';

export class Footer2 extends React.Component {
    constructor(props){
        super(props);
        this.state = props;
    }
    render(){
        return(
            <footer>
                <p>CopyRigth Recode {this.state.dados.mes}-{this.state.dados.ano}</p>
            </footer>
        );
    }

    componentDidMount(){
        console.log('Conectado en la BD');
        setInterval(
            () => {this.atualizar();}
            ,2000
        );
    }
    componentWillUnmount(){
        console.log('Desconectado de la BD')
    }
    atualizar(){
        this.setState(
            { dados: { ano:this.state.dados.ano + 1, mes:this.state.dados.mes} }
        );
    }
}