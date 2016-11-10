<?php

class Auto{
	private $color;
	private $kraftstoff;
	private $bauart;
	public $Counter = 0;
	
	
	public function setFarbe($ks){
		$this->color = $ks;
		echo "Farbe: $this->color";
	}
	
	public function Treibstoff($ks){
		$this->kraftstoff = $ks;
		echo "Treibstoff: $this->kraftstoff";
	}
	
	public function setBauart($ks){
		$this->bauart = $ks;
		echo "Bauart: $this->bauart";
	}
	
	public function tankDeckelOeffnen($ks){
		$_SESSION['betankungen']++;
		$this->Counter++;
		$this->kraftstoff = $ks;
		echo "<h4>Bitte mit $this->kraftstoff betanken.</h4>";
	}
}

?>