<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Checks and radios</title>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Checks and radios</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./index.php">Form controls</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./select.php">Select</a>
    </li>
  </ul>
</nav>
<br>

<body>
    <div class="container text-center">
        <h1>Checks and radios</h1>
        <h5>Cree casillas de verificación y radios coherentes entre navegadores y dispositivos con nuestro componente de cheques completamente reescrito.</h5>
    </div>

<br>
    <div class="container jumbotron ">  
      <h3>Checks</h3>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
    </div>
<br>
    <h3>Indeterminado</h3>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
      <label class="form-check-label" for="flexCheckIndeterminate">Checkbox indeterminado</label>
    </div>

<br>
    <h3>Radios</h3>
    <div class="form-check">
       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
       <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
    </div>
    <div class="form-check">
       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
       <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
    </div>

 <br>
    <h3>Interruptores</h3>
    <p>Un interruptor tiene el marcado de una casilla de verificación personalizada, pero usa la clase .form-switch para representar un interruptor de palanca. Los conmutadores también admiten el atributo deshabilitado.</p>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
      </div>

<br>
    <h3>En línea cuadrado</h3>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
      </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
      <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
    </div>

<br>
    <h3>En línea circular</h3>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
      </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3" disabled>
      <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
    </div>

<br><br>
    <h3>Sin etiquetas</h3>
    <p>Omita el .form-check de envoltura para casillas de verificación y radios que no tengan texto en la etiqueta. Recuerde seguir proporcionando algún tipo de nombre accesible para las tecnologías de asistencia (por ejemplo, utilizando aria-label).</p>
      <div>
        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
      </div>
      <div>
        <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="...">
      </div>
<br>
    <h3>Botones de alternancia</h3>
    <p>Cree casillas de verificación y botones de opción con forma de botón utilizando estilos .btn en lugar de .form-check-label en los elementos >label<. Estos botones de alternancia se pueden agrupar en un grupo de botones si es necesario.</p>
    <h5>Botones de alternancia de casillas de verificación Alternar solo.<h5>
      <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">Single toggle</label>
      <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
        <label class="btn btn-primary" for="btn-check-2">Checked</label>

<br>
    <h3>Botones de alternancia de radio</h3>
      <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
      <label class="btn btn-warning" for="option1">Checked</label>

      <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
      <label class="btn btn-secondary" for="option2">Radio</label>

      <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" disabled>
      <label class="btn btn-success" for="option3">Disabled</label>

      <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
      <label class="btn btn-danger" for="option4">Radio</label>
<br><br>        
</body>
</html>