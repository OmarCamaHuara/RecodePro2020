import React from 'react';
import { 
  View,
  StatusBar, 
} from 'react-native';


// import Routes from './src/screens/Inicio'
// import Routes from './src/screens/Login'
// import Routes from './src/screens/Produtos';

import Routes from './src/routes';

export default function App() {
  return (
    <View>
      <StatusBar />
      <Routes />
    </View>
  );
}

