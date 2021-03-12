<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Layout</title>
</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Layout</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./floating_labels.php">Floating labels</a>
    </li>
  </ul>
</nav>

<br>
    <div class="container text-center">  
      <h1>Diseño</h1>
      <h5>Dele a sus formularios algo de estructura, desde implementaciones en línea hasta horizontales y de cuadrícula personalizadas, con nuestras opciones de diseño de formularios.</h5>
    </div>

<br>
    <div class="container jumbotron ">  
      <h3>Formularios</h3>
      <p>Cada grupo de campos de formulario debe residir en un >form< elemento. Bootstrap no proporciona un estilo predeterminado para el >form< elemento, pero hay algunas funciones de navegador potentes que se proporcionan de forma predeterminada.</p>
      <ul>
        <li>¿Es nuevo en los formularios del navegador? Considere revisar los documentos del formulario MDN para obtener una descripción general y una lista completa de los atributos disponibles.</li>
        <li>>button< s dentro de un >form< valor predeterminado de type="submit", así que esfuércese por ser específico y siempre incluya un type.</li>
        <li>Puede deshabilitar todos los elementos de formulario dentro de un formulario con el disabledatributo en >form<.</li>
      </ul>
      <p>Desde Bootstrap se aplica display: blocky width: 100% que casi todos nuestros controles de formulario, formularios por defecto pila vertical. Se pueden usar clases adicionales para variar este diseño en función de cada formulario.</p>
<br>
      <h3>Utilidades</h3>
        <p>Las utilidades de margen son la forma más fácil de agregar algo de estructura a los formularios. Proporcionan agrupación básica de etiquetas, controles, texto de formulario opcional y mensajes de validación de formulario. Recomendamos ceñirse a los margin-bottomservicios públicos y utilizar una sola dirección en todo el formulario para mantener la coherencia.</p>
        <p>Siéntase libre de crear sus formularios como desee, con >fieldset< s, >div< s o casi cualquier otro elemento.</p>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Ejemplo de etiqueta</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ejemplo de marcador de posicion de entrada">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Otra etiqueta</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Otro marcador de posicion de entrada">
      </div>
<br>
      <h3>Cuadrícula de formulario</h3>
        <p>Se pueden construir formas más complejas usando nuestras clases de cuadrícula. Úselos para diseños de formularios que requieran varias columnas, anchos variados y opciones de alineación adicionales. Requiere que la $enable-grid-classesvariable Sass esté habilitada ( activada de forma predeterminada).</p>
      <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nombre (s)" aria-label="First name">
        </div>
      <div class="col">
            <input type="text" class="form-control" placeholder="Apellidos" aria-label="Last name">
        </div>
      </div>
<br>
      <h3>Canalones</h3>
        <p>Al agregar clases de modificador de medianil, puede tener control sobre el ancho del medianil tanto en la dirección en línea como en la del bloque. También requiere que la $enable-grid-classesvariable Sass esté habilitada (activada de forma predeterminada).</p>
      <div class="row g-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
      <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
     </div>
     <p></p>
     <p>También se pueden crear diseños más complejos con el sistema de cuadrícula.<p>

     <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Correo Electronico</label>
            <input type="Email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Contraseña</label>
            <input type="Password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Calle y numero">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Dirección 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, estudio o piso">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
            <option selected>Elegir...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Echa un vistazo
            </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrate</button>
        </div>
        </form>
<br>
      <h3>Forma horizontal</h3>
        <p>Cree formas horizontales con la cuadrícula agregando la .rowclase para formar grupos y usando las .col-*-*clases para especificar el ancho de sus etiquetas y controles. Asegúrese de agregar también .col-form-labela sus >label< mensajes de correo electrónico para que estén centrados verticalmente con sus controles de formulario asociados.</p>
        <p>A veces, es posible que necesite utilizar utilidades de margen o relleno para crear la alineación perfecta que necesita. Por ejemplo, hemos eliminado la padding-topetiqueta de entradas de radio apiladas para alinear mejor la línea de base del texto.</p>
        <form>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">Primer radio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">Segundo radio</label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                <label class="form-check-label" for="gridRadios3">Radio desactivado</label>
            </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">Casilla de verificación de ejemplo</label>
            </div>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Registrate</button>
        </form>
