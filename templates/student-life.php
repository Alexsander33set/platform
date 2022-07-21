<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Área do Estudante - Newron</title>
   <!-------CSS------->
   <link rel="stylesheet" href="../style/student-life.css">
   <!-------Logo Icon------->
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
   <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
   <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
   <!-----Vue Framework----->
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
   <!-------Loader------->
   <div class="loader"></div><script src="../script/preloader.js"></script>
   <!-------Navbar------->
   <div class="navbar"></div> <script src="../components/navbar.js"></script>
   <!-----End-Navbar----->


   <header>
      <div class="header-text">
         <h1 class="selected">Newron</h1>
         <h1>Descubra novos Caminhos</h1>
         <h1>Trilhe seu Caminho Profissional</h1>
      </div>
      <img src="../src/logo/logo_inverted_no_content.png" alt="Logo do Site">
   </header>

   <div class="header-areas">
      <button><a href="#sl-1">Artes e Design</a></button>
      <button><a href="#sl-2">Ciências Exatas e Informática</a></button>
      <button><a href="#sl-3">Ciências Biológicas e da Terra</a></button>
      <button><a href="#sl-4">Ciências Sociais e Humanas</a></button>
      <button><a href="#sl-5">Comunicação e Informação</a></button>
      <button><a href="#sl-6">Saúde e Bem-Estar</a></button>
      <!--------Links-of-areas-------->
      <div class="header-links" id="sl-1">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Artes Visuais</h3>
            <a href="">Avaliação</a>
            <a href="">Curadoria</a>
            <a href="">Escultura</a>
            <a href="">Ensino</a>
            <a href="">Eventos</a>
            <a href="">Galerias de Arte</a>
            <a href="">Gravura</a>
            <a href="">Multimídia</a>
            <a href="">Pintura e Desenho</a>
            <a href="">Restauração</a>
         </div>

         <div>
            <h3>Design</h3>
            <a href="">Animação</a>
            <a href="">Desenho Industrial</a>
            <a href="">Design Digital</a>
            <a href="">Design de Embalagens</a>
            <a href="">Design Gráfico</a>
            <a href="">Design de Joias</a>
            <a href="">Gestão de Produto</a>
            <a href="">Programação Visual</a>
            <a href="">Projeto e Produto</a>
         </div>

         <div>
            <h3>Design de Games </h3>
            <a href="">Áudio</a>
            <a href="">Design de Games</a>
            <a href="">Ilustração</a>
            <a href="">Modelagem em 2D e 3D</a>
            <a href="">Programação</a>
            <a href="">Vinhetas</a>
         </div>

         <div>
            <h3>Fotografia</h3>
            <a href="">Fotojornalismo</a>
            <a href="">Estúdio</a>
            <a href="">Decoração</a>
            <a href="">Restauração e Conservação</a>
            <a href="">Institucional</a>
            <a href="">Fotografa Autoral</a>
         </div>
         <div>
            <h3>Moda</h3>
            <a href="">Consultoria</a>
            <a href="">Coordenação</a>
            <a href="">Design/Estilismo</a>
            <a href="">Fotografia</a>
            <a href="">Gerencialmente</a>
            <a href="">Modelagem</a>
            <a href="">Produção</a>
            <a href="">Negócios</a>



         </div>
         <div>
            <h3>Dança</h3>
            <a href="">Bailado</a>
            <a href="">Coreografa</a>
            <a href="">Direção</a>
            <a href="">Ensino</a>
            <a href="">Expressão Corporal</a>
            <a href="">Produção</a>
         </div>
      </div>
      <div class="header-links" id="sl-2">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Desenvolvedor <p>Front-End</p>
            </h3>
            <a href="">Plataformas</a>
            <a href="">Dispositivos Móveis</a>
            <a href="#" onclick="show_dev_web()">Websites</a>
            <a href="">Softwares</a>
         </div>
         <div>
            <h3>Desenvolvedor <p>Back-End</p>
            </h3>
            <a href="">Banco de Dados</a>
            <a href="">Segurança da Informação</a>
            <a href="">Análise de Dados</a>
            <a href="">Frameworks</a>
         </div>
         <div>
            <h3>Estatística</h3>
            <a href="">Bioestatística</a>
            <a href="">Computação</a>
            <a href="">Indústria</a>
            <a href="">Pesquisa</a>
            <a href="">Recursos Humanos</a>
         </div>
         <div>
            <h3>Química</h3>
            <a href="">Ensino</a>
            <a href="">Química Ambiental</a>
            <a href="">Gestão de Qualidade</a>
            <a href="">Química Forense</a>
            <a href="">Química de Alimentos</a>
         </div>
         <div>
            <h3>Matemática</h3>
            <a href="">Análise Numérica</a>
            <a href="">Ensino</a>
            <a href="">Modelagem</a>
            <a href="">Matemática Empresarial</a>
            <a href="">Matemática Computacional</a>
         </div>
      </div>
      <div class="header-links" id="sl-3">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Agroecologia</h3>
            <a href="">Administração</a>
            <a href="">Comércio</a>
            <a href="">Solos</a>
            <a href="">Consultoria</a>
            <a href="">Produção</a>
            <a href="">Certificação</a>
         </div>
         <div>
            <h3>Biotecnologia</h3>
            <a href="">Agronegócios</a>
            <a href="">Indústria</a>
            <a href="">Meio Ambiente</a>
            <a href="">Saúde</a>
         </div>
         <div>
            <h3>Ciências Biológicas</h3>
            <a href="">Bioinformática</a>
            <a href="">Biologia de Organismo Aquáticos</a>
            <a href="">Biologia Forense</a>
            <a href="">Microbiologia</a>
            <a href="">Zoologia</a>
            <a href="">Meio Ambiente</a>
         </div>
         <div>
            <h3>Geologia</h3>
            <a href="">Geofísica</a>
            <a href="">Geologia Ambiental</a>
            <a href="">Geologia do Petróleo</a>
            <a href="">Hidrogeologia</a>
            <a href="">Paleontologia</a>
            <a href="">Mineralogia</a>
         </div>
         <div>
            <h3>Medicina Veterinária</h3>
            <a href="">Clínica e Cirurgia de Animais de Pequeno Porte</a>
            <a href="">Centros de Pesquisa</a>
            <a href="">Indústria e Produtos para Animais</a>
            <a href="">Conservação de Espécies</a>
            <a href="">Perícia Técnica</a>
            <a href="">Saúde Pública Veterinária</a>
         </div>
      </div>
      <div class="header-links" id="sl-4">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Relações Internacionais</h3>
            <a href="">Analista Internacional</a>
            <a href="">Ensino</a>
            <a href="">Comércio Exterior</a>
            <a href="">Agências Governamentais</a>
            <a href="">Diplomacia</a>

         </div>
         <div>
            <h3>Direito</h3>
            <a href="">Arbitragem Internacional</a>
            <a href="">Direito Civil</a>
            <a href="">Direito Ambiental</a>
            <a href="">Direito do Consumidor </a>
            <a href="">Advocacia Pública</a>
            <a href="">Delegacia de Polícia</a>
            <a href="">Ministério Público</a>

         </div>
         <div>
            <h3>Pedagogia</h3>
            <a href="">Administração Escolar</a>
            <a href="">Ensino</a>
            <a href="">Coordenação Pedagógica</a>
            <a href="">Educação Especial</a>
            <a href="">Pedagogia Hospitalar</a>
            <a href="">Produção de Livros</a>
         </div>

         <div>
            <h3>Ciência do Consumo</h3>
            <a href="">Pesquisa</a>
            <a href="">Gestão</a>
            <a href="">Orientação</a>
         </div>
      </div>
      <div class="header-links" id="sl-5">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Cinema e Audiovisual</h3>
            <a href="">Captação de Som</a>
            <a href="">Roteiro</a>
            <a href="">Direção da Arte</a>
            <a href="">Fotografia</a>
            <a href="">Sonorização</a>

         </div>
         <div>
            <h3>Jornalismo</h3>
            <a href="">Comunicação Digital Multimídia</a>
            <a href="">Comunicação Empresarial</a>
            <a href="">Edição</a>
            <a href="">Fotojornalismo</a>
            <a href="">Reportagem</a>
         </div>
         <div>
            <h3>Publicidade e Propaganda</h3>
            <a href="">Atendimento</a>
            <a href="">Criação</a>
            <a href="">Gerência de Produto</a>
            <a href="">Marketing</a>
            <a href="">Mídia</a>
            <a href="">Pesquisa</a>
            <a href="">Produção de Vendas</a>
         </div>

         <div>
            <h3>Arquivologia</h3>
            <a href="">Conservação e Restauração</a>
            <a href="">Consultoria</a>
            <a href="">Documentação Eletrônica</a>
            <a href="">Gestão de Conteúdo</a>
         </div>
      </div>
      <div class="header-links" id="sl-6">
         <i i class="fi-rr-cross-small" onclick="links_close()"></i>
         <div>
            <h3>Biomedicina</h3>
            <a href="">Acupuntura</a>
            <a href="">Análise Ambiental</a>
            <a href="">Bioinformática</a>
            <a href="">Biologia Molecular</a>
            <a href="">Citologia</a>
            <a href="">Docência e Pesquisa</a>
            <a href="">Embriologia</a>
            <a href="">Saúde Pública</a>
            <a href="">Patologia</a>
         </div>
         <div>
            <h3>Educação Física</h3>
            <a href="">Condicionamento Físico</a>
            <a href="">Ensino</a>
            <a href="">Grupos Especiais</a>
            <a href="">Performance</a>
            <a href="">Recreação</a>
            <a href="">Turismo Ecológico</a>
         </div>
         <div>
            <h3>Enfermagem</h3>
            <a href="">Enfermagem Estética</a>
            <a href="">Enfermagem Forense</a>
            <a href="">Enfermagem Geral</a>
            <a href="">Enfermagem Obstétrica</a>
            <a href="">Enfermagem Offshore</a>
            <a href="">Enfermagem Pediátrica</a>
            <a href="">Gestão de Qualidade</a>
            <a href="">Pesquisa Clínica</a>
         </div>
         <div>
            <h3>Nutrição</h3>
            <a href="">Administração</a>
            <a href="">Catering</a>
            <a href="">Controle Nutricional</a>
            <a href="">Nutrição Esportiva</a>
            <a href="">Docência e Pesquisa
               <a href="">Saúde Coletiva</a>
         </div>
         <div>
            <h3>Odontologia</h3>
            <a href="">Clínica Geral</a>
            <a href="">Dentística Restauradora</a>
            <a href="">Implantodontia</a>
            <a href="">Ortodontia</a>
            <a href="">Prótese Dentária</a>
            <a href="">Radiologia</a>
            <a href="">Periodontia</a>
         </div>
      </div>
   </div>
   <section class="student-life" id="sl-default">
      <h3>Expanda seu conhecimento explorando novos assuntos no Student Life.</h3>
      <br>
      <p> Aqui você consegue visualizar os temas, os tipos de atuação e características de cada área profissional. No
         Student Life
         você será direcionado a tomar as melhores decisões para o seu futuro e de acordo com seus gostos e
         perspectivas.<br></p>


      <p style="margin:auto; text-align:center;">Escolha sua trilha acima <i class="fi fi-rr-caret-up"></i></p>
   </section>
   <section class="student-life hide" id="sl-dev-web">
      <h2> Desenvolvedor Web</h2>
      <p style="margin:auto; text-align:center;">Em qual nível você está?</p>
      <div class="progress-bar">

         <input type="radio" name="hide" id="beg">
         <input type="radio" name="hide" id="int">
         <input type="radio" name="hide" id="pro">

         <button class="circle nv1-circle" onclick="beginner()"></button>
         <div class="bar n1-bar"></div>
         <button class="circle nv2-circle" onclick="intermediate()"></button>
         <div class="bar n2-bar"></div>
         <button class="circle nv3-circle" onclick="profissional()"></button>
      </div>
      </div>

      <div class="sl-card" id="beginner">
         <img src="../src/logo/shiba/shiba_1.png" alt="">
         <div class="text">
            <h3>Iniciante</h3>
            <p>
               <li>Lógica da Programação</li>
               <li>HTML/CSS</li>
               <li>Introdução ao Python</li>
               <li>Inglês</li>

            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="intermediate">
         <img src="../src/logo/shiba/shiba_2.png" alt="">
         <div class="text">
            <h3>Desenvolvedor Intermediário</h3>
            <p>
               <li>Foque em aprender uma Linguagem e o Domínio</li>
               <li>Banco de Dados - PHP/MySQL</li>
               <li>Bibliotecas</li>
               <li>Inglês </li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
      <div class="sl-card" id="profissional">
         <img src="../src/logo/shiba/shiba_3.png" alt="">
         <div class="text">
            <h3>Programador Avançado</h3>
            <p>
               <li>Especialização em uma Linguagem</li>
               <li>Linguagens diversas</li>
               <li>Networking</li>
               <li>Ajude a Comunidade</li>
            </p>
            <a href="#"><i class="fi fi-rr-cross-small"></i></a>
         </div>
      </div>
   </section>

   <!-------Footer------->
   <footer></footer><script src="../components/footer.js"></script>
   <!-------End Footer------->

   <script src="../script/student-life.js">
   </script>
   <div class="mouse"></div>
</body>

</html>