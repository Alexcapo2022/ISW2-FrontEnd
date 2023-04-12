import '../estilos/css/navbar.css';
const Navbar = ()=>{
    return(
        <div>
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2 className='Logo'>Estudiando.pe</h2>
        <ul>
            <li><a href="/PaginaPrincipal"><i class="fas fa-home"></i>Pagina Principal</a></li>
            <li><a href="/Register"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Cursos</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Solicitar ayuda</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Rankings</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
</div>
        </div>
    )
}
export default Navbar