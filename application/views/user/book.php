<div class="book-jadwal-table" >
	<div class="container-table">
		<h3 id="jadwal-title-book">Jadwal Sanggar</h3>
		<table 	class="table">
		  <tr>
		    <th>Jam</th>
		    <th>Senin</th>
		    <th>Selasa</th>
		    <th>Rabu</th>
		    <th>Kamis</th>
		    <th>Jumat</th>
		    <th>Sabtu</th>
		  </tr>
		  <tr>
		    <td>07.00 / 08.00</td>
		    <td class="senin 0708" id = "senin-07/08">
		    	<?php

		    		$isAvailable = 0;
		    		foreach ($main_jadwal as  $value) {
					if ($value->hari=="Senin" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};

		    	?>
		    </td>
		    <td class="selasa 0708">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Selasa" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="rabu 0708">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Rabu" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="kamis 0708">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Kamis" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="jumat 0708">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Jumat" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="sabtu 0708">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Sabtu" && $value->jam=="07.00 s/d 08.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		  </tr>
		  <tr>
		    <td>09.00 / 10.00</td>
		    <td class="senin 0910">
		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Senin" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="selasa 0910">

		    	<?php 
		    		$isAvailable = 0;
		    		foreach ($main_jadwal as $key => $value) {
					if ($value->hari=="Selasa" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
						echo $value->instruktur;
						$isAvailable = 1;
						};
					};

					if($isAvailable==0){
						echo "
							<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
							 	Tersedia
							</button>
						"	;
						
					};
		    	 ?>
		    </td>
		    <td class="rabu 0910">
		    		<?php 
			    		$isAvailable = 0;
			    		foreach ($main_jadwal as $key => $value) {
						if ($value->hari=="Rabu" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
							echo $value->instruktur;
							$isAvailable = 1;
							};
						};

						if($isAvailable==0){
							echo "
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
								 	Tersedia
								</button>
							"	;
							
						};
					?>
		    </td>
		    <td class="kamis 0910">
		    		<?php 
			    		$isAvailable = 0;
			    		foreach ($main_jadwal as $key => $value) {
						if ($value->hari=="Kamis" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
							echo $value->instruktur;
							$isAvailable = 1;
							};
						};

						if($isAvailable==0){
							echo "
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
								 	Tersedia
								</button>
							"	;
							
						};
					?>
		    </td>
		    <td class="jumat 0910">
		    		<?php 
			    		$isAvailable = 0;
			    		foreach ($main_jadwal as $key => $value) {
						if ($value->hari=="Jumat" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
							echo $value->instruktur;
							$isAvailable = 1;
							};
						};

						if($isAvailable==0){
							echo "
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
								 	Tersedia
								</button>
							"	;
							
						};
					?>
		    </td>
		    <td class="sabtu 0910">
		    		<?php 
			    		$isAvailable = 0;
			    		foreach ($main_jadwal as $key => $value) {
						if ($value->hari=="Sabtu" && $value->jam=="09.00 s/d 10.00" && $value->status == 1) {
							echo $value->instruktur;
							$isAvailable = 1;
							};
						};

						if($isAvailable==0){
							echo "
								<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
								 	Tersedia
								</button>
							"	;
							
						};
					?>
		    </td>
		  </tr>
		  <tr>
		  	<td>11.00 / 12.00</td>
		  	<td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		  </tr>
		  <tr>
		  	<td>13.00 / 14.00</td>
		  	<td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		  </tr>
		  <tr>
		  	<td>15.00 / 16.00</td>
		  	<td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		  </tr>
		  <tr>
		  	<td>17.00 / 18.00</td>
		  	<td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		  </tr>
		  <tr>
		  	<td>20.00 / 21.00</td>
		  	<td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		    <td class=""></td>
		  </tr>
		</table>
</div>
</div>


	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?=base_url('user/add/'.$user["name"])?>">
		  <div class="form-group">
		    <label for="">Atas Nama</label>
		    <input name="atas-nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
		    <input type="hidden" name="id-user" value="<?php echo $user['id']; ?>" readonly>
		  </div>
		  <div class="form-group">
		  	<input id = "user" name ="user" value="<?= $user['name']?>" type='hidden'>
		    <label for="">Jadwal </label>
		    <select name="hari-jadwal" class="form-select form-select-sm" aria-label=".form-select-sm example">
			  <option selected>Pilih Hari</option>
			  <option value="1">Senin</option>
			  <option value="2">Selasa</option>
			  <option value="3">Rabu</option>
			  <option value="3">Kamis</option>
			  <option value="3">Jumat</option>
			  <option value="3">Sabtu</option>
			  <option value="3">Minggu</option>
			</select>
			<select name="jam-jadwal"class="form-select form-select-sm" aria-label=".form-select-sm example">
			  <option selected>Pilih Jam</option>
			  <option value="1">07.00 s/d 8.00</option>
			  <option value="2">9.00 s/d 10.00</option>
			  <option value="3">11.00 s/d 12.00</option>
			  <option value="3">13.00 s/d 14.00</option>
			  <option value="3">15.00 s/d 16.00</option>
			  <option value="3">17.00 s/d 18.00</option>
			  <option value="3">20.00 s/d 21.00</option>
			</select>
		    <!--<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Selasa (12.00 s/d 13.00)">-->
		  </div>
		  <div class="form-group">
		    <label for="">Jumlah orang</label>
		    <input id = "jumlah-orang" name ="jumlah-orang"type="numeric" class="form-control" id="exampleInputPassword1" placeholder="contoh: 9">
		  </div>
		  <div class="form-group">
		    <label for="">Keterangan</label>
		    <input name="keterangan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Latihan Dance">
		  </div>
		  
		  <!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div>-->
		  <p class="btn btn-primary" onclick="updateBiaya()">Biaya</p>
		  <div id="biaya-group" class="form-group">
		    <label for="" style="font-weight: bold">Biaya</label><br>
		    <label id="labelBiaya" style="font-weight: bold"></label><br>
		    <input id="biayaToDB" name="biaya" id="target-biaya" for="" style="font-weight: bold" readonly><br><br>
		    <!-- <input type="numeric" class="form-control" id="exampleInputPassword1" placeholder="Rp."> -->
		    <button  type="submit" class="btn btn-primary">Proses</button>
		  </div>
		</form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

<script type="text/javascript">
	document.getElementById("biaya-group").style.display="None";
	document.getElementById("biayaToDB").style.display="None";
	function updateBiaya(){
		var jumlah = document.getElementById('jumlah-orang').value;
		if (parseInt(jumlah) >= 1 && parseInt(jumlah) <=10) {
			var target = document.getElementById('labelBiaya');
			var targetToDB = parseInt(jumlah) * 10000;
			var targetBiaya = "Rp. "+String(parseInt(jumlah) * 10)+",000";
			document.getElementById("biayaToDB").value = targetToDB;
			target.innerHTML = targetBiaya;
			document.getElementById("biaya-group").style.display="block";

		}else if(parseInt(jumlah) >= 11){
			alert("Jumlah orang tidak boleh melebih 10");
		}
	}
</script>