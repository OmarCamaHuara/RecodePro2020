import React from 'react'

export function ListItem(props){
    return <li>{props.value}</li>;
}

export function NumberList(props){
    const numbers = props.numbers;
    const listItems =numbers.map(
        (number) => <ListItem key = {number.toString()} value={number} />
    );
    return(
        <ul>
            {listItems}
        </ul>
    );
}