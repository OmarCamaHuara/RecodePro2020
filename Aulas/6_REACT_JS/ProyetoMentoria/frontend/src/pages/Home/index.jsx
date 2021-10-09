import Animation from '../../components/Animation'
import CardCourse from '../../components/CardCourse'

import './styles.css';

import separator from '../../assets/images/separator.svg';
import  yoda from '../../assets/images/characters/yoda.png';

import cursoReact from '../../assets/images/courses/react-redux.jpg';
import php from '../../assets/images/courses/php.jpg';
import flutter from '../../assets/images/courses/flutter.jpg'

const Home = () => {
    return(
        <>
        <Animation />
            <div clasName="section-1">
                <div clasName="container">
                    <header clasName="header">
                        <h2>Luke code</h2>
                        <nav>
                            <button clasName="btn-1">FAZER lOGIN</button>
                            <button clasName="btn-2">INSCREVA-SE</button>
                        </nav>
                    </header>
                    <main>
                        <section>
                            <h1>Se torne um mestre <br/> do programação!!</h1>
                            <img src={separator} alt=""/>
                            <p>
                                De o proximo passo o seu futuro, <br/>
                                que a força esteja com vocé
                            </p>
                        </section>
                        <section>
                            <img src={yoda} alt="Yoda StarWars"/>
                        </section>
                    </main>
                </div>
            </div>

            <div class="section-2">
                <div class="container">
                    <h2>+3 Cursos completos</h2>
                    <p>Na luke code, voce tem acesso a 3 cursos gratuitos, basta se cadastrar na plataforma.</p>
                    <section class="card-container">
                        <CardCourse image={cursoReact} description="Desenvolvimento front-end React e Redux">
                            Desenvolvemento front-end <br/> React e Redux
                        </CardCourse>
                        <CardCourse image={php} description="PHP-7 - Trabalho con PSRs">
                            PHP-7 - Trabalho con PSRs
                        </CardCourse>
                        <CardCourse image={flutter} description="Desenvolvimento IOS e Android com Flutter">
                            Desenvolvimento IOS e Android <br/> com Flutter
                        </CardCourse>
                    </section>  
                    <button>Inscrivir-se</button>
                </div>   
            </div>
            <div className="section-3">
                <div className="container">
                    <h2>O que ofrecemos para voce</h2>
                    <section className="categories-container">
                        <div className="category-card">
                            <div className="category-card-img">
                                <img src="" alt=""/>
                            </div>
                            <div className="category-card-content">
                                <h4>BACK-END</h4>
                                <p>22 cursos</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </>
    )
}

export default Home;