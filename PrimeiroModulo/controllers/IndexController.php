<?php 

class PrimeiroTeste_PrimeiroModulo_IndexController extends Mage_Core_Controller_Front_Action{
	public function indexAction(){
		echo "Hello World";
	
//
//	public function goodbyeAction()
//   echo 'Goodbye World!';
//	}
//
//	public function paramsAction() {
//    echo '
//';            
//    foreach($this->getRequest()->getParams() as $key=>$value) {
//       echo '
//Param: '.$key.'
//';
//        echo '
//Value: '.$value.'
//';
//    }
//   echo '
//';
//	}
	$this->loadLayout(); //carrega o layout
    $this->renderLayout(); //renderiza o layout
}

public function goodbyeAction(){
	echo "Goodbye";
	$this->loadLayout(); //carrega o layout
	$this->renderLayout(); //renderiza o layout
	}
} 	


 	