<br>
      <h3>Tamaño de etiqueta en forma horizontal</h3>
        <p>Asegúrese de utilizar .col-form-label-smo .col-form-label-lgpara sus >label< s o >legend< s para seguir correctamente el tamaño de .form-control-lgy .form-control-sm.</p>
        <div class="row mb-3">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Correo electronico</label>
          <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
          </div>
        </div>
        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Correo electronico</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
          </div>
        </div>
        <div class="row">
          <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Correo electronico</label>
          <div class="col-sm-10">
            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
          </div>
        </div>
<br>
      <h3>Dimensionamiento de columna</h3>
        <p>Como se muestra en los ejemplos anteriores, nuestro sistema de cuadrícula le permite colocar cualquier número de .cols dentro de un .row. Dividirán el ancho disponible equitativamente entre ellos. También puede elegir un subconjunto de sus columnas para ocupar más o menos espacio, mientras que los restantes .coldividen por igual el resto, con clases de columna específicas como .col-sm-7.</p>
        <div class="row g-3">
          <div class="col-sm-7">
            <input type="text" class="form-control" placeholder="Ciudad" aria-label="City">
          </div>
        <div class="col-sm">
            <input type="text" class="form-control" placeholder="Estado" aria-label="State">
        </div>
          <div class="col-sm">
            <input type="text" class="form-control" placeholder="Codigo postal" aria-label="Zip">
          </div>
        </div>
<br>
      <h3>Tamaño automático</h3>
        <p>El siguiente ejemplo usa una utilidad flexbox para centrar verticalmente el contenido y cambia .cola .col-auto para que sus columnas solo ocupen el espacio necesario. Dicho de otra manera, el tamaño de la columna se basa en el contenido.</p>
        <form class="row gy-2 gx-3 align-items-center">
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInput">Nombre</label>
                <input type="text" class="form-control" id="autoSizingInput" placeholder="Angel Castro">
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingInputGroup">Nombre de usuario</label>
                <div class="input-group">
                  <div class="input-group-text">@</div>
                  <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Preferenca</label>
                <select class="form-select" id="autoSizingSelect">
                <option selected>Elegir,...</option>
                <option value="1">Uno</option>
                <option value="2">Dos</option>
                <option value="3">Tres</option>
                </select>
            </div>
            <div class="col-auto">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">Recuérdame</label>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Registrate</button>
            </div>
        </form>
<br>
        <p>A continuación, puede volver a mezclarlo con clases de columna de tamaño específico.</p>
        <form class="row gx-3 gy-2 align-items-center">
          <div class="col-sm-3">
                <label class="visually-hidden" for="specificSizeInputName">Name</label>
                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Nombre">
          </div>
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
            <div class="input-group">
              <div class="input-group-text">@</div>
              <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Nomber de usuario">
            </div>
          </div>
          <div class="col-sm-3">
            <label class="visually-hidden" for="specificSizeSelect">Preference</label>
            <select class="form-select" id="specificSizeSelect">
            <option selected>Elegir...</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
            </select>
          </div>
          <div class="col-auto">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
              <label class="form-check-label" for="autoSizingCheck2">Recuérdame</label>
            </div>
          </div>
          <div class="col-auto">
              <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
<br>
      <h3>Formularios en línea</h3>
        <p>Utilice la .col-autoclase para crear diseños horizontales. Al agregar clases de modificadores de canaleta , tendremos canaletas en direcciones horizontal y vertical. El .align-items-centeralinea los elementos del formulario en el medio, haciendo que se .form-checkboxalineen correctamente.</p>
        <form class="row row-cols-lg-auto g-3 align-items-center">
        <div class="col-12">
        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <div class="input-group-text">@</div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nombre de usuario">
        </div>
        </div>
        <div class="col-12">
        <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
        <select class="form-select" id="inlineFormSelectPref">
            <option selected>Elegir...</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
        </select>
        </div>
        <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
            <label class="form-check-label" for="inlineFormCheck">Recuerdame</label>
        </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
<br>
</body>
</html>