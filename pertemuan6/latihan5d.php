<form method="post" action="">
  <input type="text" name="angka" placeholder="Masukkan angka">
  <input type="submit" value="Tampilkan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $angka = $_POST['angka'];

  for ($i = $angka; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }
}
?>