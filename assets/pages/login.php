
    <div class="login">
        <div class="col-sm-12 col-md-4 bg-white border  p-4 shadow-sm cardmodule">
            <form method="post" action="assets/php/actions.php?login">
                <div class="d-flex justify-content-center">

                    <!-- <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45"> -->
                </div>
                <!-- <h1 class="h5 mb-3 fw-normal">Please sign in</h1> -->

                <div class="form-floating_custom">
                    <label for="floatingInput">Email</label>
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control " >
                    
                </div>
                <?=showError('username_email')?>
                <div class="form-floating_custom mt-1">
                    <label for="floatingPassword">Password</label>
                    <input type="password" name="password" class="form-control " id="floatingPassword" >
                   
                </div>
                <?=showError('password')?>
                <?=showError('checkuser')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn_custom" type="submit">Sign in</button>
                </div>
                <h6>  <a href="?signup" class="text_custom">Create New Account</a></h6>
                <h6>  <a href="?forgotpassword&newfp" class="text_custom">Forgot password ?</a></h6>
                
            </form>
        </div>
    </div>

