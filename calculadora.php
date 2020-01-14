<form method="post" action="">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


    <Body>
        CALCULADORA SIMPLES (PHP)<br/>
    </Body>
        
   <input type="number" name="num1"  placeholder="1º Número">
    <br/><br/> 
    <select name="operacao">
               <option value="soma">+</option>
               <option value="subtrai">-</option>
               <option value="multiplica">*</option>
               <option value="divide">/</option>
           </select>
           <br/><br/> 
    <input type="number" name="num2"  placeholder="2º Número">     
     <input type="submit" value="enviar" />     
    </form>

    <?php
 if ($_POST['operacao'] == 'soma') {

   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $res=$num1 + $num2;
   echo"Resultado:  $res";
 }
 if ($_POST['operacao'] == 'subtrai') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res=$num1 - $num2;
    echo"Resultado:  $res";
  }

  if ($_POST['operacao'] == 'multiplica') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res=$num1 * $num2;
    echo"Resultado:  $res";
  }

  if ($_POST['operacao'] == 'divide') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res=$num1 / $num2;
    echo"Resultado:  $res";
  }

?>