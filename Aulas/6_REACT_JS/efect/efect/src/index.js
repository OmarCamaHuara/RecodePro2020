import React from 'react';
import ReactDOM from 'react-dom';



const App = () =>
{

  const [users, setUsers] = React.useState("");

  const response = await fetch(url);
  

  return(
    <div className="container py-5">
      <button btn btn-dark w-25 >Teste</button>
    </div>
  )
}

ReactDOM.render(
  
    <App />,
  document.getElementById('root')
);


