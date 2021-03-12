<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Entrada en grupos</title>
</head>
<body> 
    
<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Input group</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./index.php">Form controls</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./select.php">Select</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./checks_and_radios.php">Checks and Radios</a>
    </li>    
    <li class="nav-item">
        <a class="nav-link text-dark" href="./range.php">Range</a>
    </li>
  </ul>
</nav>
<br>

<br>
    <div class="container text-center">  
      <h1>Grupo de entrada</h1>
      <h5>Amplíe fácilmente los controles de formulario agregando texto, botones o grupos de botones a ambos lados de las entradas de texto, selecciones personalizadas y entradas de archivos personalizadas.</h5>
    </div>
<br>
    <div class="container jumbotron ">  
      <h3>Ejemplo basico</h3>
      <p>Coloque un complemento o un botón a cada lado de una entrada. También puede colocar uno a ambos lados de una entrada. Recuerde colocar >etiquetas< fuera del grupo de entrada.</p>
       <div class="input-group mb-3">
         <span class="input-group-text" id="basic-addon1">@</span>
         <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username" aria-describedby="basic-addon1">
       </div>

       <div class="input-group mb-3">
         <input type="text" class="form-control" placeholder="Nombre de usuario destinatario" aria-label="Recipient's username" aria-describedby="basic-addon2">
         <span class="input-group-text" id="basic-addon2">@ejemplo.com</span>
       </div>

       <label for="basic-url" class="form-label">Tu URL personalizada</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3">https://ejemplo.com/angel/</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
       </div>

       <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
       </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username">
          <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Servidor" aria-label="Server">
       </div>

       <div class="input-group">
          <span class="input-group-text">Con textarea</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
<br>
    <h3>Envase</h3>
      <p>Los grupos de entrada se ajustan de forma predeterminada a través de flex-wrap: wrap para adaptarse a la validación de campos de formulario personalizados dentro de un grupo de entrada. Puede desactivar esto con .flex-nowrap.</p>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">@</span>
          <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
<br>
    <h3>Dimensionamiento</h3>
      <p>Agregue las clases de tamaño de formulario relativas al propio .input-group y el contenido dentro se redimensionará automáticamente, sin necesidad de repetir las clases de tamaño de control de formulario en cada elemento.</p>
      <strong>No se admite el tamaño de los elementos individuales del grupo de entrada.</strong>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Pequeño</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Por defecto</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Grande</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
      </div>
<br>
    <h3>Casillas de verificación y radios</h3>
      <p>Coloque cualquier casilla de verificación u opción de radio dentro del complemento de un grupo de entrada en lugar de texto. Recomendamos agregar .mt-0 a .form-check-input cuando no haya texto visible junto a la entrada.</p>
        <div class="input-group mb-3">
        <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
        </div>
        <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div>
        <div class="input-group">
        <div class="input-group-text">
            <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
        </div>
        <input type="text" class="form-control" aria-label="Text input with radio button">
        </div>

<br>
    <h3>Múltiples entradas</h3>
      <p>Si bien se admiten visualmente varios >input<, los estilos de validación solo están disponibles para grupos de entrada con un solo >input<.</p>
      <div class="input-group">
        <span class="input-group-text">Nombre y apellido</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="text" aria-label="Last name" class="form-control">
      </div>

<br>
    <h3>Varios complementos</h3>
      <p>Se admiten varios complementos y se pueden combinar con versiones de entrada de radio y casilla de verificación.</p>
      <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <span class="input-group-text">0.00</span>
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      </div>

      <div class="input-group">
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        <span class="input-group-text">$</span>
        <span class="input-group-text">0.00</span>
      </div>
<br>
    <h3>Complementos de botón</h3>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Boton</button>
        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nombre de usuario del destinatario" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Boton</button>
      </div>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button">Boton</button>
        <button class="btn btn-outline-secondary" type="button">Boton</button>
        <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
      </div>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Nombre de usuario del destinatario" aria-label="Recipient's username with two button addons">
        <button class="btn btn-outline-secondary" type="button">Boton</button>
        <button class="btn btn-outline-secondary" type="button">Boton</button>
      </div>
