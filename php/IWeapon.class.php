<?PHP
interface IWeapon
{
    /*private $_id;
    private $_name;
	private $_ammunition;*/

	public function shoot($listShips, $current);

    public function setAmmunition($a);

	public function getAmmunition();

	public function getId();
}
?>
