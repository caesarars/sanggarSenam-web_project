<nav>
 <div class="left-nav">
       <span>Kartika Bodyfit</span>
 </div>
<div class="right-nav">     
    <ul class="nav">
      <li>
        <a href="<?= base_url('app/regis')?>">Daftar</a>
      </li>
      <li class="nav-item">
        <a  data-toggle="modal" data-target="#exampleModal">Login</a>
      </li>
      <li class="nav-item">
        <a href="#kontak">Kontak</a>
      </li>
    </ul>
</div>

    
<div class="welcome">
    <div class="title"> 
        <h1 id ="sanggar-senam">Sanggar Senam</h1>
        <h1 id="sanggar-senam-2">Kartika Bodyfit</h1>

        <p id="body">Menyediakan tempat senam, zumba, aerobic, dll.
          juga bisa untuk kegiatan yang lain 
          seperti latihan musik, dance, dan juga yoga.
        </p>

          <button id="register-welcome" type="button" class="btn btn-primary">
            <a href="<?= base_url('app/regis')?>">Daftar sekarang</a>
          </button>
    </button>
    </div>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?=   base_url('assets/') ?>img/1.jpg" class="d-block w-100" alt="..." height="360px" style="border-radius: 10px">
            </div>
            <div class="carousel-item">
              <img src="<?=   base_url('assets/') ?>img/2.jpg" class="d-block w-100" alt="..." height="360px" style="border-radius: 10px">
            </div>
            <div class="carousel-item">
              <img src="<?=   base_url('assets/') ?>img/3.jpg" class="d-block w-100" alt="..." height="360px"  style="border-radius: 10px">
            </div>
          </div>
    </div>

</div>
</nav>


<div class="welcome-2">


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Lokasi kami</h5>
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kartika%20Sejahtera%20Bodyfit&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
            <a href="https://putlocker-is.org"></a><br>
            <a href="https://www.embedgooglemap.net">google map embed iframe</a>
          </div>
        </div>
    </div>
  </div>


  <div class="card" id="kontak">
    <div class="card-body">
      <h5 class="card-title">Kontak kami</h5>
      <ul>
        <li>Maryani : 0821-1495-4077</li>
        <li>Yulia : 0821-8021-1140</li>
      </ul>
    </div>
  </div>

</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center my-4" id="exampleModalLabel" style="color:white">Login</h5>
        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form method="POST" action="<?=base_url('app/login')?>">
            <div class="form-group">
             <label class="small mb-1" for="inputEmailAddress">Email</label>
             <input name='email' class="form-control py-4" id="inputEmailAddress" type="    email" placeholder="Enter email address" value="<?= set_value('email')?>"/>
              <?=form_error('email',"<p class='text-danger'>",'</p>')?>
            </div>
            <div class="form-group">
             <label class="small mb-1" for="inputPassword">Password</label>
             <input type ="password" name='password' class="form-control py-4" id="inputPassword" type="        password" placeholder="Enter password" />
              <?=form_error('password',"<p class='text-danger'>",'</p>')?>
            </div>
                                          
            <div class="form-group ">
             <input class="btn btn-primary" type="submit" name='submit' value="Login" style="float: right;"/>
            </div>
          </form>
        </div>
      <div class="modal-footer">
       <div class="small"><a href="<?= base_url('app/regis')?>">Need an account? Sign up!</a></div>
    </div>
  </div>
</div>
</div>
