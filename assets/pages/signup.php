
    <div class="login">
        <div class="col-lg-4 col-md-8 col-sm-12 bg-white border  p-4 shadow-sm cardmodule">
            <form method="post" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">

                    <!-- <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45"> -->
                </div>
                <!-- <h1 class="h5 mb-3 fw-normal">Create new account</h1> -->
                <div class="d-flex">
                    <div class="form-floating_custom mt-1 col-6 cell">
                        <label for="floatingInput">First name</label>
                        <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control " >         
                    </div>
                    <div class="form-floating_custom mt-1 col-6 cell">
                        <label for="floatingInput">Last name</label>
                        <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control " >
                        
                    </div>
                </div>
                <?=showError('first_name')?>
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating_custom mt-1">
                <label for="floatingInput">Email</label>
                    <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control">
                    
                </div>
                <?=showError('email')?>

                <div class="form-floating_custom mt-1">
                <label for="floatingInput">Username</label>
                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control " >
                   
                </div>
                <?=showError('username')?>

                <div class="form-floating_custom mt-1">
                    <label for="floatingPassword">Password</label>
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" >
                   
                </div>
                <?=showError('password')?>


                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn_custom" type="submit">Sign Up</button>
                </div>
                <h6> <a href="?login" class="text_custom">Already have an account ?</a></h6>

            </form>
        </div>
    </div>

