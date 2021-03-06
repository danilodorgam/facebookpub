<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php echo website_config('nome_site');?> | <?php echo $this->lang->line('login');?></title>
      <meta name="description" content="<?php echo website_config('descricao_site');?>">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <!-- core plugins -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bower_components/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.css">
      <!-- core plugins --><!-- plugins for the current page -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.css">
      <!-- / plugins for the current page --><!-- site-wide stylesheets -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.css">
      <!-- / site-wide stylesheets --><!-- styles for the current page -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/examples/css/pages/login.css">
      <!-- / styles for the current page -->
      <style>
      	@import 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,600';
      </style>
   </head>
   <body class="simple-page page-login">
      <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <header class="login-page-header d-flex">
         <div class="mr-auto">
            <a href="<?php echo base_url('login');?>" class="d-flex align-items-center">
               <svg class="flip-y mr-2" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 32 32">
                  <path fill="#ffffff" d="M30.063 2.585c-.253-1.023-.758-1.754-1.5-2.17-3.28-1.842-9.02 3.577-11.05 6.88-.65 1.06-1.275 2.358-1.792 3.718-1.486-.21-2.95-.098-4.366.337C6.954 12.694 4 16.975 4 22v2c0 4.337 3.663 8 8 8h1.98c5.31 0 9.803-3.664 10.682-8.714.33-1.89.142-3.807-.54-5.585 1.26-1.2 2.43-2.587 3.268-3.886 1.646-2.554 3.46-8.062 2.673-11.23zM12 23c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2z"/>
                  <path data-color="color-2" fill="#39527b" d="M10.77 9.437c1.14-.35 2.32-.527 3.506-.527h.148c.424-.954.888-1.846 1.37-2.633-1.106-2.466-2.56-4.72-4.01-5.71-.7-.477-1.387-.656-2.04-.528-.442.086-1.08.37-1.594 1.23C7 3.19 6.89 7.465 7.457 11.06c1-.7 2.108-1.255 3.312-1.623z"/>
               </svg>
               <h5 class="text-white m-0"><?php echo website_config('nome_site');?></h5>
            </a>
         </div>
         <div id="form-switch-btns" class="btn-group switch-btns">
           <?php
           if(website_config('permitir_cadastros') == 1){
           ?>
	         <button data-target="#signup-form-wrap" class="btn" <?php echo (isset($messageCadastrar)) ? 'disabled' : '';?>><?php echo $this->lang->line('btn_cadastrar_top');?></button> 
	         <?php
           }
           ?>
           <button data-target="#signin-form-wrap" class="btn" <?php echo (!isset($messageCadastrar)) ? 'disabled' : '';?>><?php echo $this->lang->line('btn_entrar_top');?></button>
         </div>
      </header>
      <!-- /.login-page-header -->
      <div class="login-page-wrap">
         <div class="side first-side">
            <div class="side-content text-center">
               <img class="mb-5" src="<?php echo base_url();?>assets/global/images/lightbulb.png" alt="">
               <div id="login-page-slider" data-plugin="owlCarousel">
                  <div class="item">
                     <h4 class="mb-3"><?php echo $this->lang->line('titulo_rand_1');?></h4>
                     <p><?php echo $this->lang->line('texto_rand_1');?></p>
                  </div>
                  <div class="item">
                     <h4 class="mb-3"><?php echo $this->lang->line('titulo_rand_2');?></h4>
                     <p><?php echo $this->lang->line('texto_rand_2');?></p>
                  </div>
               </div>
               <!-- /#login-page-slider -->
            </div>
         </div>
         <!-- /.first-side -->
         <div class="side second-side">
            <div class="side-content">
               <div id="signin-form-wrap" class="form-wrap <?php echo (!isset($messageCadastrar)) ? 'show' : '';?>">
                  <h4 class="my-5 font-weight-light text-uppercase"><?php echo $this->lang->line('titulo_login');?></h4>
                  <form id="signin-form" class="form" action="<?php echo base_url('login');?>" method="post">

                  	 <?php if(isset($messageLogin)) echo $messageLogin; ?>

                     <div class="form-group">
                     	<input type="text" name="login" class="form-control" placeholder="<?php echo $this->lang->line('campo_login');?>" required>
                     </div>
                     <div class="form-group">
                     	<input type="password" name="senha" class="form-control" placeholder="<?php echo $this->lang->line('campo_senha');?>" required>
                     </div>
                     <p class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#esquecisenha" class="white text-underline hover-white">Esqueci minha senha</a></p>
                     <input type="submit" name="submitLogin" class="btn btn-outline-success py-2 mt-5" style="width: 200px" value="<?php echo $this->lang->line('btn_login');?>">
                  </form>
               </div>
               <!-- /#signin-form-wrap -->
               <?php
               if(website_config('permitir_cadastros') == 1){
               ?>
               <div id="signup-form-wrap" class="form-wrap <?php echo (isset($messageCadastrar)) ? 'show' : '';?>">
                  <h4 class="my-5 font-weight-light text-uppercase"><?php echo $this->lang->line('titulo_cadastro');?></h4>
                  <form id="signup-form" class="form" action="" method="post">

                  	 <?php if(isset($messageCadastrar)) echo $messageCadastrar; ?>

                     <div class="form-group">
                     	<input type="text" name="nome" class="form-control" placeholder="<?php echo $this->lang->line('campo_cadastrar_nome');?>" required>
                     </div>
                     <div class="form-group">
                     	<input type="email" name="email" class="form-control" placeholder="<?php echo $this->lang->line('campo_cadastrar_email');?>" required>
                     </div>
                     <div class="form-group">
                     	<input type="text" name="login" class="form-control" placeholder="<?php echo $this->lang->line('campo_login');?>" required>
                     </div>
                     <div class="form-group">
                     	<input type="password" name="senha" class="form-control" placeholder="<?php echo $this->lang->line('campo_senha');?>" required>
                     </div>
                     <input type="submit" name="submitCadastrar" class="btn btn-outline-success py-2 mt-5" style="width: 200px" value="<?php echo $this->lang->line('btn_cadastrar');?>">
                  </form>
               </div>
               <?php
               }
               ?>
               <!-- /#signin-form-wrap -->
            </div>
            <!-- /.side-content -->
         </div>
         <!-- /.second-side -->
      </div>
      <!-- /.login-page-wrap -->
      <!-- core plugins -->

      <div class="modal fade" id="esquecisenha" tabindex="-1" role="dialog" aria-labelledby="image-gallery-modal" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
           <div class="modal-content">
              <div class="modal-body p-5">
                 <h4 class="text-center qp-color"><?php echo $this->lang->line('esqueci_minha_senha');?></h4>
                 <br />

                 <div class="" id="msg-return"></div>

                 <p class="qp-color"><?php echo $this->lang->line('esqueci_minha_senha_texto');?></p>

                 <div class="form-group">
                     <label class="qp-color"><?php echo $this->lang->line('email_cadastro');?></label>
                     <input type="text" class="form-control" name="emailRecuperarSenha">
                 </div>

                 <input type="button" id="recoverPasswordBtn" class="btn btn-success" value="<?php echo $this->lang->line('recuperar_senha_btn');?>" />


              </div>
              <!-- /.modal-body -->
           </div>
           <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->
      
      <script>
         var baseURL = '<?php echo base_url();?>';
      </script>
      <script src="<?php echo base_url();?>assets/vendor/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/vendor/bower_components/tether/dist/js/tether.min.js"></script>
      <script src="<?php echo base_url();?>assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

      <!-- plugins for the current page -->
      <script src="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.min.js"></script>
      <!-- / plugins for the current page -->

      <!-- scripts for the current page -->
      <script src="<?php echo base_url();?>assets/examples/js/pages/login.js"></script>
      <script src="<?php echo base_url();?>assets/js/pages/recoverpassword.js"></script>
      <!-- / scripts for the current page-->

      <script>
      let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;

      if(!isMobile) {
        let login_firefox = ($('body').width()/2)-48;
        $(".login-page-wrap .side-content").css('width', login_firefox);
      }
      </script>
   </body>
</html>