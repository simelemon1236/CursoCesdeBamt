<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web Bootstrap</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilosindex.css">
    </head>
    <body>
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-light  barra-nav">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.jpg" width="60" height="60" class="d-inline-block align-top" alt="">
                    Bootstrap
                 </a>
            </nav>
        </header>
        <section>
            <div class="container contenedor ">
                <div class="registro">
                    <img  class="img-responsive logo-registro" src="img/logousuario.png" width="100" height="100">
                </div>
                <form class="my-5">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre"  placeholder="Ingrese su Nombre"name="nombre">
                                <small id="nombreHelp" class="form-text text-muted">Sus datos nunca seran compartidos.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Ingrese sus apellidos" name="apellido">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col">
                           <div class="form-group">
                               <label for="pais">Pais</label>
                               <select class="form-control" id="pais" name="pais">
                                   <option value="colombia">Colombia</option>
                                   <option value="argentina">Argentina</option>
                                   <option value="peru">Peru</option>
                                   <option value="uruguay">Uruguay</option>
                                   <option value="brasil">Brasil</option>
                               </select>
                           </div>
                       </div>
                       <div class="col">
                           <div class="form-group">
                               <label for="departamento">Departamento</label>
                               <select class="form-control" id="departamento" name="departamento">
                                   <option value="antioquia">Antioquia</option>
                                   <option value="cundinamarca">Cundinamarca</option>
                                   <option value="nariño">Nariño</option>
                                   <option value="amazonas">Amazonas</option>
                                   <option value="atlantico">Atlantico</option>
                               </select>
                           </div>
                       </div>
                       <div class="col">
                           <div class="form-group">
                               <label for="ciudad">Ciudad</label>
                               <select class="form-control" id="ciudad" name="ciudad">
                                   <option value="medellin">Medellin</option>
                                   <option value="caldas">Caldas</option>
                                   <option value="copacabana">Copacabana</option>
                                   <option value="envigado">Envigado</option>
                                   <option value="bello">Bello</option>
                               </select>
                           </div>
                       </div>
                    </div>
                     <div class="form-group">
                         <div class="row">
                             <div class="col">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono"  placeholder="Telefono" name="telefono"> 
                             </div>
                             <div class="col">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email"  placeholder="E-mail" name="email"> 
                             </div>
                         </div>
                     </div>   
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                      <label class="form-check-label" for="exampleCheck1">Acepta Terminos y Condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-enviar">Completar Registro</button>
                  
                </form>
            </div>
         </section>   
        <footer>
            <div class="container-fluid  style-footer">
                <h2>&copy -Derechos Reservados</h2>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.min.js"> </script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
