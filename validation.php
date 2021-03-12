<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Validacion</title>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="background-color: #9FF1F0;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Validation</a>
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
    <li class="nav-item">
        <a class="nav-link text-dark" href="./layout.php">Layout</a>
    </li>
  </ul>
</nav>

<br>
    <div class="container text-center">  
      <h1>Validación</h1>
      <h5>Proporcione comentarios valiosos y procesables a sus usuarios con la validación de formularios HTML5, a través de comportamientos predeterminados del navegador o estilos personalizados y JavaScript.</h5>
    </div>
<br>
<div class="container jumbotron ">  
      <h3>Cómo funciona</h3>
      <p>Así es como funciona la validación de formularios con Bootstrap:<p>
      <ul>
        <li>La validación de formularios HTML se aplica a través de las dos pseudoclases de CSS :invalidy :valid. Se aplica a >input<, >select< y >textarea< elementos.</li>
        <li>Bootstrap aplica los estilos :invalidy :valida la .was-validatedclase principal , generalmente se aplica a >form<. De lo contrario, cualquier campo obligatorio sin un valor aparece como no válido al cargar la página. De esta manera, puede elegir cuándo activarlos (generalmente después de intentar enviar el formulario).</li>
        <li>Para restablecer la apariencia del formulario (por ejemplo, en el caso de envíos de formularios dinámicos usando AJAX), elimine la .was-validatedclase de la parte >form< posterior después del envío.</li>
        <li>Como respaldo, se pueden usar clases .is-invalidy en .is-validlugar de las pseudoclases para la validación del lado del servidor . No requieren una .was-validatedclase para padres.</li>
        <li>Debido a las limitaciones en el funcionamiento de CSS, no podemos (en la actualidad) aplicar estilos a un >label< control de formulario en el DOM anterior sin la ayuda de JavaScript personalizado./li>
        <li>Todos los navegadores modernos admiten la API de validación de restricciones , una serie de métodos JavaScript para validar controles de formulario.</li>
        <li>Los mensajes de comentarios pueden utilizar los valores predeterminados del navegador (diferentes para cada navegador, y no se pueden estilizar a través de CSS) o nuestros estilos de comentarios personalizados con HTML y CSS adicionales.</li>
        <li>Puede proporcionar mensajes de validez personalizados setCustomValidityen JavaScript.</li>
      </ul>
      <p>Con eso en mente, considere las siguientes demostraciones para nuestros estilos de validación de formularios personalizados, clases opcionales del lado del servidor y valores predeterminados del navegador.<p>
<br>
      <h3>Estilos personalizados</h3>
      <p>Para mensajes personalizados de validación de formularios Bootstrap, deberá agregar el novalidateatributo booleano a su >form<. Esto deshabilita la información sobre herramientas de comentarios predeterminada del navegador, pero aún proporciona acceso a las API de validación de formularios en JavaScript. Intente enviar el formulario a continuación; nuestro JavaScript interceptará el botón de envío y le enviará comentarios. Al intentar enviar, verá los estilos :invalidy :validaplicados a sus controles de formulario.</p>
      <p>Los estilos de comentarios personalizados aplican colores, bordes, estilos de enfoque e iconos de fondo personalizados para comunicar mejor los comentarios. Los iconos de fondo para mensajes de correo electrónico >select< solo están disponibles con .form-select, y no .form-control.</p>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" id="validationCustom01" value="Miguel Angel" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationCustom02" value="Castro Martinez" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                Por favor, elija un nombre de usuario.
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
            Proporcione una ciudad válido.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Estado</label>
            <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Elegir...</option>
            <option>...</option>
            </select>
            <div class="invalid-feedback">Proporcione un estado válido.</div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
            Proporcione un código postal válido.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Acepta los términos y condiciones
            </label>
            <div class="invalid-feedback">
                Debes estar de acuerdo antes de enviar.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar formulario</button>
        </div>
        </form>

