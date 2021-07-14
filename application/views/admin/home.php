




<div class="main-table" id="table-admin">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Order Id</th>
	      <th scope="col">Ordered by</th>
	      <th scope="col">Atas Nama</th>
	      <th scope="col">Hari</th>
	      <th scope="col">Jam</th>
	      <th scope="col">Jumlah</th>
	      <th scope="col">Keterangan</th>
	      <th scope="col">Biaya</th>
	      <th scope="col">Sudah Bayar</th>
	      <th scope="col">Order Dibuat</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 

	 			$no = 1;
    			foreach ($order as $data) {
    			
	 	?>
	 		<tr scope="row">
	  			<td><?= $no++ ?></td>
	  			<td><?= $data['order_id']?></td>
	  			<td><?= $data['pengorder']?></td>
	  			<td><?= $data['atas_nama']?></td>
	  			<td><?= $data['hari']?></td>
	  			<td><?= $data['jam']?></td>
	  			<td><?= $data['jumlah']?></td>
	  			<td><?= $data['keterangan']?></td>
	  			<td><?= $data['biaya']?></td>
	  			<td><?= $data['status']?></td>
	  			<td><?= $data['order_dibuat']?></td>
	  			<td>
	  				<button type="button" class="btn btn-primary" 
	  				data-toggle="modal" 
	  				data-target="#modal<?=$data['order_id']?>">
					 	Konfirmasi
					</button>
	  			</td>
	  		</tr>
	  		<div class="modal fade" id="modal<?=$data['order_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	 <p><span>Order by</span><?= $data['pengorder']?></p>
			      	 <p><span>Atas Nama</span><?= $data['atas_nama']?></p>
			      	 <p><span>Hari</span><?= $data['hari']?></p>
			      	 <p><span>Jam</span><?= $data['jam']?></p>
			      	 <p><span>Jumlah</span><?= $data['jumlah']?></p>
			      	 <p><span>Keterangan</span><?= $data['keterangan']?></p>
			      	 <p><span>Biaya</span> Rp<?= $data['biaya']?></p>
			      </div>
			      <div class="modal-footer">
			      	 <form method="POST" action="<?=base_url('admin/confirm/'.$data["pengorder"].'/'.$data["order_id"].'')?>">
						<input type="submit" class="btn btn-success" name="" value="Konfirm">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>
	 	<?php 
	 		 		
    			};
	 	?>
	  	<tr scope="row">
	  		<td></td>
	  	</tr>
	 
	  </tbody>
</table>
</div>

