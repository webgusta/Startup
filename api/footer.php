<style>
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

a {
  text-decoration: none;
}

footer {
  color: #ffffff;
  background-color: #1C1C1C;
  position: relative;
  bottom: 0;
  width:100%;
  
}
.row {
  display: flex;
  padding: 1rem;
}
.column {
  width: calc(100% / 3);
  padding: 0 0.9375rem;

}
h4 {
  margin-bottom: 0.9375rem;
  font-size: 1.5rem;
}
p {
  font-size: 1rem;
  line-height: 1.3rem;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
ul li {
  margin-bottom: 0.625rem;
}

ul li i {
  color: #6faaff;
}

ul li a:hover {
  color: #6faaff;
}


.copyright {
  text-align: center;
  color: #fff;
  background-color: #000000;
  padding: 0.6rem 0;
}

/* Responsive adjustments */

@media screen and (max-width: 768px) {
  .column {
    margin: 0.4rem 0;
    width: 100%;
    padding: 0;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  h4 {
    font-size: 1.3125rem;
  }

  p {
    font-size: 0.9375rem;
  }

  ul li a {
    font-size: 0.9375rem;
  }

  ul.social-icons li a {
    width: 1.875rem;
    height: 1.875rem;
  }
}
.social-menu ul{
    position: absolute;
    top: 50%;
    right: 7%;
    padding: 0;
    margin: 0;
    transform: translate(-50%, -50%);
    display: flex;
}

.social-menu ul li{
    list-style: none;
    margin: 0 15px;
}

.social-menu ul li .fab{
    font-size: 30px;
    line-height: 60px;
    transition: .3s;
    color: #000;
}

.social-menu ul li .fab:hover{
    color: #fff;
}

.social-menu ul li a{
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #fff;
    text-align: center;
    transition: .6s;
    box-shadow: 0 5px 4px rgba(0,0,0,.5);
}

.social-menu ul li a:hover{
    transform: translate(0, -10%);
}

.social-menu ul li:nth-child(1) a:hover{
    background-color: #2E64FE;
}
.social-menu ul li:nth-child(2) a:hover{
    background-color: #E4405F;
}
.social-menu ul li:nth-child(3) a:hover{
    background-color: #00FFFF;
}
.social-menu ul li:nth-child(4) a:hover{
    background-color: #000 ;
}
.letrafooter{
  color: #ffffff;
  font-size: 1rem;
}
.contato{
  position: relative;
  right:15%;
 
}
</style>

<footer>
<div class="row">
  <div class="column">
    <h4>Sobre nós</h4>
    <p>A Matriz EAD é o maior programa de inclusão educacional do país. Há mais de 10 anos, em parceria com as melhores instituições de ensino particulares,
      o programa promove o acesso à educação de qualidade. Seja para você ou para seus filhos,
      a Matriz está pronto para ajudar a realizar sonhos com economia no bolso. </p>
  </div>
  <div class="column">
    <h4>Links</h4>
    <div class="letrafooter">
    <ul>
      <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
      <li><a href="quemsomos.php"><i class="fa fa-angle-right"></i> Quem somos</a></li>
      <li><a href="comofunciona.php"><i class="fa fa-angle-right"></i> Como funciona</a></li>
    </ul>  
   </div>
  </div> 
  <div class="contato">
    <h4>Contato</h4> 
    <a href="https://wa.me/+5521974997971"><img src="imagens/contato.png" width=""/> </a>
  </div> 
  <div class="column">
    <h4>Redes Sociais</h4>
    <div class="social-menu">
        <ul>
            <li><a href="https://facebook.com" target="blank"><i class="fab fa-facebook-f"></i></i></a></li>
            <li><a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.tiktok.com" target="blank"><i class="fab fa-tiktok"></i></a></li>
        </ul>
    </div>
  </div>
</div>
<p class="copyright">© 2023 All Rights Reserved</p>
</footer>
</html>