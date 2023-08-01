<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
          <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    
    <div class="card mt-5">
    <div class="card-header">
        
    </div>
    <div class="card-body">
        
    <center>
    <h1>Calculadora de IMC</h1>
    <br>
    <form method="post" action="Controller/calcular.php">
        <label for="altura"><b><h4>Altura (en metros):</h4></b></label>
        <input type="text" name="altura" required>
        <br>
        <br>
        <label for="altura"><b><h4>Peso (en kilogramos):</h4></b></label>
        <input type="text" name="peso" required>
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Calcular">
    </form>
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


