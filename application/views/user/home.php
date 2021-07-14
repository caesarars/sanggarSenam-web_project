<div class="main">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><?= $user['name']  ?></span>
  </div>
</nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add
          </button>
        </li>
        <li>
          <a class="nav-link" href="#"></a>
        </li>
        <li>
          <button type="button" class="btn btn-warning" data-toggle="modal"  style="width:120px; ">
            <a style="text-decoration:none;" href="<?=base_url('user/logout')?>" color="white">Logout</a>
          </button>
        <?=  echo $this->session->flashdata('pesan_logout');  ?>
        </li>
      </ul>
    </div>
   
  </div>
</nav>


<div class="legend" style="width:50%; padding:6px; margin:24px auto;text-align:center;">
  <button type="button" class="btn " style="background-color: lightgray; width:12%;">Incoming</button>
  <button type="button" class="btn " style="background-color: cyan; width:12%; margin:0 8px;">Today</button>
  <button type="button" class="btn " style="background-color: yellow; width:12%;">Passed</button>
</div>

  <div class="schedule" style="margin-top:1%">
    <?= $this->session->flashdata('insert_menu')  ?>
  <table class="table" title="Schedule List">
    <h2 style="text-align: center; padding:6px;">Schedule List</h2>
    <thead >
      <tr>
        <th scope="col">No</th>
        <th scope="col">Activity</th>
        <th scope="col">Start</th>
        <th scope="col">End</th>
        <th scope="col">Location</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($jadwal as $data): 
      
    ?>

      <tr

      <?php
      
        $now = date('Y-m-d');
        $nowYear = (int)substr($now,0,4);
        $nowMonth = (int)substr($now,5,6);
        $nowDay = (int)substr($now,8,9);
        $year = (int)substr($data['tanggal'],0,4);
        $month =  (int)substr($data['tanggal'],5,6);
        $day =  (int)substr($data['tanggal'],8,9);
        if ($year >$nowYear ) {
          echo "style= 'background-color:lightgrey' ";
        }else if($year == $nowYear){
          if($month > $nowMonth){
            echo "style= 'background-color:lightgrey' ";
          }else if($month == $nowMonth){
            if($day > $nowDay){
              echo "style= 'background-color:lightgrey' ";
            }else if($day == $nowDay){
              echo "style= 'background-color:cyan' ";
            }else{
              echo "style= 'background-color:yellow' ";
            }
          }else{
            echo "style= 'background-color:yellow' ";
          }
        }else{
          echo "style= 'background-color:yellow' ";
        }

       ?>
      >
        <th scope="row"><?= $no++  ?></th>
        <td><?= $data['nama_jadwal']  ?></td>
        <td><?= substr($data['waktu_jadwal'],0,5)  ?></td>
        <td><?= substr($data['akhir_jadwal'],0,5  )?></td>
        <td><?= $data['tempat']  ?></td>
        <td><?= $data['tanggal']  ?></td>
        <td>
         
          <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#delete-modal<?= $data['id'] ?>" name="<?= $data['id'] ?>">
          Delete 
          </button>
        </td>
        <td>
          <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#update-data<?= $data['id'] ?>" name="<?= $data['id'] ?>">
          Edit
          </button>
        </td>
      </tr>


       <!-- Modal Delete untuk konfirmasi delete -->
       <div class="modal fade <?= $data['id'] ?>" id="delete-modal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <?= $this->session->flashdata('pesan_dihapus') ?>
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete this schedule?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Name:&nbsp;<?= $data['nama_jadwal']?></p>
                <p>Start:&nbsp;<?= $data['waktu_jadwal']?></p>
                <p>End:&nbsp;<?= $data['akhir_jadwal']?></p>
                <p>Location:&nbsp;<?= $data['tempat']?></p>
                <p>Date:&nbsp;<?= $data['tanggal']?></p>
                <h4>Are you sure?</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>         
               <form action="<?= base_url("user/delete/".$user['name']."/".$data['id']) ?>" method="post">
                <input type="submit" value="Delete"  class="">
              </form>
              </div>            
            </div>
          </div>
        </div>
      

        <!-- Modal Editing  untuk update data jika ada yang salah -->
        <div class="modal fade <?= $data['id'] ?>" id="update-data<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Schedule </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      
            <div class="modal-body" >
              <div class='form-edit' style="width: 80%; margin: 0 auto;background-color:white;">
                  <form class="" action="<?= base_url('user/update/'.$user['name'].'/'.$data['id'])?>" method="post" >

                  <label for="nama-jadwal-<?=$data['id']?>" style="padding:6px;" style="text-align:left">Nama Jadwal</label><br>
                  <input type="text" name="nama-jadwal-<?=$data['id']?>" value="<?=$data['nama_jadwal']?>" style="width:80%"><br>

                  <label style="padding:6px;" for="waktu-jadwal-<?=$data['id']?>">Mulai</label><br>
                  <input type="time" name="waktu-jadwal-<?=$data['id']?>" value="<?=$data['waktu_jadwal']?>" style="width:80%"><br>

                  <label style="padding:6px;" for="sampai-jadwal-<?=$data['id']?>">Sampai</label><br>
                  <input type="time" name="sampai-jadwal-<?=$data['id']?>" value="<?=$data['akhir_jadwal']?>" style="width:80%"><br>

                  <label style="padding:6px;" for="tempat-<?=$data['id']?>">Tempat</label><br>
                  <input type="text" name="tempat-<?=$data['id']?>" value="<?=$data['tempat']?>" style="width:80%"><br>

                  <label style="padding:6px;" for="tanggal-<?=$data['id']?>">Tanggal</label><br>
                  <input type="date" name="tanggal-<?=$data['id']?>" value="<?=$data['tanggal']?>" style="width:80%"><br><br>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button class="btn btn-primary editTombol" type="submit" name="submit" >Edit</button>
                </div>
              </form>
              </div>
              
            </div>
            
            <?= $this->session->flashdata('pesan_diedit')  ?>
            
    </div>
  </div>
</div>
    <?php endforeach; ?>

    </tbody>
  </table>
  </div>

  <div class="schedule-add" style="
    width: 20%;
    margin: 24px auto;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
  ">

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="<?= base_url('user/add/'.$user['name'])?>" method="post" style="margin-left:33%">
          <label for="nama-jadwal" style="padding:6px;">Nama Jadwal</label><br>
          <input type="text" name="nama-jadwal" value="" style="width:50%"><br>

          <label style="padding:6px;" for="waktu-jadwal">Mulai</label><br>
          <input type="time" name="waktu-jadwal" value="" style="width:50%"><br>

          <label style="padding:6px;" for="sampai-jadwal">Sampai</label><br>
          <input type="time" name="sampai-jadwal" value="" style="width:50%"><br>

          <label style="padding:6px;" for="tempat">Tempat</label><br>
          <input type="text" name="tempat" value="" style="width:50%"><br>

          <label style="padding:6px;" for="tanggal">Tanggal</label><br>
          <input type="date" name="tanggal" value="" style="width:50%"><br><br>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input class="btn btn-primary" type="submit" name="" value="Add" >
          </div>
        </form>
        <?= $this->session->flashdata('pesan_ditambah')  ?>
      </div>

    </div>
  </div>
</div>




  </div>


</div>
<script type="text/javascript">
$('#exampleModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#update-modal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$('#delete-modal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
