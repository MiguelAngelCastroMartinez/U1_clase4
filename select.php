<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Select</title>
</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Select</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="./checks_and_radios.php">Checks and radios</a>
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
  </ul>
</nav>
<br>

    <div class="container text-center">
        <h1>Select</h1>
        <h5>Personalice los nativos >select< con CSS personalizado que cambia la apariencia inicial del elemento.</h5>
    </div>

<br>
    <div class="container jumbotron ">  
    <h3>Por defecto</h3>
    <form>
      <select class="form-select" aria-label="Default select example" name="combo1">
        <option selected>Sexo</option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">Otro</option>
      </select>
    </form>
  <br>

  <br>
    <h3>Listas desplegables o comboBox</h3>
    <form>
      <select class="form-select" aria-label="Default select example" name="combo1">
        <option selected>Sexo</option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">Otro</option>
      </select>
      <br>
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Perfil</option>
        <option value="1">Niño</option>
        <option value="2">Adolescente</option>
        <option value="3">Adulto</option>
      </select>
    </form>

    <br>
    <h3>Listas desplegables o comboBox 2</h3>
    <form>
      <select class="form-select" multiple aria-label="Default select example" name="combo1">
        <option selected>Sexo</option>
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
        <option value="3">Otro</option>
      </select>
      <br>
      <select class="form-select form-select-sm" multiple aria-label=".form-select-sm example">
        <option selected>Perfil</option>
        <option value="1">Niño</option>
        <option value="2">Adolescente</option>
        <option value="3">Adulto</option>
      </select>
    </form>
    <br>
</body>
</html>