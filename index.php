<?php 
 
 /* A è il dipendente, mentre B è la dipendenza */

class A {
  
  public $dip;
  
  public function __construct($dip) {
    $this->dip = $dip;
  }

}

$dipendenza = new B('param1','param2');
$oggetto = new A($dipendenza);

/* Se volessimo aggiungere parametri alla dipendenza? Benissimo, si può fare senza compromettere e alterare la classe dipendente */

$dipendenza = new B('param1','param2','param3', ecc);
$oggetto = new A($dipendenza);



?>
