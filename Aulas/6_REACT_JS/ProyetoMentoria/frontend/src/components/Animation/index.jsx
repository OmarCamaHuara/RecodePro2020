import './style.css';

 const Animation = () => {
    setTimeout(() => {
        document.getElementById('bg-animation').style = "display: none";
    }, 3000);

     return(
         <div className="bg-animation" id="bg-animation">
            <div className="animation">
                <h2>LukeCode</h2>
            </div>
         </div>
     );
 }
 export default Animation;