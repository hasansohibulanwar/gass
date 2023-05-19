<?php 
  abstract class BangunDatar{
    abstract protected function hitungLuas();
  }
  class Persegi extends BangunDatar{
    protected $sisi = 4;
 
    public function hitungLuas(){
      return pow($this->sisi,2);
    }
  }
  class Segitiga extends BangunDatar{
    protected $alas = 4;
    protected $tinggi = 3;
 
    public function hitungLuas(){
      return (0.5 * $this->alas * $this->tinggi);
    }
  }
  class Lingkaran extends BangunDatar{
    protected $jarijari = 7;
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
  ?>