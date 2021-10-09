import React from 'react'

class Descricao extends React.Component{
    render(){
        return(
        <p><b>{this.props.item}: </b>{this.props.valor}</p>
        )
    }
}

export default Descricao;