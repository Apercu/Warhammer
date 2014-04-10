<?PHP
require_once("Player.class.php");
//require_once("Hunter.class.php");
require_once("Destroyer.class.php");

final Class Game
{
	public static $verbose = false;
	private $_p1;
	private $_p2;
	private $_grid;
	private $_turn = 0;

	const NORTH = 0;
	const SOUTH = 2;
	const EAST = 1;
	const WEST = 3;

	public function __construct($p1, $p2)
	{
		$ships_p1 = array(
			new Destroyer (array(
				'id' => 0,
				'name' => 'the uncatchable',
				'x' => 0,
				'y' => 5,
				'orientation' => Game::EAST
			)),
			new Destroyer (array(
				'id' => 1,
				'name' => 'the asdlaksj',
				'x' => 4,
				'y' => 7,
				'orientation' => Game::EAST
			))
		);
		$ships_p2 = array(
			new Destroyer (array(
				'id' => 2,
				'name' => 'the asdasdsuncatchable',
				'x' => 10,
				'y' => 15,
				'orientation' => Game::EAST
			)),
			new Destroyer (array(
				'id' => 3,
				'name' => 'the asdlakskadjlskdjsalj',
				'x' => 14,
				'y' => 17,
				'orientation' => Game::EAST
			))
		);

		$this->_listShip = array_merge($ships_p1, $ships_p2);
		$this->_p1 = new Player($p1, $ships_p1, $this->_listShip);
		$this->_p2 = new Player($p2, $ships_p2, $this->_listShip);

		if (Game::$verbose == true)
			print ("Game constructed" . PHP_EOL);
	}

	private function turn()
	{
		if ($this->_turn)
			$this->_turn = 0;
		else
			$this->_turn = 1;
		$this->_p1->play();
		$this->_p2->play();
			;
	}

	private function resetAll()
	{
		$ships = $this->_p1->getShips();
		$ship2s = $this->_p2->getShips();
		foreach ($ships as $ship)
			$ship->reset();
		foreach ($ships2 as $ship)
			$ship->reset();
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

	public function __destruct()
	{
		if (Game::$verbose == true)
			print ("Game destructed" . PHP_EOL);
	}

	public function __toString()
	{
		if (Game::$verbose === true)
			return "(Game $this->_p1, $this->_p2)";
	}

	public function getListShip () {
		$res = array();
		foreach ($this->_listShip as $ship) {
			array_push($res, $ship->getData());
		}
		return $res;
	}

	private function getShipById($id)
	{
		foreach ($this->listShip as $ship)
		{
			if ($ship->getId() == $id)
				return $ship;
		}
	}

	public function setListShip ($array)
	{
		foreach ($array as $elem)
		{
			$ship = getShipById($elem['id']);
			$ship->setData($elem);
		}
	}
}

?>
