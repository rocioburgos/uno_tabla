<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Bootstrap validator -->
    <link rel="stylesheet" href="./validator/css/bootstrapValidator.min.css">
    <script src="./validator/js/bootstrapValidator.min.js" ></script>
 <!--Mis scripts -->
 
<script src="./Frontend/validacionesRegistro.js"></script>
<script src="./Frontend/registro.js"></script>
<title>Registro</title>
</head>
<body>
    <div class="container">
       <h1 >Registro</h1>
    <form class="well form-horizontal" id="form" >
 
 
  
 
        <div class="form-group">
            <label class="col-md-4 control-label">primer puesto</label>
            <div class="col-md-4 inputGroupContainer"> 
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>

                    <select name="perfil" id="perfil" class="form-control" >
                        <option value="invitado">x</option>
                        <option value="administrador">xx</option>
                      
                    </select>
                </div>
            </div>
        </div>
 
        <div class="form-group">
            <label class="col-md-4 control-label">segundo puesto</label>
            <div class="col-md-4 inputGroupContainer"> 
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>

                    <select name="perfil" id="perfil" class="form-control" >
                        <option value="invitado">x</option>
                        <option value="administrador">xx</option>
                      
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">tercer puesto</label>
            <div class="col-md-4 inputGroupContainer"> 
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>

                    <select name="perfil" id="perfil" class="form-control" >
                        <option value="invitado">x</option>
                        <option value="administrador">xx</option>
                      
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">ultimo puesto</label>
            <div class="col-md-4 inputGroupContainer"> 
                <div class="input-group ">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>

                    <select name="perfil" id="perfil" class="form-control" >
                        <option value="invitado">x</option>
                        <option value="administrador">xx</option>
                      
                    </select>
                </div>
            </div>
        </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Clave</label>
                <div class="col-md-4 inputGroupContainer"> 
                    <div class="input-group ">
                        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-asterisk"></i></span>
                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
 

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success col-xs-12  col-sm-5 col-md-5  ">Enviar <span class="glyphicon glyphicon-send"></span></button>
                         
                    <button type="reset" class="btn btn-warning  col-xs-12 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2">Limpiar <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
                <div id="errorEmail" class="alert alert-danger col-4" style="display:none">Email ya registrado.</div>
    </form>
    </div>
</body>
</html>