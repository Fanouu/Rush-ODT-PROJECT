<?php

namespace RushMDT\Fan;

use pocketmine\plugin\PluginBase;
use RushMDT\Fan\Utils\Loader;

class Core extends PluginBase{

	public static $instance;

	protected function onEnable(): void{
		$this->getLogger()->info("Plugin en cours de chargements");
		self::$instance = $this;
		Loader::loadEvents();
		Loader::loadCommands();
		Loader::loadTasks();
		Loader::loadDirectories();
		$this->getLogger()->info("Plugin charger avec succès");

	}

	public static function getInstance(): Core{
		return self::$instance;
	}
}