<div class="login-box">
  <div class="login-logo">
    <a href="" style="color:white"><b>User System</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese al sistema</p>

    <form  method="post">
      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>
      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>
       
      </div>

     <?php

          $login = new ControladorUsuario();
          $login -> ctrIngresoUsuario();

     ?>


    </form>

    

    

  </div>
  <!-- /.login-box-body -->
</div>