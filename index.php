<?php
  if(isset($_POST['submit'])) 
  {
      $_nome = $_POST['fullname'];
      $_telefone = $_POST['phone'];
      $_email = $_POST['emailid'];
      $_mensagem = $_POST['comments'];
      $message=
      'Full Name: '.$_nome.'<br />
      Phone:  '.$_telefone.'<br />
      Email:  '.$_email.'<br />
      Comments: '.$_mensagem.'
      ';

      require "PHPMailer-master/class.phpmailer.php"; //include phpmailer class
        
      //Enviar email para o administrador do site

      $mail = new PHPMailer();  
        
      // Set up SMTP  
      $mail->IsSMTP();                // Sets up a SMTP connection  
      $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
      $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
      $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
      $mail->Port = 465;  //Gmail SMTP port
      $mail->Encoding = '7bit';
      

      // Authentication  
      $mail->Username   = "********"; // Your full Gmail address
      $mail->Password   = "********"; // Your Gmail password
        

      // Compose
      $mail->SetFrom($_email, $_nome);
      $mail->AddReplyTo($_email, $_nome);
      $mail->Subject = "Novo Contato";      // Subject (which isn't required)  
      $mail->MsgHTML($_mensagem); 


      // Send To  
      $mail->AddAddress("*******", "DevPhfp"); // Where to send it - Recipient
      $result = $mail->Send();    // Send!

      $message = $result ? '<div class="alert alert-success" role="alert"><strong>Success!</strong>Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';

      unset($mail);



      //Enviar email para visitante do site
      $mail = new PHPMailer();  
        
      // Set up SMTP  
      $mail->IsSMTP();                // Sets up a SMTP connection  
      $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
      $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
      $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
      $mail->Port = 465;  //Gmail SMTP port
      $mail->Encoding = '7bit';
      
      // Authentication  
      $mail->Username   = "*********"; // Your full Gmail address
      $mail->Password   = "*********"; // Your Gmail password

      // Compose
      $mail->SetFrom("*******","*****");
      $mail->AddReplyTo("*****","*****f");
      $mail->Subject = "Obrigado pelo contato";      // Subject (which isn't required)  
      $mail->MsgHTML("Obrigado pelo contato, responderei em breve!"); 

      // Send To  
      $mail->AddAddress($_email, $_nome); // Where to send it - Recipient
      $result = $mail->Send(); 

      $message = $result ? '<div class="alert alert-success" role="alert"><strong>Success!</strong>Message Sent Successfully!</div>' : '<div class="alert alert-danger" role="alert"><strong>Error!</strong>There was a problem delivering the message.</div>';

      unset($mail);
      header("localhost/phfp.github.io/#contato");
  }

?>

<!DOCTYPE HTML>

<html>
<head>

  <link rel="shortcut icon" href="img/logohf.ico">

  
  <title> Paulo Figueiredo</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrkink-to-fit=no">

  <link rel="stylesheet" href="estiloModificado/css/bootstrap.css">
  <link rel="stylesheet" href="style/css/style.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

  <!-- Fontes Google-->
  <link href="https://fonts.googleapis.com/css?family=Acme|Amatic+SC|Anton|Archivo+Black|Fjalla+One|Gloria+Hallelujah|Inconsolata|Indie+Flower|Lato|Montserrat|Noto+Sans|Nunito|Open+Sans+Condensed:300|Oswald|Play|Roboto+Condensed" rel="stylesheet">
</head>


