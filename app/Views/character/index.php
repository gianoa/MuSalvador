<?php require __DIR__.'/../layouts/head.php'; ?>

<?php  require __DIR__.'/../layouts/header.php'; ?>

<hr class="separate">

<section class="section-character-1">
	<div class="container-screen">
		<div class=" main-tittle d-flex justify-content-center align-items-center">
			<div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png"></div>
			<div class="tittle-rank">
				<h2 class="bg-clip text-rank-title">PERSONAJE</h2>
			</div>
			<div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png"></div>
		</div>
		<div class="divider mt-4"><img src="<?php echo URL ?>public/Frontend/img/divider_medium.svg"></div>

		<div class="content-wraper-character mt-5">
			<aside class="info-character-1">
				<div class="img-character-main d-flex justify-content-center mt-2">
					<img src="<?php echo URL?>public/Frontend/img/characters/tumb-bk.png" alt="">
				</div>
				<div class="content-level">
					<div class="lvl-text text-center mt-2">LV.</div>
					<div class="lvl-character text-center">400</div>
					<h2 class="nick-character mt-2">xRamzes</h2>
					<div class="pj-info mt-3">BLADE KNIGHT</div>
					<div class="date-character mt-3">Creado el: <span>06/12/24</span></div>
					<button type="button" class="info-status">Offline</button>
				</div>
				
				<div class="title-owner"><h3>OWNER DETAILS</h3></div>
				
				
				<div class="border-ornament mt-4"></div>
				<div class="info-avatar-onwer">PROFILE IMAGE</div>
				<div class="border-ornament"></div>
				
				<div class="img-character-owner d-flex justify-content-center">
					<img src="<?php echo URL?>public/Frontend/img/boy.jpg" alt="">
				</div>
				<div class="pj-info mt-3">DESCRIPCION</div>
				<div class="description-user">
					<p>Lorem ipsum dolor, sit amet consectetur neque voluptates fugiat natus quos autem ullam commodi, voluptatibus deserunt totam..</p>
				</div>
			</aside>
			<article class="info-character-2">
				<table class="character-info-pj">
					<thead>
						 <th colspan="2">CHARACTER INFORMATION</th>
					</thead>
						<tbody>
							<tr>
								<td>Reset:</td>
								<td>266</td>
							</tr>
							<tr>
								<td>Master Level:</td>
								<td>100</td>
							</tr>
							<tr>
								<td>Master Reset:</td>
								<td>3</td>
							</tr>
							<tr>
								<td>Nivel de PK:</td>
								<td>Commoner</td>
							</tr>
							<tr>
								<td>Location:</td>
								<td>Noria</td>
							</tr>
							<tr>
								<td>Country:</td>
								<td>Perú</td>
							</tr>		

						</tbody>			
				</table>
				<table class="character-info-pj account-info">
					<thead>
						 <th colspan="2">ACCOUNT INFORMATION</th>
					</thead>
						<tbody>
							<tr>
								<td>Guild:</td>
								<td>R2</td>
							</tr>
							<tr>
								<td>Guild Master:</td>
								<td>iDon2y</td>
							</tr>
							<tr>
								<td>Menbers Guild:</td>
								<td>14</td>
							</tr>
							<tr>
								<td>Time Online:</td>
								<td>325 Dia(s), 2 Hora(s), 18 Minuto(s)</td>
							</tr>
							<tr>
								<td>Last Login:</td>
								<td>29/01/2025, 22:28</td>
							</tr>			
						</tbody>			
				</table>
			</article>
		</div>




	</div>

</section>




<?php require __DIR__.'/../layouts/footer.php'; ?>

</main>
<!--  -->

<?php require __DIR__.'/../layouts/script.php'; ?>

</body>
</html> 