<?php 
 
 /************** A è il dipendente, mentre B è la dipendenza **************/

class A {
  
  public $dip;
  
  public function __construct($dip) {
      $this->dip = $dip;
  }

}

$dipendenza = new B('param1','param2');
$oggetto = new A($dipendenza);

/* 
 Se volessimo aggiungere parametri alla dipendenza? Benissimo, si può fare senza compromettere e alterare la classe dipendente 
*/

$dipendenza = new B('param1','param2','param3', ecc);
$oggetto2 = new A($dipendenza);


/*
 Se volessimo cambiare dipendenza? Se volessimo rimpiazzarlo con un oggetto mock per il testing oppure semplicemente utilizzare
 una dipendenza diversa, aiutandoci eventualmente con un'interfaccia? Niente di più semplice!!
*/

$dipendenza3 = new C($param4, $param6);
$oggetto3 = new A($dipendenza3);

/*
 oppure utilizzando un'interfaccia. L'idea è quella di non toccare mai l'istanza di C e iniettare la dipendenza che preferiamo.
*/

interface dipInterface {
    public function doSomething(); //tutti i metodi dichiarati sono astratti quindi è implicito
}

class C {
 
    private $dip;
 
    public function __construct( dipInterface $dip ) {
        $this->dip = $dip;
    }
}

$dipendenza4 = new DependencyBis(); //all'interno implementerà l'interfaccia ed il metodo
$obj4 = new C($dipendenza4);



?>