<body data-spy="scroll" data-target="#navPrincipal">

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-site12 font-open" id="navPrincipal">

    <div class="container">

      <a class="navbar-brand font-indie" href="#home">Henrique<img src="img/logo66x66.png" class="img-fluid">Figueiredo</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav nav-pills ml-auto">

          <li class="nav-item">

            <a class="nav-link text-center active" href="#home"> <i class="fa fa-home" aria-hidden="true"></i> <br>Home</a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-center" href="#sobre"> <i class="fa fa-user" aria-hidden="true"></i> <br> Sobre </a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-center" href="#habilidades"> <i class="fa fa-code" aria-hidden="true"></i> <br> Serviços </a>

          </li>

          <li class="nav-item">

            <a class="nav-link text-center" href="#contato"> <i class="fa fa-envelope" aria-hidden="true"></i> <br> Contato </a>

          </li>

        </ul>

      </div>

    </div>

  </nav> <!-- Fim Navegador -->

    <!-- Home Carrossel-->

    <div id="home" class="carousel slide font-open" data-ride="carousel">
      
    <ol class="carousel-indicators">

      <li data-target="#home" data-slide-to="0" class="active"></li>
      <li data-target="#home" data-slide-to="1"</li>
      <li data-target="#home" data-slide-to="2"</li>
      <li data-target="#home" data-slide-to="3"</li>
      <li data-target="#home" data-slide-to="4"</li>
      <li data-target="#home" data-slide-to="5"</li>

    </ol>

    <div class="carousel-inner">

      <div class="carousel-item active">

        <img src="img/1.jpg" class="img-fluid d-block mt-5">

        <div class="carousel-caption d-none d-md-block text-light">

          <h1>
            Lorem ipsum dolor sit amet
          </h1>

          <p class="lead">
            Phasellus vestibulum lorem sed risus ultricies. Vitae et leo duis ut diam quam nulla porttitor.
          </p>

        </div>

      </div>

      <div class="carousel-item">

        <img src="img/2.jpg" class="img-fluid d-block text-light mt-5">

        <div class="carousel-caption d-none d-md-block">

          <h1>
            Lobortis feugiat vivamus
          </h1>

          <p class="lead">
            Malesuada fames ac turpis egestas integer eget aliquet. Est ullamcorper eget nulla facilisi etiam dignissim diam quis.
          </p>

        </div>

      </div>

      <div class="carousel-item">

        <img src="img/3.jpg" class="img-fluid d-block text-light mt-5">

        <div class="carousel-caption d-none d-md-block">

          <h1>
            Ornare suspendisse
          </h1>

          <p class="lead">
            Nisi est sit amet facilisis magna etiam. Cras semper auctor neque vitae tempus quam.
          </p>

        </div>

      </div>

      <div class="carousel-item">

        <img src="img/4.jpg" class="img-fluid d-block text-light mt-5">

        <div class="carousel-caption d-none d-md-block">

          <h1>
            Lorem ipsum dolor sit amet
          </h1>

          <p class="lead">
            Malesuada fames ac turpis egestas integer eget aliquet.
          </p>     

        </div>

      </div>

      <div class="carousel-item">

        <img src="img/5.jpg" class="img-fluid d-block text-light mt-5">

        <div class="carousel-caption d-none d-md-block">

          <h1>
            Nibh ipsum consequat nisl vel pretium
          </h1>

          <p class="lead">
            Phasellus vestibulum lorem sed risus ultricies. Vitae et leo duis ut diam quam nulla porttitor.
          </p>

        </div>

      </div>

      <div class="carousel-item">

        <img src="img/6.jpg" class="img-fluid d-block mt-5">

        <div class="carousel-caption d-none d-md-block">

          <h1>
            Ullamcorper velit sed ullamcorper 
          </h1>

          <p class="lead">
            Vitae auctor eu augue ut lectus arcu bibendum. Ac tincidunt vitae semper quis lectus nulla.
          </p>

        </div>

      </div>

    </div>

    <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">

      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Anterior</span>

    </a>

    <a class="carousel-control-next" href="#home" role="button" data-slide="next">

      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Próximo</span>

    </a>

  </div>

  <section class="bg-site10 text-site12 mt-0 font-open" id="sobre">

      <div class="container">

        <div class="row">

          <div class="col-12 my-5 text-center">

            <h1 class="display-3">

              <i class="fa fa-user text-site12" aria-hidden="true"></i> Sobre

             </h1>

          </div>     

        </div>


        <div class="row">

          <div class="col-lg-4 ml-auto">

            <h3 class="display-5"> Ptateoluptate </h3>

            <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>

          </div>

          <div class="col-lg-4 mr-auto">

            <h3 class="display-5"> Ptateoluptate </h3>

            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>

          </div>

          <div class="col-lg-4 mr-auto mb-5">

            <h3 class="display-5"> Ptateoluptate </h3>

            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>

          </div>

        </div>

      </div>

  </section>



  <section class="bg-site11 mt-0 font-open" id="habilidades">

  <div class="container">

    <div class="row text-site12">

      <div class="col-12 text-center my-5">

        <h1 class="display-3">
          <i class="fa fa-code text-site12" aria-hidden="true"></i> Serviços
        </h1>

      </div>

    </div>

