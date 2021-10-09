import React from 'react';
import {
    View,
    Text,
    TouchableOpacity, 
    StyleSheet,
    Image, 
    ScrollView,
    TouchableHighlight,
} from 'react-native';

import Items from './items';

import logo from '../../../assets/logo.png'

function Produtos({navigation}){
    function atras(){
        navigation.navigate("Login")
    }

    return (
        <View style={styles.container}>
            <TouchableOpacity style={styles.btn} onPress={atras}>

                <Text style={styles.atras}>ATRAS</Text>
                <View style={styles.right}>
                    <Image source={logo} style={styles.logo}/>
                </View>
            </TouchableOpacity>

            <ScrollView
                vertical
                showsVerticalScrollIndicator = {false}
            >
                {   
                  Items.map((item, index) => {
                      return(
                          <View key={item.id} style={styles.form}>
                              <View style={styles.imgBack}>
                                 <Image 
                                style={styles.img}
                                source={{uri: item.imagen}}
                                /> 
                              </View>
                              
                              <View>
                                <Text style={styles.subTitulo}>CATEGORIA</Text>
                                <Text style={styles.textItem}>{item.categoria}</Text>
                              </View>
                              <View>
                                <Text style={styles.subTitulo}>PREÇO</Text>
                                <Text style={styles.textItem2}>R$ {item.preco}</Text>
                              </View>
                              <View>
                                <Text style={styles.subTitulo}>PREÇO FINAL</Text>
                                <Text style={styles.textItem}>R$ {item.precoFinal}</Text>
                              </View>
                              
                          </View>
                      )
                  })
                }

            </ScrollView>  
        </View>
    )
}

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#000',
        width: '100%',
        height: '100%'
    },  
    atras:{
        fontSize: 32,
        textAlignVertical: 'center',
        backgroundColor: '#000',
        color: '#FFF',
        borderTopLeftRadius: 8 ,
        borderBottomLeftRadius:8,
        padding: 10
    },
    btn: {
        backgroundColor: "#D41F2A",
        margin: 12,
        padding: 8,
        borderRadius: 8,
        flexDirection: 'row',
    },
    logo:{
        padding: 0,
        width: 100,
        height: 65,
        resizeMode: 'contain',
    },
    img: {
        width: 100,
        height: 100,
        resizeMode: 'contain',
    },
    right: {
        flex: 1,
        flexDirection: 'row',
        justifyContent: 'flex-end',
        backgroundColor: "#000",
        borderTopRightRadius: 8,
        borderBottomRightRadius: 8,
    },
    form : {
        flex : 1 ,
        flexDirection : 'row',
        justifyContent : 'space-around',
        marginTop : 20,
        backgroundColor : '#D41F2A',
        width : 400,              
        borderRadius : 16,
        padding : 15,
        alignSelf : 'center',
        alignItems : 'center',
        shadowOpacity: 50,
    },
    subTitulo: {
        fontWeight: 'bold',
        paddingRight: -3,
        paddingBottom: 10,
        textShadowColor: 32,
        color: '#fff',
    },
    textItem: {
        fontSize: 16,
    },
    textItem2: {
        fontSize: 16,
        textDecorationLine: 'line-through',
    }, 
    imgBack: {
        backgroundColor: '#fff',
        borderRadius: 16,
        borderLeftColor: "blue",
    }
})

export default Produtos;