<br>
      <h3>Valores predeterminados del navegador</h3>
      <p>¿No le interesan los mensajes de retroalimentación de validación personalizados o la escritura de JavaScript para cambiar los comportamientos de los formularios? Todo bien, puede utilizar los valores predeterminados del navegador. Intente enviar el formulario a continuación. Dependiendo de su navegador y sistema operativo, verá un estilo de comentarios ligeramente diferente.</p>
      <p>Si bien estos estilos de comentarios no se pueden diseñar con CSS, aún puede personalizar el texto de comentarios a través de JavaScript.</p>
      <form class="row g-3">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" id="validationDefault01" value="Angel" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationDefault02" value="Castro Martinez" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Nombre de usuario</label>
            <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Estado</label>
            <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Elegir...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
                Acepto los terminos y condiciones
            </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar formulario</button>
        </div>
      </form>
<br>
      <h3>Lado del servidor</h3>
      <p>Recomendamos utilizar la validación del lado del cliente, pero en caso de que necesite una validación del lado del servidor, puede indicar campos de formulario válidos y no válidos con .is-invalid y .is-valid. Tenga en cuenta que .invalid-feedbacktambién es compatible con estas clases.<p>
      <p>En el caso de campos no válidos, asegúrese de que el mensaje de error / comentario no válido esté asociado con el campo de formulario relevante utilizando aria-describedby(teniendo en cuenta que este atributo permite que idse haga referencia a más de uno , en caso de que el campo ya apunte a texto de formulario adicional).<p>
      <p>Para solucionar problemas con radios de borde , los grupos de entrada requieren una .has-validationclase adicional .<p>
      <form class="row g-3">
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Nombre(s)</label>
            <input type="text" class="form-control is-valid" id="validationServer01" value="Angel" required>
            <div class="valid-feedback">
            ¡Bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">Apellidos</label>
            <input type="text" class="form-control is-valid" id="validationServer02" value="Castro Martinez" required>
            <div class="valid-feedback">
            ¡Bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServerUsername" class="form-label">Nombre de usuario</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                Por favor, elija un nombre de usuario.
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">Ciudad</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
            Proporcione una ciudad válida.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer04" class="form-label">Estado</label>
            <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback">
            Proporcione un estado válido.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationServer05" class="form-label">Codigo Postal</label>
            <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
            <div id="validationServer05Feedback" class="invalid-feedback">
            Proporcione un codigo postal válido.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
                Acepto los termiinos y condiciones
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
                Debes estar de acuerdo antes de enviar.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar Formulario</button>
        </div>
        </form>
<br>
      <h3>Elementos soportados</h3>
      <p>Los estilos de validación están disponibles para los siguientes controles y componentes de formulario:</p>
        <ul>
            <li>>input< s y >textarea< s con .form-control (incluido hasta uno .form-controlen los grupos de entrada)</li>
            <li>>select< s con .form-select</li>
            <li>.form-checks</li>
        </ul>
        <form class="was-validated">
        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Textarea</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <div class="invalid-feedback">Porfavor introduzca un mensaje en textarea.</div>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
            <label class="form-check-label" for="validationFormCheck1">Marque esta casilla de verificación</label>
            <div class="invalid-feedback">Texto de comentario no válido</div>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
            <label class="form-check-label" for="validationFormCheck2">Alternar esta radio</label>
        </div>
        <div class="form-check mb-3">
            <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
            <label class="form-check-label" for="validationFormCheck3">O alternar esta otra radio</label>
            <div class="invalid-feedback">Más ejemplos de texto de comentario no válido</div>
        </div>
        <div class="mb-3">
            <select class="form-select" required aria-label="select example">
            <option value="">Abrir este menú de selección</option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres
            </option>
            </select>
            <div class="invalid-feedback">Ejemplo de retroalimentación de selección no válida</div>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" aria-label="file example" required>
            <div class="invalid-feedback">Ejemplo de comentario de archivo de formulario no válido</div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit" disabled>Enviar formulario</button>
        </div>
        </form>
<br>
        <div class="container">
          <img src="./imagenes/Iron_Man.jpg" class="mx-auto d-block" alt="Iron Man" title="Iron Man" width="933" height="479"/> 
        </div>
<br>
</body>
</html>