<!-- Cards -->

    <div class="row justify-content-sm-center">

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5 bg bg-site12">
        
          <img class="card-img-top" src="img/6.jpg">

          <div class="card-body">

            <h4 class="card-tittle">Lorem ipsum</h4>

            <h6 class="card-subtitle mb-2 text-muted">Ut enim</h6>

            <p class="card-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>

            <a href="#" class="card-link">Erat</a>

            <a href="#" class="card-link">Ante in</a>

          </div> 

        </div>

      </div>

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5 bg-site12">

          <img class="card-img-top" src="img/2.jpg">

          <div class="card-body">

            <h4 class="card-tittle">Lorem ipsum</h4>

            <h6 class="card-subtitle mb-2 text-muted">Ut enim</h6>

              <p class="card-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>

              <a href="#" class="card-link">Erat</a>

              <a href="#" class="card-link">Ante in</a>

          </div>   

        </div>  

      </div>

      <div class="col-sm-6 col-md-4">

        <div class="card mb-5 bg-site12">

          <img class="card-img-top" src="img/4.jpg">

          <div class="card-body">

            <h4 class="card-tittle">Lorem ipsum</h4>

            <h6 class="card-subtitle mb-2 text-muted">Ut enim</h6>

              <p class="card-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>

              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Erat</a>

              <a href="#" class="card-link">Ante in</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="text-site10 bg-site12 font-open" id="contato">

  <div class="container">

    <div class="row text-center">

      <div class="col-12 mt-5">

        <h3 class="display-3"> <i class="fa fa-envelope" aria-hidden="true"></i> Contato </h3>

      </div>

    </div>

    <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="contactform">
              <div class="panel panel-default">
                <div class="panel-body">
                  <form name="form1" id="form1" action="" method="post">
                      <fieldset>
                        <input type="text" class="form-control" aut name="fullname" placeholder="Nome Completo" required="required" /> <br/>
                        <input type="text" class="form-control" name="phone" placeholder="Telefone" required="required" /> <br/>
                        <input type="email" class="form-control" name="emailid" placeholder="Email" required="required" /> <br/>
                        <textarea rows="4" class="form-control" cols="20" name="comments" placeholder="Deixe sua mensagem"></textarea> <br/>
                        <input type="submit" class="btn btn-site11 btn-xl"name="submit" value="Enviar" />
                      </fieldset>
                  </form>
                <p><?php if(!empty($message)) echo $message; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>    
  </div>
</section>

</body>

<footer class="footer text-site12 text-center bg-site13 font-open">

  <div class="container">

    <div class="row">

      <div class="col-lg-4 mr-auto my-5">
        <h3 class="display-5">Endereço</h3>
        <p class="lead mb-0">Rua Professora Maria Pereira, 242 <br>
        Bela Vista, Araçuai/MG </p>
      </div>

      <div class="col-lg-4 mr-auto my-5">
        <h3 class="display-5"> Social </h3>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-site12 btn-social text-center rounded-circle" href="https://www.facebook.com/paullohfp">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-site12 btn-social text-center rounded-circle" href="https://plus.google.com/+PauloHenriquef">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-site12 btn-social text-center rounded-circle" href="https://twitter.com/paulohprates">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-site12 btn-social text-center rounded-circle" href="https://www.linkedin.com/in/pauloprates/">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-site12 btn-social text-center rounded-circle" href="https://github.com/phfp">
                  <i class="fa fa-fw fa-github"></i>
                </a>
              </li>
            </ul>
      </div>

      <div class="col-lg-4 mr-auto my-5">

        <h3 class="display-5"> Currículo </h3>

        <a class="btn btn-outline-site12 btn-social text-center rounded-circle" id="botao-curriculo" href="#" data-toggle="modal" data-target="#curriculo"> <i class="fa fa-address-card" aria-hidden="true"></i> </a>

      </div>      

    </div>

  </div>

