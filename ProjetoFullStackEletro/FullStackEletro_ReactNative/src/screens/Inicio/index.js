import React from 'react';
import { 
  Text, 
  View,
  Image,
  StatusBar, 
  Platform,
  StyleSheet,
} from 'react-native';
import { TouchableOpacity } from 'react-native-gesture-handler';

import logoIni from '../../../assets/FullStackEletro.png'


function Inicio({navigation}) {

  function enter(){
    navigation.navigate("Login")
  }

  return (
     <View style={styles.caixa} >
        <View style={styles.container}>
        <StatusBar/>
        <TouchableOpacity onPress={enter}>
          <Image
            source={logoIni}
            style={{ width:300, height:300 }}
          />
        </TouchableOpacity>
        
        <Text style={styles.welcome}>
            Welcome
        </Text>
        <Text style={styles.welcome}>
            Tudo ao melhor precio!!!
        </Text>
        </View>
     </View> 
    
  );
}
const styles = StyleSheet.create({
  caixa: {
    height: Platform.OS === "web" ? "100vh":"100%"
  },
  container: {
    flex: 1,
    backgroundColor: '#000',
    alignItems: 'center',
    justifyContent: 'center',
  },
  welcome: {
    fontSize:20,
    textAlign: 'center',
    margin: 10,
    color: '#FFF'
  },
});

export default Inicio;