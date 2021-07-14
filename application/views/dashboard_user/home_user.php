<div class="main">	
	<h3 id="jadwal-title">Jadwal Anda</h3>
	<div class="jadwal-saya">
		
		<?php 
			if (!$jadwal) {
		?>
			<div id="belum-ada-jadwal">
				<h5>Anda tidak memiliki jadwal</h5>
				<h6>Silahkan book sekarang</h6>
				<a class="btn btn-warning" href="<?= base_url('user/book')?>">Book</a>
			</div>
		<?php
			}else{

				foreach ($jadwal as $value) {
		?>

				<div class='card'>
					  <div class='card-body'>
					    <p id="atas-nama"><?=$value['atas_nama']?></p>
					    <p class="card-text"><?= $value['hari_jadwal']?></p>
					    <p class="card-text"><?= $value['jam_jadwal']?></p>
					    <p class="card-text"><?= $value['jumlah_orang']?> orang</p>
					    <p class="card-text"><?= $value['keterangan']?></p><br>
					    <?php
					    	if ($value['status'] == 1) {
					    		
					    ?>
					    <div id="status">
					    	<h5 style="text-align: center">Status</h5>
					    	<p id="confirm">Terkonfirmasi</p>
					    </div>
					    <?php

					    	}else{

					    ?>
					    <div id="status">
					    	<h5 style="text-align: center">Status</h5>
					    	<p  id="not-confirm"  style="text-align: center">Belum terkonfirmasi</p>
					    </div>
					    <?php 
					    	}
					     ?>
					 </div>
				</div>
			
	 <?php 
	 			}
			};
	 ?>
	</div>
</div>

