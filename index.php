<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Clase 4 Formas</title>
</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Form controls</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./select.php">Select</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./Checks_and_radios.php">Checks and radios</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./range.php">Range</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./input_group.php">Input group</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./floating_labels.php">Floating labels</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./layout.php">Layout</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./validation.php">Validation</a>
    </li>
  </ul>
</nav>
<br>

<br>
        <div class="container">
          <img src="./imagenes/avg.gif" class="mx-auto d-block" alt="Asamble" title=Avg  width="1000" height="500"/> 
        </div>
<br>

    <div class="container text-center">
        <h1>Formularios</h1>
        <h5>Formularios con bootstrap ejemplos</h5>
    </div>

      <form>
      <div class="container jumbotron ">
        <h3>Select</h3>
        <p>Personalice los >select< nativos con CSS personalizado que cambia la apariencia inicial del elemento.</p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
            <p for="exampleInputEmail1" class="form-label">Dirección de correo electrónico</p>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div class="form-text">Utilizar mayusculas, minisculas y numeros</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Echa un vistazo</label>
        </div>
        <button class="btn btn-outline-danger">Boton con button</button>
        <input type="submit" class="btn btn-outline-primary" value="Boton con input">
    </form>
    
    <br></br>
    <h3>Textarea</h3>
    <p>Mejore los controles de forma textual como >input< sy >textarea< s con estilos personalizados, tamaños, estados de enfoque y más.</p>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Dirección de correo electrónico</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ejemplo de textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <br>
    <h3>Tamaños con formcontrol</h3>
    <p>Establezca alturas usando clases como .form-control-lg y .form-control-sm.</p>
    <div class="mb-3">
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
        <br>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
        <br>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
    </div>

    <br>
     <form>
        <h3>Entrada de archivo o varios archivos</h3>
        <div class="mb-3">
            <label for="formFile" class="form-label">Ejemplo de entrada de archivo predeterminado</label>
            <input class="form-control" type="file" id="formFile">
        </div>
            <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Ejemplo de entrada de varios archivos</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Ejemplo de entrada de archivo deshabilitado</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Ejemplo de entrada de archivo pequeño</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Ejemplo de entrada de archivo grande</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
     </form>
    <br>

  <br>
    <h3>Seleccionar un color</h3>
    <form>
    <label for="exampleColorInput" class="form-label">Color picker</label>
    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">        
    </form>
  <br>

  <br>
    <h3>Datailist</h3>
    <p>Las listas de datos le permiten crear un grupo de >option< s a las que se puede acceder (y autocompletar) desde dentro de una >input<. Estos son similares a los elementos >select<, pero vienen con más limitaciones y diferencias de estilo de menú. Si bien la mayoría de los navegadores y sistemas operativos incluyen cierto soporte para elementos >datalist<, su estilo es inconsistente en el mejor de los casos.</p>
    <form>
     <label for="exampleDataList" class="form-label">Ejemplo de Datalist</label>
     <input class="form-control" list="Estados" id="exampleDataList" placeholder="Escribe para buscar...">
     <datalist id="Estados">
        <option value="Aguascalientes">
        <option value="Baja California">
        <option value="Baja California Sur">
        <option value="Campeche">
        <option value="Coahuila">
        <option value="Colima">
        <option value="Chiapas">
        <option value="Chihuahua">
        <option value="Durango">
        <option value="Distrito Federal">
        <option value="Guanajuato">
        <option value="Guerrero">
        <option value="Hidalgo">
        <option value="Jalisco">
        <option value="México">
        <option value="Michoacán">
        <option value="Morelos">
        <option value="Nayarit">
        <option value="Nuevo León">
        <option value="Oaxaca">
        <option value="Puebla">
        <option value="Querétaro">
        <option value="Quintana Roo">
        <option value="San Luis Potosí">
        <option value="Sinaloa">
        <option value="Sonora">
        <option value="Tabasco">
        <option value="Querétaro">
        <option value="Quintana Roo">
        <option value="San Luis Potosí">
        <option value="Sinaloa">
        <option value="Sonora">
     </datalist>
    </form>
  <br>
 </body>
</html>