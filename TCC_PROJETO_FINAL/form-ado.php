<html lang="pt-br">
<head>
 <meta charset="utf-8"/>
 <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <div class="menu">
            <ul class="menu-list">
                <img id="logo" src="imagens/logo.png" alt="" height="90px">
              <li><a href="">Cadastro</a>
                <ul class="sub-menu">
                    <li><a href="form-perd.php">Animal perdido</a></li>
                    <li><a href="form-ado.php">Adoção</a></li>
                  </ul></li>
                   <li><a href="adote.html">Adote</a></li>
              <li><a href="ongs.html">O.N.G.'s</a></li>
              <li><a href="index.php">Home</a></li>
            </ul>
          </div>
</header>
<main class="background-adote">
  <div class="container">
    <div class="corpo-form-cad">

      <form class="cadas" meta="POST" >
          
        <h1>Cadastre seu animal para adoção</h1>
        
        <label for="nome">Nome do Animal:</label>
        <input id="nome" type="text" maxlength="30">
        
        <label for="especie">Espécie do animal:</label>
        <select name="" id="especie">
          <option value="especie">Selecione a espécie do animal:</option>
          <option value="cachorro">Cachorro</option>
          <option value="gato">Gato</option>
          <option value="outros">Outros...</option>
        </select>
        
        <label for="raca">Raça do animal:</label>
        <input id="raca" type="text" maxlength="35">
        
        <label for="porte">Porte do animal:</label>
        <select name="" id="porte">
          <option value="porte">Selecione o porte do animal:</option>
          <option value="pequeno">Pequeno</option>
          <option value="medio">Médio</option>
          <option value="grande">Grande</option>
        </select>

        <label for="sexo">Sexo do animal:</label>
        <select name="" id="sexo">
          <option value="sexo">Selecione o sexo do animal:</option>
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>

        <label for="idade">Idade do animal:</label>
        <input type="text" id="idade" maxlength="6">
        
        <label for="pedigree">Possúi pedigree?</label>
        <select name="" id="pedigree">
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>
        
        <label for="caracfis">Características físicas do animal:</label>
        <input type="text" id="caracfis">
        
        <label for="email">E-mail para contato:</label>
        <input id="email" type="email" maxlength="40">
        
        <label for="tel">Telefone para contato:</label>
        <input id="tel" type="text" maxlength="30">
        
        <label for="foto">Foto do animal:</label>
        <input id="foto" _ngcontent-serverapp-c93 accept="image/*" type="file" class="cimg">
        
        <input type="submit" value="cadastre">
      </form>
    </div>
  </div>
</main>
<footer>
        <footer class="main_footer container2">
            
            <div class="content">
                
                <div class="colfooter">
                    
                    <h4 class="titleFooter"> A&NA</h4>
                    
                    <ul>
                    
                      <li><a href="index.php">Página Inicial</a></li>
                      <li><a href="">Fale Conosco <i class="fa-solid fa-paper-plane"></i></a></li>
                      <li><a href="(parte escrita)" >Parte Escrita do TCC</a></li>
                      
                    
                    </ul>
                
                </div><!--Col Footer 1-->        
                
                <div class="colfooter">
                   
                   <h4 class="titleFooter">Contato</h4>
             <p><i class="fa-solid fa-envelope"></i> gabrielnunesoliveira01@gmail.com</p>
             <p><i class="fa-solid fa-envelope"></i> cunha.davi503@gmail.com</p>
             <p><i class="fa-solid fa-envelope"></i> sarabento935@gmail.com </p>
             <p><i class="fa-solid fa-envelope"></i> Adotenaoabandoneifrj.com</p>
    
                
                </div><!--Col Footer 2-->
                
                <div class="colfooter">
                   
                    <h4 class="titleFooter"> Redes Sociais dos Integrantes</h4>
                    
                    <a href="https://www.instagram.com/theriscboy/" class="redesocial"><span><i class="fa-brands fa-instagram"></i> Gabriel Nunes</span></a>            
                    <a href="https://www.instagram.com/dv_barcelos/" class="redesocial"><span><i class="fa-brands fa-instagram"></i> Davi Barcelos</span></a>                    
                    <a href="https://www.instagram.com/sarinha1911/" class="redesocial"><span><i class="fa-brands fa-instagram"></i> Sara Bento</span></a>  
                
                </form>
                
                </div><!--Col Footer 3-->
                
                <div class="clear"></div>
            
            </div><!--Contant-->
            
            <div class="main_footer_copy">
                
            <p class="m-b-footer"> 2023, Trabalho de Conclusão de Curso - Instituto Federal do Rio de Janeiro - A&NA - Adote e Não Abandone</p> 
            
            </div>
        </footer>
    
    </form>
</div>

</body>
</html>