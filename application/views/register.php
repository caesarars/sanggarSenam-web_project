<div id="layoutAuthentication">
     <div id="layoutAuthentication_content">
         <main>
             <div class="container">
                 <div class="row justify-content-center">
                     <div class="col-lg-5">
                         <div class="card shadow-lg border-0 rounded-lg mt-5">
                             <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                             <div class="card-body">
                                 <form method="POST" action="<?=base_url('app/regis')?>">
                                     <div class="form-row">
                                         <div class="col-md">
                                             <div class="form-group">
                                               <label class="small mb-1" for="inputEmailAddress">Username</label>
                                               <input name="name" class="form-control py-4" id="inputEmailAddress" type="text" aria-describedby="emailHelp" placeholder="Your name" value="<?=set_value('name')?>"/>
                                               <?=form_error('name',"<p class='text-danger'>",'</p>')?>
                                             </div>
                                         </div>

                                     </div>
                                     <div class="form-group">
                                         <label class="small mb-1" for="inputEmailAddress">Email</label>
                                         <input name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="<?=set_value('email')?>" />
                                         <?=form_error('email',"<p class='text-danger'>",'</p>')?>
                                     </div>
                                      <div class="form-group">
                                         <label class="small mb-1" for="inputEmailAddress">No Handphone</label>
                                         <input name="no-handphone" class="form-control py-4" id="inputEmailAddress" type="numeric" aria-describedby="emailHelp" placeholder="No Handphone" value="<?=set_value('no-handphone')?>" />
                                         <?=form_error('email',"<p class='text-danger'>",'</p>')?>
                                     </div>
                                     <div class="form-row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="small mb-1" for="inputPassword">Password</label>
                                                 <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                                 <?=form_error('password',"<p class='text-danger'>",'</p>')?>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                 <input name="confirm-password" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group mt-4 mb-0"><input type='submit' name='submit' class="btn btn-primary btn-block" ></div>
                                 </form>
                             </div>
                             <div class="card-footer text-center">
                                 <div class="small"><a href="<?=base_url('app/')?>">Have an account? Go to login</a></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </main>
     </div>
    
 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="js/scripts.js"></script>
