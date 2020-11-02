<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Basic Calculator </title>
  </head>
  <body>

    <form action="hasil.php" method="post">

      <h1>ARITMATIKA</h1>

      <!-- inputan pertama -->
      <input type="number" name="number1">

      <!-- operator -->
      <select name="operator">
        <option value="tambah"> + </option>
        <option value="kurang"> - </option>
        <option value="bagi"> / </option>
        <option value="kali"> * </option>
        <option value="modulo"> % </option>
      </select>

      <!-- inputan kedua -->
      <input type="number" name="number2" >

      <!-- submit -->
      <button type="submit" name="submit"> Hasil </button>
    </form>

  </body>
</html>
