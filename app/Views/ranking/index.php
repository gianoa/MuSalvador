<?php require __DIR__.'/../layouts/head.php'; ?>

<?php  require __DIR__.'/../layouts/header.php'; ?>

<hr class="separate">

<section class="ranking-page ">
    <div class="container-screen">
            <!-- <div class="tittle-section-page">
                <p class="m-0 p-0">Lista de rankings</p>
                <h1>RANKING</h1>
            </div> -->
        <div class=" main-tittle d-flex justify-content-center align-items-center">
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png"></div>
            <div class="tittle-rank">
                <h2 class="bg-clip text-rank-title">RANKING</h2>
            </div>
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png"></div>
        </div>
        <div class="divider mt-4"><img src="<?php echo URL ?>public/Frontend/img/divider_medium.svg"></div>

        <article class="wraper-ranks-contents d-lg-flex flex-wrap ">
            
            <aside class="aside-rank">
                <ul class="aside-nav-rank">
                    <li class="content-item-main" ><button class="aside-main-title " id="btn-personajes">PERSONAJES <i class="fa fa-plus icon-toggle" aria-hidden="true"></i></button>
                        <ul class="aside-main-sublist">
                            <li class="aside-main-item active-select-item"> <a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Top Level</a> </li>
                            <li class="aside-main-item"><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Top Reset</a></li>
                            <li class="aside-main-item"><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Top Master Reset</a></li>
                            <li class="aside-main-item"><a href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Top Killers</a></li>
                        </ul>
                    </li>
                    <li class="content-item-main"><button class="aside-main-title" id="btn-eventos">EVENTOS <i class="fa fa-plus icon-toggle" aria-hidden="true"></i></button>
                        <ul class="aside-main-sublist">
                            <li class="aside-main-item"><a href="#"><i class="fa fa-flag" aria-hidden="true"></i>Blood Castle</a></li>
                            <li class="aside-main-item"><a href="#"><i class="fa fa-flag" aria-hidden="true"></i>Devil Square</a></li>
                            <li class="aside-main-item"><a href="#"><i class="fa fa-flag" aria-hidden="true"></i>Chaos Castle</a></li>
                        </ul>
                    </li>
                      <li class="content-item-main"><button class="aside-main-title" id="btn-eventos">CLANES <i class="fa fa-plus icon-toggle" aria-hidden="true"></i></button>
                        <ul class="aside-main-sublist">
                            <li class="aside-main-item"><a href="#"><i class="fa fa-shield" aria-hidden="true"></i>TOP-GUILDS</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </aside>
          <article class="wraper-ranks">
                   <div class="wraper-date-rank">
                       <div class="button-date-rank">
                            <a href="#" class="item-rank active-date-rank">Total</a>
                            <a href="#" class="item-rank">Diario</a>
                            <a href="#" class="item-rank">Semanal</a>
                            <a href="#" class="item-rank">Mensual</a>
                       </div>
                       <div class="filter-rank d-flex align-items-center ">
                           <div class="info-rank mb-2 mt-2">
                               <h3 class="p-0 m-0">TOP LEVEL</h3>
                           </div>
                           <div class="input-rank">
                               <form action="" id="select-rank">
                                    <select name="select-pj" class="custom-selects" id="select-pj">
                                        <option value="Select">Filtrar por Personaje</option>
                                        <option value="0">Dark Wizard</option>
                                        <option value="1">Dark Knight</option>
                                        <option value="2">Summoner</option>
                                        <option value="3">Elf</option>
                                    </select>
                               </form>
                           </div>
                       </div>
                   </div>
                 
               <div class="wraper-table-rank" >
                       <table class="table-rank">
                           <thead>
                            <tr>
                               <th>Nro</th>
                               <th>Clase</th>
                               <th>Pais</th>
                               <th>Personaje</th>
                               <th>Nivel <span class="ml-rank">ML</span></th>
                               <th>Reset</th>
                               <th>Location</th>
                            </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400 <span class="ml-rank ml-rank-lvl">800</span></td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-bk.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>1400 <span class="ml-rank ml-rank-lvl">800</span></td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-rg.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>42 <span class="ml-rank ml-rank-lvl">1</span></td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>12 <span class="ml-rank ml-rank-lvl">0</span></td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>12 <span class="ml-rank ml-rank-lvl">0</span></td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                               
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                               
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                               
                                 <tr>
                                   <td>1</td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/characters/tumb-sm.png" alt="soulMaster" width="35"></td>
                                   <td><img src="<?php echo URL ?>public/Frontend/img/flags/pe.gif"></td>
                                   <td>Stronger</td>
                                   <td>400</td>
                                   <td>1</td>
                                   <td>Devias</td>
                               </tr>
                               
                               


                           </tbody>
                       </table>
            </div>      

            </article>
          
        </article>
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
