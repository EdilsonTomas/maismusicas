<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="" lang="pt-BR" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec"  xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
  <title>Música da Hora</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="pt-BR"/>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

   <!-- Bootstrap core CSS -->
   <link href="http://www.musicadahora.com/css/bootstrap.css" rel="stylesheet">
   <link href="http://www.musicadahora.com/css/app.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="http://www.musicadahora.com/css/fonts.css">

   <!-- Custom styles for this template -->
   <link href="http://www.musicadahora.com/css/cover.css" rel="stylesheet">
  <!--[if lt IE 9]> <script src="http://www.musicadahora.com/js/ie/html5shiv.js"></script> <script src="http://www.musicadahora.com/js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->


<style>
body:before {
  content: "";
  position: absolute;
  height: 20%;
  width: 20%;
  background: url('images/msq_bg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
  display: block;
  -webkit-transform: scale(5);
  -webkit-transform-origin: top left;
  -webkit-filter: blur(0px);
  //opacity: 0.4;
}

:before, :after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
</style>



</head>

<body><section id="content" class="wrapper-md animated fadeInUp flipInY">
  <div class="container aside-xl content-md bg-white r-3x b-b" style="margin-top: 160px"> 
    <section class="m-b-lg">
	<center>
  <div id="aj"></div></center>
	 <form class="form-signin" name="FormLogin" onsubmit="post_this(this,'http://www.musicadahora.com/got.php?ct=lgtsd','aj','');return false;" method="post">
      <header class="wrapper text-center text-dark"> <strong>Seja bem-vindo novamente!</strong> </header>

        <div class="list-group">
          <div class="list-group-item">
            <input type="email" name="email" placeholder="Email" class="form-control no-border">
          </div>
          <div class="list-group-item">
            <input type="password" name="senha" placeholder="Senha" class="form-control no-border">
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-danger btn-block">Entrar!</button>
				        <br/>
        <div class="line line-dashed"></div>
        <p class="text-muted text-center"><small>Não tem uma conta?</small></p>
        <center><a href="https://www.facebook.com/dialog/oauth?client_id=728472007261374&redirect_uri=http://www.musicadahora.com/Login.php&scope=public_profile,email,user_friends"><img src="http://www.musicadahora.com/images/logarViaFacebook.png" alt="Login via Facebook"></a></center>
        <br/>
        <a href="http://www.musicadahora.com/cadastro/" class="btn btn-lg btn-default btn-block text-white">Criar uma conta!</a>
      </form>
	  
    </section>
  </div>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://www.musicadahora.com/js/bootstrap.min.js"></script>
    <script src="http://www.musicadahora.com/js/app.js"></script>
    <script src="http://www.musicadahora.com/js/docs.min.js"></script>
</body>
</html>