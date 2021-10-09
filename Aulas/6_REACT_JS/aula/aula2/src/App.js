import logo from './logo.svg';
import './App.css';
import Identificacao from './componentes/Identificacao'
import {Footer, Header, Left} from './componentes/Footer'
import {Footer2} from './componentes/Footer2'
import LoginControl from './componentes/LoginControl'
import {NumberList} from './componentes/ListItem'


const numbers = [1, 2, 3, 4];
function App() {
  return (
    <div className="App">
      
      <LoginControl />
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
      <div>
        <Identificacao/>
      </div>
        <p>
          <NumberList numbers = {numbers} />
          Edit <code>Seu </code>ano 2023.
        </p>
      </header>
      <Footer dados = { {mes:10, ano:2023} }/>
      <Header palabra = {'exito'}/>
      <Left/>

      <Footer2 dados = {{mes:12, ano:2050}}/>
    </div>
  );
}

export default App;
