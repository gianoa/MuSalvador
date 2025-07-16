<?php require __DIR__.'/../layouts/head.php'; ?>

<?php  require __DIR__.'/../layouts/header.php'; ?>

<hr class="separate">


<section class="section-wraper-pages">
	<div class="container-screen">
		<div class=" main-tittle d-flex justify-content-center align-items-center">
			<div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-right.png"></div>
			<div class="tittle-rank">
				<h2 class="bg-clip">DONWLOAD</h2>
			</div>
			<div class="line-separators"><img src="<?php echo URL ?>public/Frontend/img/separator-left.png"></div>
		</div>
		<div class="divider mt-4"><img src="<?php echo URL ?>public/Frontend/img/divider_medium.svg"></div>  

		<article class="table-download">
			<table class="data-table ">
				<thead>
					<tr>
						<th>Tipo</th>
						<th>Servidores</th>
						<th>Detalles</th>
						<th>Tamaño</th>
						<th>Descarga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger  p-1">INSTALLER</kbd></td>
						<td data-label="Servidor">Mega</td>
						<td data-label="Detalles">Cliente Full</td>
						<td data-label="Tamaño">1.5GB</td>
						<td data-label="Descarga"><a href="#"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger p-1">INSTALLER</kbd></td>
						<td data-label="Servidor">Mediafire</td>
						<td data-label="Detalles">Cliente Full</td>
						<td data-label="Tamaño">1.5GB</td>
						<td data-label="Descarga"><a href="#"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger  p-1">INSTALLER</kbd></td>
						<td data-label="Servidor">Google Drive</td>
						<td data-label="Detalles">Cliente Full</td>
						<td data-label="Tamaño">1.5GB</td>
						<td data-label="Descarga"><a href="#"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
				</tbody>
			</table>

			<h2>Componentes del Sistema</h2>

			<table class="data-table ">
				<thead>
					<tr>
						<th>Tipo</th>
						<th>Detalles</th>
						<th>Descarga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger p-1">INSTALLER</kbd></td>
						<td data-label="Detalles">Microsoft Visual C++ x32</td>
						<td data-label="Descarga"><a href="#"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger p-1">INSTALLER</kbd></td>
						<td data-label="Detalles">Microsoft Visual C++ x64</td>
						<td data-label="Descarga"><a href="#"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
					<tr>
						<td data-label="Tipo"><kbd class="bg-danger  p-1">INSTALLER</kbd></td>
						<td data-label="Detalles">Net Framework 4.8</td>
						<td data-label="Descarga"><a href="https://go.microsoft.com/fwlink/?LinkId=2085155"><i class="fas fa-download"></i> Descarga Directa</a></td>
					</tr>
				</tbody>
			</table>

			<h2>Requisitos del Sistema</h2>

			<table class="data-table ">
				<thead>
					<tr>
						<th>PC</th>
						<th>Requisitos Minimos</th>
						<th>Requisitos Recomendados</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-label="PC">Procesador</td>
						<td data-label="Minimo">Intel Dual Core</td>
						<td data-label="Maximos"><a href="#"> Intel Core i3</a></td>
					</tr>
					<tr>
						<td data-label="PC">Ram</td>
						<td data-label="Minimo">2GB</td>
						<td data-label="Maximos"><a href="#">4GB</a></td>
					</tr>
					<tr>
						<td data-label="PC">Almacenamiento</td>
						<td data-label="Minimo">2GB de Espacio</td>
						<td data-label="Maximos"><a href="#"> 4GB de Espacio</a></td>
					</tr>
					<tr>
						<td data-label="PC">Video</td>
						<td data-label="Minimo">GPU 256MB Dedicada</td>
						<td data-label="Maximos"><a href="#">GeForce 8400GS o superior</a></td>
					</tr>
					<tr>
						<td data-label="PC">Sistema</td>
						<td data-label="Minimos">Windows XP  7 / 8 / 10 (32 o 64 bits)</td>
						<td data-label="Maximos"><a href="#"> Windows/ 7 / 8 / 10 (32 o 64 bits)</a></td>
					</tr>
				</tbody>
			</table>
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