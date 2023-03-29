<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Usuario
     
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuario</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">

         <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar usuario
         </button>

          

        </div>
        <div class="box-body">
         
        <table class="table table-bordered table-striped dt-responsive tablas">
           <thead>
              <tr>
                 <th>#</th>
                 <th>Nombre</th>
                 <th>Usuario</th>
                 <th>Foto</th>
                 <th>Perfil</th>
                 <th>Estado</th>
                 <th>último login</th>
                 <th>Acciones</th>
              </tr>
           </thead>
           <tbody>
              <tr>
                 <td>1</td>
                 <td>User administrador</td>
                 <td>Admin</td>
                 <td><img src="vista/img/user.jpg" class="img-thumbnail" width="40px"></td>
                 <td>Administrador</td>
                 <td><button class="btn btn-success btn-xs">Activado</button></td>
                 <td>2022-06-22 16:37:00</td>
                 <td>
                   <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                   </div>
                 </td>
              </tr>

              <tr>
                 <td>1</td>
                 <td>User administrador</td>
                 <td>Admin</td>
                 <td><img src="vista/img/user.jpg" class="img-thumbnail" width="40px"></td>
                 <td>Administrador</td>
                 <td><button class="btn btn-success btn-xs">Activado</button></td>
                 <td>2022-06-22 16:37:00</td>
                 <td>
                   <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                   </div>
                 </td>
              </tr>

              <tr>
                 <td>1</td>
                 <td>User administrador</td>
                 <td>Admin</td>
                 <td><img src="vista/img/user.jpg" class="img-thumbnail" width="40px"></td>
                 <td>Administrador</td>
                 <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
                 <td>2022-06-22 16:37:00</td>
                 <td>
                   <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                   </div>
                 </td>
              </tr>
           </tbody>

        </table>
        


        </div>
       
       
       
      </div>
      

    </section>
   
  </div>

  <!-- Modal de usuario -->
  <div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

   
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

      <div class="modal-header" style="background: #3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar usuario</h4>

      </div>

      <div class="modal-body">

        <div class="box-body">
           <!-- Entrada para el nombre -->
           <div class="form-group">
              <!-- agrupar el icono con la entrada del input -->
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

           </div>

           <!-- Entrada para el usuario -->
           <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" required>

              </div>

           </div>

           <!-- Entrada para la contraseña -->
           <div class="form-group">
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

           </div>

           <!-- Entrada para el perfil -->
           <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg" name="nuevoPerfil">
                   <option value="">Seleccionar perfil</option>
                   <option value="Administrador">Administrador</option>
                   <option value="Especial">Especial</option>
                </select>

              </div>

           </div>

           <!-- Entrada para el perfil -->

           <div class="form-group">
              
              <div class="panel">Subir Foto</div>
              <input type="file" id="nuevaFoto" name="nuevaFoto">
            
              <p class="help-block">Peso máximo de la foto 200 MB</p>
              <img src="vista/img/anonymous.png" class="img-thumbnail" width="100px">
            </div>
            
    </form>
            
           

        </div>
        


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar usuarios</button>
      </div>

    </div>

  </div>

</div>