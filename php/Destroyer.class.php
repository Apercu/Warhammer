<?php

class Destroyer extends Ships{

	protected $_size = array('x' => 4, 'y' =>4);
	protected $_image = 0;
	protected $_lives = 10;
	protected $_speed = 10;
	protected $_shields = 0;
	protected $_PP = 8;
	protected $_activate = False;
	protected $_boost = 0;
	protected $_maxMove = 0;
	protected array $_weapons;

	public function __construct ( array $kwargs ){
		parent::__construct($kwargs)
	}
	private function setWeapons(){
		$gun1 = new Laser( 1 );
		$gun2 = new Laser( 2 );
		$this->_weapons('1' => $gun1, '2' => $gun2);
	}
}

?>
