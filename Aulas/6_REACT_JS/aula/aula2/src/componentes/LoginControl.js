import React, {Component} from 'react';

class LoginControl extends Component{
    constructor(props){
        super(props);
        this.handleLoginClick = this.handleLoginClick.bind(this);
        this.handleLogoutClick = this.handleLogoutClick.bind(this);
        this.state = {isLoggedIn: false};
    }
    handleLoginClick(){
        this.setState({isLoggedIn: true});
    }
    handleLogoutClick(){
        this.setState({isLoggedIn: false});
    }
    render(){
        const isLoggedIn = this.state.isLoggedIn;
        let button;
        if(isLoggedIn){
            button = <LogoutButton onClick={this.handleLogoutClick} />;
        }else{
            button = <LoginButton onClick = {this.handleLoginClick} />;
        }
        return(
            <div>
                <Greeting isLoggedIn = {isLoggedIn}/>
                {button}
            </div>
        );
    }
}

function UserGreeting(props){
    return (
        <div>
            <h1>Agora que entrou, Deseja sair?</h1>
        </div>
    );
}

function GuestGreeting(props){
    return <h1>Seja Bem Vindo, Deseja Entrar?</h1>;
}

function Greeting(props){
    const isLoggedIn = props.isLoggedIn;
    if(isLoggedIn){
        return <UserGreeting />
    }
    return <GuestGreeting />
}
function LoginButton(props){
    return(
        <button class='btn btn-success' onClick={props.onClick}>
            Entrar...
        </button>
    );
}
function LogoutButton(props){
    return(
        <button class='btn btn-danger' onClick={props.onClick}>
            Sair...
        </button>
    );
}
export default LoginControl;

