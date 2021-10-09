import { Children } from 'react'
import './style.css'
const CardCourse = ({image, description, children}) => {
    return(
        <article>
            <img src={image} alt={description}/>
            <h4>{children}</h4>
        </article>
    )
}
export default CardCourse;