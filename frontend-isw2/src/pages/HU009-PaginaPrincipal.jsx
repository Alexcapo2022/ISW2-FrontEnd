//import React from "react";
import Navbar from "../componentes/navbar"
import '../estilos/css/PaginaPrincipal.css';
const HU009PaginaPrincipal = () => {
    return(
        <div>
            <Navbar/>
            <section id="hero">
        <h1>Una pagina pensada en estudiantes </h1>
        <h1>supera tus limites repasando con nosotros</h1>
        <section id="hero2">
          <a href="#">
            <button  class="index_button">Cursos de Secundaria</button>
          </a>
            
          <a href="3"><button class="index_button" >Ranking de alumnos</button></a>
        </section>
    </section>
    <section id="Signup">
        <div class="container_index">
            
        <div class="img-container"></div>
        <div class="texto"><h2>Comienza resolviendo tareas de todos los cursos <span class="color-acento">para fortalecer tu aprendizaje fuera del colegio</span> </h2>
            <p>Sé que a veces puede ser difícil encontrar la motivación para estudiar y mantenerse enfocado, pero quiero recordarles que cada uno de ustedes tiene un potencial increíble. 
                Con la página web Estudiando.pe, tienen la oportunidad de acceder a una gran cantidad de recursos y herramientas para ayudarles en su camino educativo.

                    Recuerden que cada día es una nueva oportunidad para aprender algo nuevo y acercarse un paso más a sus metas. 
                    No se desanimen por los obstáculos que puedan encontrar en el camino, en lugar de eso, conviértanlos en oportunidades para crecer y mejorar.

                    ¡Están en el camino correcto para alcanzar sus sueños! Mantengan una actitud positiva, trabajen duro y utilicen las herramientas disponibles en Estudiando.pe para lograr el éxito que se merecen. ¡Ustedes pueden hacerlo!</p></div>
        
        </div>
    </section>
    <section id="nuestrosProductos">
                <div className="container_index">
                  <h2>Beneficios de Nuestro sitio</h2>
                  <div className="productos">
                    <div className="carta">
                      <h3>Metodología</h3>
                      <p>The best graphics cards are the beating heart of any gaming PC, and everything else comes second. Without a powerful GPU pushing pixels, even the fastest CPU won't manage much. While no one graphics card will be right for everyone, we'll provide options for every budget and mindset below. Whether you're after the fastest graphics card, the best value, or the best card at a given price, we've got you covered.
                        Where our GPU benchmarks hierarchy ranks all of the cards based purely on performance, our list of the best graphics cards looks at the whole package. Price, availability, performance, features, and efficiency are all important, though the weighting becomes more subjective.</p>
                      
                    </div>
                    <div className="carta">
                      <h3>Tareas</h3>
                      <p>RAM stands for random access memory, and it’s one of the most fundamental elements of computing. RAM is a temporary memory bank where your computer stores data it needs to retrieve quickly. RAM keeps data easily accessible so your processor can quickly find it without having to go into long-term storage to complete immediate processing tasks.
                        Every computing device has RAM, whether it’s a desktop computer (running Windows, MacOS, or Linux), a tablet or smartphone (running Android or iOS), or even an IoT computing device (like a smart TV). Nearly all computers have a way of storing information for longer-term access, too. But the memory needed to run the process you’re currently working on is stored and accessed in your computer’s RAM.</p>
                      
                    </div>
                    <div className="carta">
                      <h3>Beneficios</h3>
                      <p>Our tips and picks below will show you the best CPU for gaming. Of course, when shopping for the best CPU for gaming, you'll want to balance performance and features with your PC budget. You can also see how all of these processors stack up in our CPU Benchmarks hierarchy, including CPU overclock benchmarks. But for detailed help on picking the best processor for your gaming rig, you can check out our 2022 CPU Buying Guide. And if you're on the fence about which CPU company to go with, our AMD vs. Intel article dives deep into the topic and comes up with a winner.
                        If you're planning a new system now, be aware that AMD's hotly-anticipated Zen 4 Ryzen 7000 arrives on September 26, while Intel's 13th-Gen Raptor Lake retort arrives in October. </p>
                           
                    </div>
                  </div>
                </div>
              </section>
    
    
        </div>
    )
}
export default HU009PaginaPrincipal