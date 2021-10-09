import React from 'react';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';

import Inicio from '../screens/Inicio';
import Login from '../screens/Login';
import Produtos from '../screens/Produtos';

const Rotas = {
    Inicio: {
        nome: "Inicio",
        screen: Inicio,
    },
    Login:{
        nome: "Login",
        screen: Login,
    },
    Produtos:{
        nome: "Produtos",
        screen: Produtos
    },
}

const Browse = createSwitchNavigator(Rotas);

export default createAppContainer(Browse);