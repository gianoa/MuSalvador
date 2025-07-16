<?php require __DIR__.'/../layouts/head.php'; ?>

<?php  require __DIR__.'/../layouts/header.php'; ?>

<hr class="separate">

<section class="section-login">
	<div class="container-screen">
		 <div class=" main-tittle d-flex justify-content-center align-items-center">
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png"></div>
            <div class="tittle-rank">
                <h2 class="bg-clip text-rank-title">USER PANEL</h2>
            </div>
            <div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png"></div>
        </div>
        <div class="divider mt-4"><img src="<?php echo URL ?>public/Frontend/img/divider_medium.svg"></div>

		<div class="wraper-content-login">
			<article class="panel-events">
				<div class="info-data-login"> 
					<div class="avatar-user">
						<img src="<?php echo URL ?>public/Frontend/img/avatar/avatar1.jpg" alt="avatar">
						<button class="btn btn-warning btn-sm mt-2">Change Avatar</button>
					</div>
					<div class="title-config">
						<p>Status:</p>
						<p>Username:</p>
						<p>Password:</p>
						<p>Email Address:</p>
					</div>
					<div class="data-config">
						<p>Online</p>
						<p>Mark2</p>
						<p>********(<a href="#">Change</a>)</p>
						<p>markss_143@hotmail.com (<a href="#">Change</a>)</p>

					</div>

					<div class="user-description">
						<form action="" class="">
							<textarea placeholder="Una descripcion para tu perfil"></textarea>
							<input type="submit" name="" value="save changes" class="btn-sm">
						</form>
					</div>
				</div>

			</article>
			<aside class="panel-control">
				<ul class="info-user-data">
					<li>USER BALANCE</li>
					<li><div class="item-title-user">Zen:</div><div class="item-result-user">1,3646,11526</div></li>
					<li><div class="item-title-user">Wcoin:</div><div class="item-result-user">3,0000</div></li>
					<li><div class="item-title-user">GlobinP:</div><div class="item-result-user">2,800</div></li>
				</ul>
				<ul class="info-user-data">
					<li>ACCESS LOG</li>
					<li><div class="item-title-user">IP Direction:</div><div class="item-result-user">192.168.165.156</div></li>
					<li><div class="item-title-user">Signup Date:</div><div class="item-result-user">25/05/25</div></li>
					<li><div class="item-title-user">Last Login:</div><div class="item-result-user date-last-login">29/01/2025, 22:28</div></li>
				</ul>
				<ul class="info-user-data">
					<li>USERINFO</li>
					<li><a href="#">My Characters</a></li>
					<li><a href="#">Unstick Character</a></li>
					<li><a href="#">Clear PK</a></li>
				</ul>
			</aside>
		</div>
	</div>


</section>

<?php require __DIR__.'/../layouts/footer.php'; ?>

</main>
<!--  -->

<?php require __DIR__.'/../layouts/script.php'; ?>

</body>
</html>