<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
  <link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/vendor.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/elephant.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/application.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/signup.min.css">
</head>
<body>
  <div class="signup">
    <div class="signup-body">
    <!-- <a class="signup-brand" href="index.html">
      <img class="img-responsive" src="img/logo.svg" alt="Elephant">
    </a> -->
    <?php if(isset($msg)){  ?>
    <center><label style="color: red;"><?php echo $msg; ?></label></center>
    <?php } ?>

    <div class="signup-form">

      <div class="form-wizard" data-toggle="validator">
        <ul class="steps">
          <li class="step col-xs-6">
            <a class="step-segment" href="#step-1" data-toggle="tab">
              <span class="step-icon icon icon-user"></span>
            </a>
            <div class="step-content">
              <strong class="hidden-xs">Sign Up</strong>
            </div>
          </li>
          <li class="step col-xs-6">
            <a class="step-segment" href="#step-2" data-toggle="tab">
              <span class="step-icon icon icon-cubes"></span>
            </a>
            <div class="step-content">
              <strong class="hidden-xs">Login</strong>
            </div>
          </li>
        </ul>
        <div class="tab-content">
          <div id="step-1" class="tab-pane active">
            <h4 class="tab-pane-heading">
              <span>Sign up your Account</span>
            </h4>
            <form method="post" action="">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                <!-- <div class="form-group">
                  <label for="email" class="control-label">Email address</label>
                  <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address.">
                  <small class="help-block">You will occasionally receive account related emails.</small>
                </div> -->
                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" name="firstnameSignup" placeholder="Please enter your Firstname.">
                  <small class="help-block">Displayed in other places as your name.</small>
                </div>

                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" type="text" name="lastnameSignup" placeholder="Please enter your Lastname.">
                </div>

                <div class="form-group">
                  <label for="username" class="control-label">Username</label>
                  <input id="username" class="form-control" type="text" name="usernameSignup" placeholder="Please enter your username." required>
                </div>

                <div class="form-group">
                  <label class="control-label">Password</label>
                    <input class="form-control" type="password" name="passwordSignup" placeholder="Please enter your password.">
                  <small class="help-block">Case sensitive.</small>
                </div>

                <div class="form-group">
                  <label class="control-label">Re Password</label>
                    <input class="form-control" type="password" name="repasswordSignup" placeholder="Please enter your Re password.">
                  <small class="help-block">Re password must be same with Password.</small>
                </div>

                <div class="form-group">
                  <button name="submitSignup" value="signupBtn" class="btn btn-primary btn-block btn-next" type="submit">Create an account</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div id="step-2" class="tab-pane">
          <form method="post" action="">
            <h4 class="tab-pane-heading">
              <span>Enter your Username and Password to access.</span>
            </h4>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <!-- <div class="form-group">
                  <label for="email" class="control-label">Email address</label>
                  <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address.">
                  <small class="help-block">You will occasionally receive account related emails.</small>
                </div> -->

                <div class="form-group">
                  <div class="md-form-group md-label-floating">
                    <input name="usernameLogin" class="md-form-control" type="text">
                    <label class="md-control-label">Please enter your Username</label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="md-form-group md-label-floating">
                    <input name="passwordLogin" class="md-form-control" type="password">
                    <label class="md-control-label">Please enter your Password</label>
                  </div>
                  <small class="help-block">Case sensitive.</small>
                </div>

                <div class="form-group">
                  <button name="submit" value="loginBtn" class="btn btn-primary btn-block" type="submit">Login</button>
                </div>

              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<script src="<?php echo base_url(); ?>elephant/js/vendor.min.js"></script>
<script src="<?php echo base_url(); ?>elephant/js/elephant.min.js"></script>
<script src="<?php echo base_url(); ?>elephant/js/application.min.js"></script>
<script src="<?php echo base_url(); ?>elephant/js/signup.min.js"></script>
</body>
</html>