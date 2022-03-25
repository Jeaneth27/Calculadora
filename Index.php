<?php
 include('Operaciones.php');

    $total=0;
    
    if(isset($GET['n1']))
    if(isset($GET['n2']))
    {
        $Objeto=new Operaciones();

        $n1=$_GET['n1'];
        $m2=$_GET['n2'];

        $total=$Objeto->Suma($n1,$n2);
    }
    

?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <h1 align="center">CALCULADORA</h1>
        <h4 align="center"> Jeaneth Orellana</h4>
    </div>

    <form method="get" action=" Index.php">
        <div class="row">
            <div class="input-field col s6">
                <input name=n1 id="n1" type="number" class="validate">
                <label class="active" for="n1">Primer Valor</label>
            </div>

            <div class="input-field col s6">
                <input name=n2 id="n2" type="number" class="validate">
                <label class="active" for="n2">Segundo Valor</label>
            </div>
        </div>

        <div class="imput-field col s6">
            <label>Opciones</label>
             <br>
            <select name="opcion" class="browser-default">
      <option value="suma">suma</option>
      <option value="multiplicacion">multiplicacion</option>
      <option value="Division">Division</option>
      <option value="resta">resta</option>
  </select>
        </div>

        <div class="container">
            <input type="submit" value="Sumar" class="waves-effect waves-light btn">
        </div>
    </form>

    <script>

document.addEventListener('DOMContentLoaded', function() {

var elems = document.querySelectorAll('select');

var instances = M.FormSelect.init(elems, options);

});


</script>


    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>

</html>

<?php

    echo '<h1>El resultado es:' .$total. '<h1>';

?>
