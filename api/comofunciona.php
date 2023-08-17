<?php include_once 'header.php'?>

<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Ajuste a largura conforme necessário */
  height: 100vh; /* Ajuste a altura conforme necessário */
}
.texto {
text-indent: 20px; /* Ajuste esse valor conforme necessário */
font-family: Courier, monospace;
}
.imagem-centralizada {
      display: block;
      margin: 0 auto;
    }


.hover-target1 {
  position: relative;
}
.hover-target1::before {
  content: "Fale com a nossa equipe e tire todas as dúvidas possíveis e confira a qualidade de nossa escola.";
  position: absolute;
  top: -25px; /* Ajuste a posição vertical do balão de fala */
  left: 0;
  background-color: #f1f1f1; /* Cor de fundo do balão de fala */
  padding: 5px 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.hover-target1:hover::before {
  opacity: 1;
}


.hover-target2 {
  position: relative;
}
.hover-target2::before {
  content: "Para realizar a matrícula é bem simples e prático, precisamos apenas de RG, CPF e comprovante de endereço.";
  position: absolute;
  top: -25px; /* Ajuste a posição vertical do balão de fala */
  left: 0;
  background-color: #f1f1f1; /* Cor de fundo do balão de fala */
  padding: 5px 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.hover-target2:hover::before {
  opacity: 1;
}


.hover-target3 {
  position: relative;
}
.hover-target3::before {
  content: "Após a matricula você receberá o seu acesso a Área do Aluno, podendo iniciar suas aulas quando quiser.";
  position: absolute;
  top: -25px; /* Ajuste a posição vertical do balão de fala */
  left: 0;
  background-color: #f1f1f1; /* Cor de fundo do balão de fala */
  padding: 5px 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.hover-target3:hover::before {
  opacity: 1;
}


.hover-target4 {
  position: relative;
}
.hover-target4::before {
  content: "Após todos os conteúdos estudados, chegou o grande dia de testar seus conhecimentos, realize as provas e preencha os gabaritos.";
  position: absolute;
  top: -25px; /* Ajuste a posição vertical do balão de fala */
  left: 0;
  background-color: #f1f1f1; /* Cor de fundo do balão de fala */
  padding: 5px 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.hover-target4:hover::before {
  opacity: 1;
}


.hover-target5 {
  position: relative;
}
.hover-target5::before {
  content: "Pode comemorar! Você conseguiu terminar seus estudos, lembrando que seu certificado e valido em todo território nacional";
  position: absolute;
  top: -25px; /* Ajuste a posição vertical do balão de fala */
  left: 0;
  background-color: #f1f1f1; /* Cor de fundo do balão de fala */
  padding: 5px 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}
.hover-target5:hover::before {
  opacity: 1;
}

</style>

            <div class="container">
                <div class="center">
                  <h1>Como Funciona</h1>
                </div>
            </div>
                  <div class="texto">
                    <h2 class="hover-target1">1º Passo : Entre em contato.</h2> <br>
                    <h2 class="hover-target2">2º Passo : Realize sua Matrícula</h2> <br>
                    <h2 class="hover-target3">3º Passo : Receberá o acesso a Área do Aluno (inicie as aulas 100% Online)</h2> <br>
                    <h2 class="hover-target4">4º Passo : Realize sua Prova</h2> <br>
                    <h2 class="hover-target5">5º Passo : Receba seu Certificado</h2> <br>
                  
                    <img class="imagem-centralizada" src="imagens/estudante.png" alt="" width="700" height="400">
                  </div>

<?php include_once 'footer.php'?>