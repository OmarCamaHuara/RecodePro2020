

import Img2 from './code-splitting/Imagem2'
import './App.css';

import { lazy, Suspense } from 'react';

// import Slogan from './code-splitting/Slogan'
// import Rodape from './code-splitting/Rodape'

const Slogan = lazy(() => import('./code-splitting/Slogan'))
const Rodape = lazy(() => import('./code-splitting/Rodape'))


function App() {
  return (
    <div className="App">
      
      <header className="App-header">
        <Suspense fallback={ <p>Carrangando...</p> }>
          <Img2 />
        </Suspense>
        <Suspense fallback={ <p>Carrangando...</p> }>
          <Slogan />
        </Suspense>
        <Suspense fallback = { <p>Carregando ...</p> }>
          <Rodape/>
        </Suspense>
      </header>
      
    </div>
  );
}

export default App;
