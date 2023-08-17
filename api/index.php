<?php include_once 'header.php'?>
<style>
    /* reset */
* {
	margin: 0;
	padding: 0;
	list-style: none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
/* colors */
.red, .task-list li.list-red input[type=checkbox]:checked + label {background-color: #ca3840;}
.orange, .task-list li.list-orange input[type=checkbox]:checked + label {background-color: #eb8343;}
.yellow, .task-list li.list-yellow input[type=checkbox]:checked + label {background-color: #eeb444;}
.purple, .task-list li.list-purple input[type=checkbox]:checked + label {background-color: #66315c;}

.sun {
	width: 500px;
	height: 500px;
	position: absolute;
	background-color: rgba(255, 255, 255, 1);
	border-radius: 50%;
	z-index: 1;
	right: -140px;
}
.sun:after, .sun:before {
	content: "";
	position: absolute;
	width: 500px;
	height: 500px;
	background-color: rgba(255, 255, 255, 0.2);
	border-radius: 50%;
	left: 0;
	top: 0;
}
.sun:after {
	animation: sunshine 2s infinite;
}
.sun:before {
	animation: sunshine 4s infinite;
}
.tasks {
	position: relative;
	padding-top: 50px;
}
.btn-send {
	position: absolute;
	top: -30px;
	left: 30px;
	display: block;
	background-color: #fff;
	z-index: 9;
	border-radius: 50%;
	overflow: hidden;
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.17);
	width: 70px;
	height: 70px;
	color: #65315c;
}
.btn-send i {
	position: absolute;
	left: 50%;
	top: 50%;
	font-size: 20px;
	-webkit-transform: translate(-50%,-50%);
	   -moz-transform: translate(-50%,-50%);
	    -ms-transform: translate(-50%,-50%);
	     -o-transform: translate(-50%,-50%);
	        transform: translate(-50%,-50%);
}

/* Task list */
.task-list > li {
	border-top: 1px solid #ebebeb;
	
}
.task-list > li figure {
	position: relative;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	position: absolute;
	left: 34px;
	
}
.task-list > li figure i {
	left: 50%;
	position: absolute;
	top: 50%;
	color: #fff;
	-webkit-transform: translate(-50%,-50%);
	   -moz-transform: translate(-50%,-50%);
	    -ms-transform: translate(-50%,-50%);
	     -o-transform: translate(-50%,-50%);
	        transform: translate(-50%,-50%);	
}
.task-list > li figure.ok i {
	color: #36c990 !important;
}

.task-list > li figure.ok {
	-webkit-transform: scale(0);
	   -moz-transform: scale(0);
	    -ms-transform: scale(0);
	     -o-transform: scale(0);
	        transform: scale(0);
	background-color: #fff;
	z-index: 9;
	;
}
.task-list input[type=checkbox]:checked + label figure.ok {
	animation: checkAnimate 0.2s linear; 
	animation-fill-mode: forwards;
}
.task-list input[type=checkbox] + label {
	padding: 20px 30px 20px 100px;
	display: block;
	text-decoration: none;
	position: relative;
		-webkit-transition: all .25s ease;
	   -moz-transition: all .25s ease;
	    -ms-transition: all .25s ease;
	     -o-transition: all .25s ease;
	        transition: all .25s ease;
}
.task-list label:hover {
	background-color: #eee;
}
.task-list label strong {
	display: inline-block;
	width: 100%;
	color: #333;
}
.task-list label span.date {
	font-size: 0.9em;
	color: #eeb444;
	
}

.task-list .mini-nav ul {
	display: none;
	position: absolute;
	right: 0;
	top: 60px;
	box-shadow: 0 10px 50px rgba(0, 0, 0, 0.4);
	
}
.task-list .mini-nav  ul > li {
	padding: 10px;
	font-size: 14px;
	display: block;
	background-color: #ffffff;
	border-bottom: 1px solid #ddd;
	position: relative;
	width: 250px;
}

.task-list .mini-nav > li {
	position: absolute;
	right: 0;
	top: 0;
	color: #000000;
	display: block;
	height: 100%;
	width: 70px;
	text-align: center;
}
.task-list .mini-nav > li a {
	background-color: #fff;
}
.task-list .mini-nav > li i {
	position: relative;
	top: 30px;
}
.task-list .mini-nav > li:hover {
	background-color: #eeb444;
}
.task-list .mini-nav li:hover ul {
	display: inherit;
	z-index: 9;
}
.task-list input[type=checkbox]:checked + label * {
	color: #fff;
}


.checks {
	display: none;
}

/*Animations*/

@keyframes sunshine {
	0% {
		-webkit-transform: scale(1);
		   -moz-transform: scale(1);
		    -ms-transform: scale(1);
		     -o-transform: scale(1);
		        transform: scale(1);
		opacity: 1;
	}
	100% {
		-webkit-transform: scale(2);
		   -moz-transform: scale(2);
		    -ms-transform: scale(2);
		     -o-transform: scale(2);
		        transform: scale(2);
		opacity: 0;
	}
}

@keyframes checkAnimate {
	0% {
		-webkit-transform: scale(0);
		   -moz-transform: scale(0);
		    -ms-transform: scale(0);
		     -o-transform: scale(0);
		        transform: scale(0);
	}
	50% {
		-webkit-transform: scale(3);
		   -moz-transform: scale(3);
		    -ms-transform: scale(3);
		     -o-transform: scale(3);
		        transform: scale(3);
	}
	100% {
		-webkit-transform: scale(1);
		   -moz-transform: scale(1);
		    -ms-transform: scale(1);
		     -o-transform: scale(1);
		        transform: scale(1);
	}
}
.icon {
  padding: 0.5rem;
  background-color: var(--light-grey);
  border-radius: 10px;
  width: 5em;
}
.center{
	margin-left: auto;
    margin-right: auto;
    width: 6em
}
label{
	width: 600px;
	text-align: center;
}
</style>
<body>
    
    <div>
    <img src="imagens/banner.png" width="100%" heigth="10%">
   </div>
      
				<ul class="task-list">
					<li class="list-purple">  
						<input class="checks" type="checkbox" id="item1" name="itens">
						<label for="item1">
                        <img src="imagens/IconMath.png" class="icon" /> 
							<figure class="ok"><i class="fa fa-check"></i></figure>
							<strong>Matemática e suas tecnologias</strong> <br>
							<span class="date">Matemática</span>
							<nav class="mini-nav">
								<li>
									<i class="fa fa-bars action"></i>
									<ul>
                                    <li><a href="#">Equação do 2º grau</a></li>
                                      <li><a href="#">Regra de 3</a></li>
                                      <li><a href="#">Teorema de Pitágoras</a></li>
									</ul>
								</li>
							</nav>
						
						</label>
					</li>
					<li class="list-red">
						<input class="checks" type="checkbox" id="item2" name="itens">
						<label for="item2">
                        <img src="imagens/IconHistory.png"  class="icon" /> 
							<figure class="ok"><i class="fa fa-check"></i></figure>
							<strong>Ciências humana e suas Tecnologias</strong> <br>
							<span class="date">História,Geografia,Sociologia,Filosofia</span>
							<nav class="mini-nav">
								<li>
									<i class="fa fa-bars action"></i>
									<ul>
                                      <li><a href="#">Guerra Fria</a></li>
                                      <li><a href="#">Guerra do Paraguai</a></li>
                                      <li><a href="#">Getulio Vargas</a></li>
									</ul>
								</li>
							</nav>
						</label>
					</li>
					<li class="list-orange">
						<input class="checks" type="checkbox" id="item3" name="itens">
						<label for="item3">
                        <img src="imagens/IconPort.png"  class="icon" /> 
							<figure class="ok"><i class="fa fa-check"></i></figure>
							<strong>Linguagens, códigos e suas tecnologias</strong> <br>
							<span class="date">Língua Portuguesa,Artes,Ingles/Espanhol,Literatura</span>
							<nav class="mini-nav">
								<li>
									<i class="fa fa-bars action"></i>
									<ul>
                                      <li><a href="#">Sujeito e Predicado</a></li>
                                      <li><a href="#">Transitividade Verbal</a></li>
                                      <li><a href="#">Concordância Nominal</a></li>
									</ul>
								</li>
							</nav>
						</label>
					</li>
					<li class="list-yellow">
						<input class="checks" type="checkbox" id="item4" name="itens">
						<label for="item4">
                        <img src="imagens/IconScience.png"  class="icon" /> 
							<figure class="ok"><i class="fa fa-check"></i></figure>
							<strong>Ciências da Natureza e suas tecnologias</strong> <br>
							<span class="date">Biologia, Física e Química.</span>
							<nav class="mini-nav">
								<li>
									<i class="fa fa-bars action"></i>
									<ul>
									  <li><a href="#">Moluscos, Anelídeos, Artrópodes</a></li>
								      <li> <a href="#">Classificação dos Fungos</a></li>
									  <li><a href="#">Importância ecológica e econômica</a></li>
									</ul>
								</li>
							</nav>
						
						</label>
					</li>
				</ul>
			</section>
		</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Noticia+Text" rel="stylesheet">
   
</body>
<?php include_once 'footer.php'?>

