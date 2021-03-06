<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('_include/head') ?>

  <body>
    <div class="login-wrapper">
        <div class="text-center">
            <h2 class="fadeInUp animation-delay8" style="font-weight:bold">
                <span class="text-success">Akreditasi</span> <span style="color:#ccc; text-shadow:0 1px #fff">UAI</span>
            </h2>
        </div>
        <div class="login-widget animation-delay1"> 
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <i class="fa fa-lock fa-lg"></i> Login
                    </div>

                    <!-- <div class="pull-right">
                        <span style="font-size:11px;">Don't have any account?</span>
                        <a class="btn btn-default btn-xs login-link" href="register.html" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
                    </div> -->
                </div>
                <div class="panel-body">
                    <form class="form-login" method="post" action="<?= base_url('login/doLogin') ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" placeholder="Username" name="username" class="form-control input-sm bounceIn animation-delay2" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control input-sm bounceIn animation-delay4">
                        </div>
                        <!-- <div class="form-group">
                            <label class="label-checkbox inline">
                                <input type="checkbox" class="regular-checkbox chk-delete" />
                                <span class="custom-checkbox info bounceIn animation-delay4"></span>
                            </label>
                            Remember me     
                        </div> -->
        
                        <div class="seperator"></div>
                        <!-- <div class="form-group">
                            Forgot your password?<br/>
                            Click <a href="#">here</a> to reset your password
                        </div> -->

                        <hr/>
                          <button type="submit" class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" value="Submit"><?= '<i class="fa fa-sign-in"></i> Sign in' ?></button>
                    </form>
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div><!-- /login-wrapper -->

    <?php  $this->load->view('_include/script') ?>
  </body>

</html>
