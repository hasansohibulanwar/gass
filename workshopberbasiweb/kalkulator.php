<?php
//Kalkulator Menggunakan OOP
 
class Hitung
{
  private $x;
  private $y;
 
  public function tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }
 
  public function kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }
 
  public function kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }
 
  public function bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }
 
  public function tampil()
  {
    echo '<form method="POST">';
    echo '<input type="text" name="x"> &nbsp;';
   
    echo '<select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">x</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
    </select> &nbsp;';
   
    echo '<input type="text" name="y"> &nbsp;';
    echo '<label>=</label> &nbsp;';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
  }
}
 
$data = new Hitung();
$data->tampil();
 
if ($_POST) {
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
  }
}
?>