</footer>

<div class="copyright py-4 text-center bg-site11 text-site12">
      <div class="container">
        <small>Copyright &copy; www.paulofigueiredo.com.br 2017</small>
      </div>
    </div>

  <div class="modal fade" id="curriculo" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content bg-site12">
        <div class="modal-header">
          <h4 class="modal-tittle text-muted"> Currículo </h4>
          <button type="button" class="close" data-dismiss="modal">
            <span >&times;</span>
          </button>
        </div>    

        <div class="modal-body" id="corpo-curriculo">

          <div class="row text-center mb-5">

            <div class="col-12">

              <h3> <strong> Paulo Henrique Figueiredo Prates </strong> </h3>

            </div>
          </div>

        <div class="row">
            
            <div class="col-12 text-justify">

              <h5> <strong> Dados Pessoais </strong> </h5>

              <p class="mb-0">Telefone: (33)99909-1569 / (33) 3731-4001</p>
              <p class="mb-0">E-mail: paulohfprates@gmail.com</p>
              <p class="mb-4">Endereço: Rua Professora Maria Pereira, 242, Bairro Bela Vista, Araçuaí-MG</p>


              <h5 class="mb-1"> <strong> Perfil Profissional </strong> </h5>

              <p class="mb-4">Bacharel em Sistemas de Informação, atualmente residente em Araçuaí-MG, com disponibilidade de mudança de residência para outra cidade/estado. Possui três anos de experiência como auxiliar administrativo.</p>

              <h5 class="mb-1"> <strong> Objetivo </strong> </h5>

              <p class="mb-4">Busco oportunidade para atuar na área de desenvolvimento de software para que eu possa desenvolver e ampliar meus conhecimentos.</p>

              <h5 class="mb-1"> <strong> Formação Acadêmica </strong> </h5>

              <p class="mb-4">Graduação em Sistemas de Informação pela Universidade Federal dos Vales do Jequitinhonha e Mucuri - UFVJM, em Diamantina-MG. Conclusão em Abril de 2017.</p>

              <h5 class="mb-1"> <strong> Histórico Profissional </strong> </h5>

              <p class="mb-0">EMPRESA: Copasa Serviços De Saneamento Integrado Do Norte E Nordeste De Minas Gerais.</p>
              <p class="mb-0">PERÍODO: 27/09/2010 a 03/02/2014</p>
              <p class="mb-4">ATIVIDADES: Atender e recepcionar clientes internos e externos, levantar, preparar e tabular informações, emitir, digitar e redigir documentos, formulários e correspondências diversas, receber, conferir e distribuir documentos, efetuar lançamentos de dados e informações, preparar, emitir, baixar e atualizar documentos e informações e executar consistência de dados.</p>

              <h5 class="mb-1"> <strong> Idiomas </strong> </h5>

              <p class="mb-4">Inglês Intermediário.</p>

              <h5 class="mb-1"> <strong> Conhecimentos </strong> </h5>

              <p class="mb-0">C++, JAVA, PHP, SQL, MySQL e  HTML.</p>

            </div>
          </div>

        </div>

        <div class="modal-footer">

          <div class="container text-center">
         
            <a class="btn btn-site14" href="curriculo.pdf" download="Currículo_Paulo_Figueiredo"> Download </a>

            <button type="button" class="btn btn-site13" onclick="imprimeCurriculo()">Imprimir</button>

            <button type="button" class="btn btn-site11" data-dismiss="modal">Fechar</button>

            </div>       

        </div>

      </div>
    </div>
  </div>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/meuSite.js"></script>

</html>