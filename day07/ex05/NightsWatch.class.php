<?php
class NightsWatch implements IFighter
{
	private $rec = array();
	public function recruit($var)
	{
		$this->rec[] = $var;
	}
	function fight()
	{
		foreach ($this->rec as $var) {
			if (method_exists(get_class($var), 'fight'))
				$var->fight();
		}
	}
}
?>