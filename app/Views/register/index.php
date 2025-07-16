<?php require __DIR__.'/../layouts/head.php'; ?>

<?php  require __DIR__.'/../layouts/header.php'; ?>

<hr class="separate">

    <section class="content-wraper-register">
        <div class="content-register">
               <div class=" main-tittle d-flex justify-content-center align-items-center">
                    <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png"></div>
                    <div class="tittle-rank">
                        <h2 class="bg-clip">REGISTRO</h2>
                    </div>
                    <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png"></div>
                </div>
                <div class="divider mt-4"><img src="<?php echo URL ?>public/Frontend/img/divider_medium.svg"></div>  

                <div class="container-screen">
                      <div class="register-form ">
                            <form action="">
                                <div class="group-input">
                                    <label for="">Username:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-user"></i></div>
                                        <div class="input-content">
                                            <input type="text" name="username" id="username" placeholder="Ingresa el username" class="input-form">
                                             <p><small>Debes ingresar un id de un máximo de 4 - 15 dígitos.</small></p>
                                        </div>             
                                    </div>        
                                </div> 

                                <div class="group-input">
                                    <label for="">Password:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-lock"></i></div>
                                        <div class="input-content">
                                            <input type="password" name="password" id="password" placeholder="Ingresa un password" class="input-form password-indents">
                                            <span class="toggle-password" ><i class="fa fa-eye" aria-hidden="true"></i></span>
                                             <p><small> Una contraseña con letras o números de un máximo de 4 - 15 dígitos</small></p>
                                        </div>             
                                    </div>        
                                </div>

                                  <div class="group-input">
                                    <label for="">Password Repeat:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-lock"></i></div>
                                        <div class="input-content">
                                            <input type="password" name="password-repeat" id="password-repeat" placeholder="Repite el password" class="input-form">
                                             <p><small> Escribe la contraseña nuevamente</small></p>
                                        </div>             
                                    </div>        
                                </div> 

                                 <div class="group-input">
                                    <label for="">Email:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-envelope"></i></div>
                                        <div class="input-content">
                                            <input type="email" name="email" id="email" placeholder="Ingresa una cuenta de email" class="input-form">
                                             <p><small> Ingresa un cuenta de email válido</small></p>
                                        </div>             
                                    </div>        
                                 </div>   
                                
                                <div class="group-input-check d-flex not-gap">
                                    <label class="check"> 
                                        <input type="checkbox" id="terms" value="checked" class="checked" />
                                                <span></span>     
                                    </label>
                                    <div class="term-service">
                                        <p class="m-0">Al registrarse usted acepta nuestros <br>
                                            <a href="#">Términos de Servicios.</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="submit-button">
                                    <input type="submit" name="" class="register-button" value="Register" id="send-register">
                                </div>

                            </form>
                      </div>
            </div>
              
        </div>

    </section>

<?php require __DIR__.'/../layouts/footer.php'; ?>

</main>
<!--  -->

<?php require __DIR__.'/../layouts/script.php'; ?>
<script>
</script>

</body>
</html>