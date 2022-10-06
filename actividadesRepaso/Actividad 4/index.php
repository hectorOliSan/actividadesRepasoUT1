<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 4</title>
  <style>
    * {
      font-size: 40px;
    }

    table {
      border: 2px solid #04AB66;
    }

    select {
      padding-right: 80px;
    }

    .number {
      background-color: #40E0D0;
    }

    .operator {
      color: #FF0000;
    }
  </style>
</head>
<body>
  <?php
    $output = 0;
    if(count($_POST)) {

      switch($_POST['operator']) {
        case "+":
          $output = $_POST['number1'] + $_POST['number2'];
          break;
        case "-":
          $output = $_POST['number1'] - $_POST['number2'];
          break;
        case "*":
          $output = $_POST['number1'] * $_POST['number2'];
          break;
        case "/":
          $output = $_POST['number1'] / $_POST['number2'];
          break;
      }

      $output = number_format($output, 2);
    }
  ?>
  <form action="" method="POST">
    <table>
      <tr>
        <th class="number">Enter Number</th>
        <td>
          <?php
            if(count($_POST))
              echo "<input type='number' name='number1' placeholder='".$_POST['number1']."' min=1 max=20 required>";
            else
              echo"<input type='number' name='number1' min=1 max=20 required>";
          ?>
        </td>
      </tr>
      <tr>
        <th class="operator">Select Operator</th>
        <td>
          <select name="operator">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
          </select>
        </td>
      </tr>
      <tr>
        <th class="number">Enter Number</th>
        <td>
          <?php
            if(count($_POST))
              echo "<input type='number' name='number2' placeholder='".$_POST['number2']."' min=1 max=20 required>";
            else
              echo"<input type='number' name='number2' min=1 max=20 required>";
          ?>
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <input type="submit" value="Calculate">
        </td>
      </tr>
      <tr>
        <th class="number">Output =</th>
        <td>
          <?php if(count($_POST)) echo $output; ?>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>