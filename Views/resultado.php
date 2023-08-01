<!DOCTYPE html>
<html>
<head>
    <title>Resultado del IMC</title>
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

    <div class="card mt-5">
        <div class="card-header">
     <center>   <h1>Resultado del IMC</h1></center>
        </div>
        <div class="card-body">
        <center>

<?php if ($imc !== null): ?>
    <h2>Tu Índice de Masa Corporal (IMC) es: <?php echo $imc; ?></h2>
    <p>Interpretación del IMC: <?php echo $interpretacion; ?></p>
<?php else: ?>
    <h2>N/A</h2>
    <p>Por favor, ingresa valores válidos para altura y peso.</p>
<?php endif; ?>
<a href="../index.php" class="btn btn-warning">Regresar al Inicio</a>
</center>
        </div>
        <div class="card-footer text-muted">
           
        </div>
    </div>

 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>




