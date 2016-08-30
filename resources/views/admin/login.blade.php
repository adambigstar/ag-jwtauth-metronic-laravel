<div id="wrapper" class="container-fluid fill login">

  <!-- BEGIN LOGO -->
  <div class="logo">
    <a href="index.html">
      {{--<img src="images/login_logo.png" alt="" /> </a>--}}
      <img src="<%settings.layoutPath%>/img/logo.png" alt="" /> </a>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form role="form">
      <h3 class="form-title">Welcome. Please Login.</h3>
      <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
      </div>
      <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
          <i class="fa fa-user"></i>
          <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="username" ng-model="email" /> </div>
      </div>
      <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
          <i class="fa fa-lock"></i>
          <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" ng-model="password" /> </div>
      </div>
      <div class="form-group">
        <a>Forgot your password?</a>
        <span></span>
        <button class="btn green pull-right" ng-click="login()"> Login </button>
      </div>
    </form>
    <!-- END LOGIN FORM -->
  </div>
  <!-- END LOGIN -->

</div>