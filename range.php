<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Radio</title>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Range</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./checks_and_radios.php">Checks and Radios</a>
    </li>
  </ul>
</nav>
<br>

<body>
    <div class="container text-center">
        <h1>Range</h1>
        <h5>Utilice nuestras entradas de rango personalizadas para un estilo coherente entre navegadores y personalización incorporada.</h5>
    </div>

<br>
    <div class="container jumbotron ">  
      <h3>Visión general</h3>
      <p>Cree controles personalizados >input type = "range"< con .form-range. La pista (el fondo) y el pulgar (el valor) tienen el mismo estilo en todos los navegadores. Como solo Edge Legacy y Firefox admiten "llenar" su pista desde la izquierda o la derecha del pulgar como un medio para indicar visualmente el progreso, actualmente no lo admitimos.</p>
        <label for="customRange1" class="form-label">Ejemplo de Rango</label>
        <input type="range" class="form-range" id="customRange1">    

<br><br>
    <h3>Mínimo y máximo</h3>
      <p>Las entradas de rango tienen valores implícitos para mínimo y máximo: 0 y 100, respectivamente. Puede especificar nuevos valores para aquellos que utilizan los atributos mínimo y máximo.</p>
        <label for="customRange2" class="form-label">Ejemplo de Rango de 0 a 5</label>
        <input type="range" class="form-range" min="-5" max="5" id="customRange2"> 

<br><br>
    <h3>Pasos</h3>
      <p>De forma predeterminada, las entradas de rango se “ajustan” a valores enteros. Para cambiar esto, puede especificar un valor de paso. En el siguiente ejemplo, duplicamos el número de pasos usando step = "0.5".</p>
      <label for="customRange3" class="form-label">Ejemplo de Rango</label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
<br><br>

</body>
</html>