<?PHP
Class Laser implements IWeapon
{
    private $_id;
    private $_name;
    private $_ammunition;
    private $_weapon_position;
    public static $verbose = False;

    public function __construct($id)
    {
        $this->_id = $id;
        $this->_name = "laser";
        if (self::verbose)
            print("Laser instance constructed");
    }

    public function setAmmunition($a)
    {
        $this->_ammunition = $a;
    }

    public function getAmmunition()
    {
        return $this->_ammunition;
    }

    public function shoot($listShips, $current)
    {
        $range = Game::rollDice();
        if ($range == 5)
            $range = 60;
        else if ($range == 6)
            $range = 80;
        else
            $range = 40;
        else if ($range )
        if ($current->getSize() % 2 != 0)
        {
            if ($current->getOrientation() == Game::EAST)
                $this->_weapon_position = array($current->getX() + $current->getSize() - 1, $current->getY() + round($current->getSize() / 2) - 1);
            else if ($current->getOrientation() == Game::WEST)
                $this->_weapon_position = array($current->getX(), $current->getY() + round($current->getSize() / 2) - 1)
            else if ($current->getOrientation() == Game::SOUTH)
                $this->_weapon_position = array($current->getX() + round($current->getSize() / 2) - 1, $current->getY() + $current->getSize() - 1)
            else if ($current->getOrientation() == Game::NORTH)
                $this->_weapon_position = array($current->getX() + round($current->getSize() / 2) - 1, $current->getY())
        }
        else
        {
            if ($current->getOrientation() == Game::EAST)
                $this->_weapon_position = array($current->getX() + $current->getSize() - 1, $current->getY() + $current->getSize() / 2);
            else if ($current->getOrientation() == Game::WEST)
                $this->_weapon_position = array($current->getX(), $current->getY() + $current->getSize() / 2 - 1)
            else if ($current->getOrientation() == Game::SOUTH)
                $this->_weapon_position = array($current->getX() + $current->getSize() / 2 - 1, $current->getY() + $current->getSize() - 1)
            else if ($current->getOrientation() == Game::NORTH)
                $this->_weapon_position = array($current->getX() + $current->getSize() / 2 - 1, $current->getY())
        }
        $i = 0;
        if ($current->getOrientation() == Game::EAST)
        {
            while ($i < $range)
            {
                $this->_weapon_position[0];
                foreach ($listShips as $ships)
                {

                }
                $i++;
            }
        }
    }
}
