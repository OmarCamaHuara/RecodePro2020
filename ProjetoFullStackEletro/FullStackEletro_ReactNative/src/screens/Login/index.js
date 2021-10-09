import React from 'react';
import { 
  Text, 
  View,
  Image,
  StatusBar, 
  Platform,
  StyleSheet,
  TextInput,
  TouchableOpacity,
  Alert,
} from 'react-native';

import logoIni from '../../../assets/FullStackEletro.png'

const apiUser = {
    id: 1,
    email: "omar.js2023@gmail.com",
    password: "123"
}

function Login({navigation}) {

    const [ user, setUser ] = React.useState("");
    const [ password, setPassword ] = React.useState("");

    function authentication(){
        if(apiUser.email === user && apiUser.password === password){
            navigation.navigate("Produtos")
        }else{
            Alert.alert("User invalidated", "This user does not exist")
        }
    } 

  return (
     <View style={styles.caixa} >
        <View style={styles.container}>
        <StatusBar/>
        
        
        <View style={styles.inputs}>

            <Image
                source={logoIni}
                style={styles.img}
            />

            <View>
                <Text style={styles.welcome}>Login</Text>
            </View>

            <TextInput 
                style={styles.input}
                placeholder="@gmail.com"
                value={user}
                onChangeText={(text) => setUser(text)}
            />
            <TextInput 
                style={styles.input}
                placeholder="Password..."
                value={password}
                secureTextEntry={true}
                onChangeText={(text) => setPassword(text)}
            />
            <TouchableOpacity style={styles.btn} onPress={authentication}>
                <Text style={styles.btnText}>Entrar</Text>
            </TouchableOpacity>
        </View>
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
  img: {
    width: 200,
    height:200,
  },
  welcome: {
    fontSize:32,
    textAlign: 'center',
    margin: 10,
    color: '#FFF'
  },
  inputs: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",
    width: "100%",
    padding: 2 
  },
  input: {
    backgroundColor: "white",
    width: "70%",
    padding: 8,
    marginTop: 12,
    borderRadius: 8,
  },
  btn:{
    width: "70%",
    marginTop: 12,
    padding: 8,
    borderRadius: 8,
  },
  btnText:{
      padding: 8,
      backgroundColor: '#D41F2A',
      color: "white",
      fontSize: 32,
      textAlign: "center",
      borderRadius: 8,
  }
});

export default Login;