<br>
    <h3>Botones desplegables</h3>
      <div class="input-group mb-3">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Personajes de Dbz</button>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Goku</a></li>
          <li><a class="dropdown-item" href="#">Vegetta</a></li>
          <li><a class="dropdown-item" href="#">Gohan</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Picoro</a></li>
      </ul>
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>

      <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Equipos de la Liga MX</button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Guadalajara</a></li>
          <li><a class="dropdown-item" href="#">Leon</a></li>
          <li><a class="dropdown-item" href="#">Monterrey</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Tigres</a></li>
      </ul>
      </div>
      <div class="input-group">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Equipos Europeos</button>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Real Madrid</a></li>
          <li><a class="dropdown-item" href="#">Barcelona</a></li>
          <li><a class="dropdown-item" href="#">Atletico de Madrid</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Liverpool</a></li>
      </ul>
      <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Ingenierias del ITSSNA</button>
      <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Ing. Sistemas Computacionales</a></li>
          <li><a class="dropdown-item" href="#">Ing. en Administracion</a></li>
          <li><a class="dropdown-item" href="#">Ing. Electromecanica</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Ing. Industrial</a></li>
      </ul>
      </div>
<br>
    <h3>Botones segmentados</h3>
      <div class="input-group mb-3">
        <button type="button" class="btn btn-outline-secondary">Personajes de Dbz</button>
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Goku</a></li>
          <li><a class="dropdown-item" href="#">Vegetta</a></li>
          <li><a class="dropdown-item" href="#">Gohan</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Picoro</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
      </div>

      <div class="input-group">
        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
        <button type="button" class="btn btn-outline-secondary">Equipos de la Liga MX</button>
        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Guadalajara</a></li>
          <li><a class="dropdown-item" href="#">Leon</a></li>
          <li><a class="dropdown-item" href="#">Monterrey</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Tigres</a></li>
        </ul>
      </div>
<br>
    <div class="container text-center">  
      <h1>Formularios personalizados</h1>
      <p>Los grupos de entrada incluyen soporte para selecciones personalizadas y entradas de archivos personalizadas. Las versiones predeterminadas del navegador de estos no son compatibles.</p>
    </div>
<br>
    <h3>Selección personalizada</h3>
        <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Equipos de la Liga MX</label>
      <select class="form-select" id="inputGroupSelect01">
        <option selected>Guadalajara</option>
        <option value="1">Leon</option>
        <option value="2">Monterrey</option>
        <option value="3">Tigres</option>
      </select>
    </div>
    <div class="input-group mb-3">
      <select class="form-select" id="inputGroupSelect02">
        <option selected>Goku</option>
        <option value="1">Vegetta</option>
        <option value="2">Gohan</option>
        <option value="3">Picoro</option>
      </select>
      <label class="input-group-text" for="inputGroupSelect02">Personajes de Dbz</label>
    </div>
    <div class="input-group mb-3">
      <button class="btn btn-outline-secondary" type="button">Ingenierias del ITSSNA</button>
      <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
        <option selected>Ing. Sistemas Computacionales</option>
        <option value="1">Ing. en Administracion</option>
        <option value="2">Ing. Electromecanica</option>
        <option value="3">Ing. Industrial</option>
      </select>
    </div>
    <div class="input-group">
      <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
        <option selected>Real Madrid</option>
        <option value="1">Barcelona</option>
        <option value="2">Atletico de Madrid</option>
        <option value="3">Liverpool</option>
      </select>
      <button class="btn btn-outline-secondary" type="button">Equipos Europeos</button>
    </div>
<br>
    <h3>Entrada de archivos personalizados</h3>
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01">Subir</label>
      <input type="file" class="form-control" id="inputGroupFile01">
    </div>

    <div class="input-group mb-3">
      <input type="file" class="form-control" id="inputGroupFile02">
      <label class="input-group-text" for="inputGroupFile02">Subir</label>
    </div>

    <div class="input-group mb-3">
      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Subir</button>
      <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
    </div>

    <div class="input-group">
      <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
      <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Subir</button>
    </div>
</body>
</html>