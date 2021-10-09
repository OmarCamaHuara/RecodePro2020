import React from 'react'

export function Footer(props){
    return(
        <footer>
            <p>CopyRightOmar {props.dados.mes} - {props.dados.ano}</p>
        </footer>
    );
}

export function Header(props){
    return(
        <footer>
            <p>Es para mi el {props.palabra}</p>
        </footer>
    );
}

export function Left(){
    return(
        <Footer dados = {{mes:12, ano:1991}}/>
    );
}
