<body>
    <div class="dark-cover" id="dark-cover"></div>
    <!-- Modal -->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header login-header">
                    <h5 class="modal-title">Inicio de Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              <div class="modal-body login-bg ">
                <div class="title-login">
                    
                    <h1>Login</h1>
                </div>
                <hr class="separate">

                  <div class="login-wrap">
                            <form action="">
                                <div class="group-input">
                                    <label for="">Username:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-user"></i></div>
                                        <div class="input-content">
                                            <input type="text" name="login-username" id="login-username" placeholder="Ingresa tu username" class="input-form">
                                        </div>             
                                    </div>        
                                </div> 

                                <div class="group-input">
                                    <label for="">Password:</label>
                                     <div class="wraper-icon-form d-flex">
                                      <div class="icon-form"><i class="fas fa-lock"></i></div>
                                        <div class="input-content">
                                            <input type="password" name="login-password" id="login-password" placeholder="Ingresa tu password" class="input-form password-indents">
                                             <span class="toggle-password"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                        </div>             
                                    </div>        
                                </div>

                                <div class="submit-button">
                                    <input type="submit" name="" class="login-button" value="Iniciar" id="send-login">
                                </div>
                        </form>

                        <div class="forget-password text-center">
                            <a href="#">¿Has olvidado tu contraseña?</a>
                            <a href="#">Registre <span class="mark-register">ahora!</span></a>
                        </div>
                  </div>
               </div>
            </div>
          </div>
        </div>

    <header>
     <div class="menu__responsive d-flex d-lg-none justify-content-between align-items-center">
        <div class="title__menu">
            <h3 class="m-0">Mu <span>Salvador</span></h3>
        </div>
        <div class="button__burger">

            <label for="menu-toggle" class="menu-icon" id="menu-icon">
                <div class="line animate1"></div>
                <div class="line animate2"></div>
                <div class="line animate3"></div> 
            </label>
        </div>
    </div> 
    <nav class="nav__bar" id="nav__bars">
        <div class="container-screen-header">
            <div class="list-menu">
                <ul>
                    <li class="active1" ><a href="<?php echo URL?>"  class="item-nav">Home</a></li> 
                    <li><a href="<?php echo URL?>download" class="item-nav">Download</a></li>
                    <li><a href="<?php echo URL?>info" class="item-nav">Info</a></li>
                    <li><a href="<?php echo URL?>Changelog" class="item-nav">Changelog</a></li>
                    <li><a href="<?php echo URL?>ranking" class="item-nav">Ranking</a></li>
                    <li><a href="<?php echo URL?>register" class="item-nav">Registro</a></li>
                    <li><a href="#" class="item-nav" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i>Login</a></li>

                </ul>   
            </div>
        </div>  
    </nav>
    <div class="content-parallax">

        <div class="header_parallax">
            <div id="particles-js"></div>
            <img src="<?php echo URL?>public/Frontend/img/background_main.jpg" class="img__background" id="img__background">
            <img src="<?php echo URL?>public/Frontend/img/thunder.png" class="effect-thunder">
            <img src="<?php echo URL?>public/Frontend/img/character_gc.png" class="img__gc" id="img__gc" alt="GunCrusher">
            <img src="<?php echo URL?>public/Frontend/img/character_sm.png" class="img__sm" id="img__sm" alt="GrandMaster">
            <img src="<?php echo URL?>public/Frontend/img/rocas.png" class="img__rocas" id="img__rocas" alt="MontañaMU" >
            <img src="<?php echo URL?>public/Frontend/img/logo.png" class="img__logo" id="img__logo" alt="LogoMuOnline">
            <img src="<?php echo URL?>public/Frontend/img/smoke.webp" class="img__smoke" id="smoke">
            <img src="<?php echo URL?>public/Frontend/img/smoke.webp" class="img__smoke second" id="smoke second">
            
            <a href="#"><img src="<?php echo URL?>public/Frontend/img/buttom_register.png" class="img__buttom" id="img__buttom" alt="Registrar Mu Online"></a>
        </div>   
    </div>  
</header>
<main>
    <div class="container-screen">   
        <div class=" main-tittle d-flex justify-content-center align-items-center mt-2 ">
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png" class="d-none d-md-block"></div>
            <div class="hora-local">
                <p class="m-0 text-center">Hora Local</p>
                <h2><span id="local__hour"><span id="set_hour">00</span> : <span id="set_minute">00</span> : <span id="set_second">00</span> </h2>
            </div>
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png" class="d-none d-md-block"></div>
        </div>

        <section class="info-server d-flex justify-content-around justify-content-lg-around flex-wrap">
            <article class="card-info box-observer fade-up mt-2" data-index="0" >
                <div class="tittle-info">
                    <h5 class="text-center m-0">DOWNLOAD</h5>
                </div>
                <hr class="box-line" style="background: #d9be9c; border-top: 3px solid #433829; height:1.5px">
                <div class="content-info d-flex" >
                    <div class="img-info d-flex justify-content-center align-items-center">
                        <img src="<?php echo URL ?>public/Frontend/img/simbol1.png">
                    </div>
                    <div class="content-text text-center">
                        <h4 class="p-0 m0">Descarga</h4>
                        <h1 class="p-0 m0">AHORA!</h1>
                        <hr class="p-0 m-0">
                        <p class="p-0 mt-2">Descarga la ultima version Mu Salvador season 6.2.</p>
                    </div>
                </div>
            </article>
            <article class="card-info box-observer fade-up mt-2" data-index="1" >
                <div class="tittle-info">
                    <h5 class="text-center m-0">ONLINE USER</h5>
                </div>
                <hr class="box-line" style="background: #d9be9c; border-top: 3px solid #433829; height:1.5px">
                <div class="content-info d-flex" >
                    <div class="img-info d-flex justify-content-center align-items-center">
                        <img src="<?php echo URL ?>public/Frontend/img/simbol2.png" class="img-2">
                    </div>
                    <div class="content-text text-center">
                        <h4 class="p-0 m0">Servidor</h4>
                        <h1 class="p-0 m0">ONLINE</h1>
                        <hr class="p-0 m-0">
                        <div class="user-bar mt-2">
                            <div class="second-bar"></div>
                        </div>
                        <p class="count-user">Cantidad de usuarios online : 100</p>
                    </div>
                </div>
            </article>
            <article class="card-info box-observer fade-up mt-2" data-index="2" >
                <div class="tittle-info">
                    <h5 class="text-center m-0">TOTAL USERS</h5>
                </div>
                <hr class="box-line" style="background: #d9be9c; border-top: 3px solid #433829; height:1.5px">
                <div class="content-info d-flex" >
                    <div class="img-info d-flex justify-content-center align-items-center">
                        <img src="<?php echo URL ?>public/Frontend/img/simbol3.png" class="img-3">
                    </div>
                    <div class="content-text text-center">
                        <h4 class="p-0 m0">480 cuentas</h4>
                        <h1 class="p-0 m0">CREADAS</h1>
                        <hr class="p-0 m-0">
                        <div class="hour-castle">
                            <p class="p-0 mt-2 count-user ">Aun no tienes tu cuenta?, crea tu cuenta haciendo click <a href="#" class="text-warning">aquí</a></p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>  s