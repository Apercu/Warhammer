<?PHP

final Class Game
{
	public static $verbose = false;
	private $_p1;
	private $_p2;
	private $_grid;

	const NORTH = 0;
	const SOUTH = 2;
	const EAST = 1;
	const WEST = 3;

	public function __construct($p1, $p2)
	{
		$ships_p1 = array(
			new Ship_1 (
				0,
				5,
				0,
				Game::EAST),
			new Ship_2 (
				1,
				5,
				1,
				Game::EAST),
		);
		$ships_p2 = array(
			new Ship_1 (
				2,
				140,
				0,
				Game::WEST),
			new Ship_2 (
				3,
				140,
				1,
				Game::WEST),
		);

		$this->_listShip = array_merge($ships_p1, $ships_p2);
		$this->_p1 = new Player($p1, $ships_p1, $this->_listShip);
		$this->_p2 = new Player($p2, $ships_p2, $this->_listShip);

		while (!winner($this->_p1, $this->_p2))
		{
			turn();
			resetAll();
		}
		if (Game::$verbose == true)
			print ("Game constructed" . PHP_EOL);
	}

	private function turn()
	{
		while ($this->_p1->play() || $this->_p2->player())
	}

	private function resetAll()
	{
		$ships = $this->_p1->getShips();
		$ship2s = $this->_p2->getShips();
		foreach ($ships as $ship)
			$ship->setActivate(false);
		foreach ($ships2 as $ship)
			$ship->setActivate(false);
	}

	public static function rollDice()
	{
		return (rand(1, 6));
	}

	public static function winner($p1, $p2)
	{
		if (count($p1->getShips()) == 0 && count($p2->getShips()) > 0)
			print($p2->getName()." won");
		if (count($p1->getShips()) > 0 && count($p2->getShips()) == 0)
			print($p1->getName()." won");
		if (count($p1->getShips()) == 0 && count($p2->getShips()) ==  0)
			print("draw");
		//code for end the game;
	}
	public static function doc()
	{
		if (file_exists("Game.doc.txt"))
			return (file_get_contents("Game.doc.txt"));
	}

	public static function __destruct()
	{
		if (Game::$verbose == true)
			print ("Game destructed" . PHP_EOL);
	}

	public static function __toString()
	{
		if (Game::$verbose === true)
			return "(Game $this->_p1, $this->_p2)";
	}

}

?>
