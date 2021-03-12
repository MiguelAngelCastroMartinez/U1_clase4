<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Etiquetas flotantes</title>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Floating labels</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./input_group.php">Input group</a>
    </li>
  </ul>
</nav>

<br>
    <div class="container text-center">  
      <h1>Etiquetas flotantes</h1>
      <h5>Cree etiquetas de formulario maravillosamente simples que floten sobre sus campos de entrada.</h5>
    </div>
<br>
    <div class="container jumbotron ">  
      <h3>Ejemplo</h3>
      <p>Envuelva un par de elementos >input class="form-control"< y para habilitar etiquetas flotantes con los campos de formulario textual de Bootstrap. Se requiere A en cada uno, ya que nuestro método de etiquetas flotantes solo CSS utiliza el pseudoelemento. También tenga en cuenta que debe ir primero para que podamos utilizar un selector de hermanos (por ejemplo, ).>label<.form-floatingplaceholder>input<:placeholder-shown>input<~</p>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo Electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
<br>
      <p>Cuando hay un value ya definido, >label< se ajustará automáticamente a su posición flotante.</p>
    <form class="form-floating">
      <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="angel@hotmail.com">
      <label for="floatingInputValue">Entrada con valor</label>
    </form>
<br>
      <p>Los estilos de validación de formularios también funcionan como se esperaba.</p>
    <form class="form-floating">
      <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="angel02@hotmail.com">
      <label for="floatingInputInvalid">Entrada Invalida</label>
    </form>
<br>
      <h3>Textareas</h3>
      <p>De forma predeterminada, >textarea< s con .form-control tendrá la misma altura que >input< s. </p>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
      <label for="floatingTextarea">Comentarios</label>
    </div>
<br>
      <p>Para establecer una altura personalizada en su >textarea<, no use el rowsatributo. En su lugar, establezca un explícito height (ya sea en línea o mediante CSS personalizado).</p>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Comentarios</label>
    </div>
<br>
      <h3>Selecciona</h3>
      <p>Aparte de .form-control, las etiquetas flotantes solo están disponibles en .form-selects. Funcionan de la misma manera, pero a diferencia de >input< s, siempre mostrarán el >label< en su estado flotante. Selecciona con sizey multipleno es compatible.</p>
      <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>Abrir el menu de seleccion</option>
          <option value="1">Uno</option>
          <option value="2">Dos</option>
          <option value="3">Tres</option>
        </select>
          <label for="floatingSelect">Funcion con selectos</label>
      </div>
<br>
      <h3>Diseño</h3>
      <p>Cuando trabaje con el sistema de cuadrícula Bootstrap, asegúrese de colocar los elementos del formulario dentro de las clases de columna.</p>
    <div class="row g-2">
    <div class="col-md">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
        <label for="floatingInputGrid">Direccio de correo electronico</label>
      </div>
    </div>
    <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Abrir el menu de seleccion</option>
          <option value="1">Uno</option>
          <option value="2">Dos</option>
          <option value="3">Tres</option>
      </select>
     <label for="floatingSelectGrid">Funcion con selectos</label>
    </div>
    </div>
    </div>
<br>
</body>
</html>