import logo from './logo.svg';
import './App.css';

import { lazy, Suspense } from 'react'

// import Slogan from './Slogan';
// import Rodape from './Rodape';

const Slogan = lazy(() => import('./Slogan'));
const Rodape = lazy(() => import('./Rodape'))

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <Suspense fallback={ <p>Carregando ...</p>}>
          <Slogan />
        </Suspense>
        <Suspense fallback={ <p>Carregando ...</p>}>
          <Rodape />
        </Suspense>
      </header>
    </div>
  );
}

export default App;
