<?php

namespace RushMDT\Fan\Utils;

use RushMDT\Fan\Core;

class Loader{
	public static function loadEvents(){

        $Events = [];

        foreach($Events as $ev => $event){
            Core::getInstance()->getServer()->getPluginManager()->registerEvents($event, Core::getInstance());
        }
        $count = count($Events);
        Core::getInstance()->getLogger()->info("§d$count §fEvent(s) load");
    }

    public static function loadTasks(){

        $Tasks = [];

        foreach($Tasks as $ta => $task){
            Core::getInstance()->getScheduler()->scheduleRepeatingTask($task, 20);
        }

        $count = count($Tasks);
        Core::getInstance()->getLogger()->info("§d$count §fTask(s) loaded");
    }

    public static function loadCommands(){

        $Commands = [];

        foreach($Commands as $com => $cmd){
            Core::getInstance()->getServer()->getCommandMap()->register($com, $cmd);
        }

        $count = count($Commands);
        Core::getInstance()->getLogger()->info("§d$count §fCommand(s) loaded");
    }

    public static function loadDirectoriers(){
    	$Directorys = [
    		"Games/"
    	];

    	foreach($Directorys as $dire => $dir){
            @mkdir(Core::getInstance()->getDataFolder().$dir);
        }

        $count = count($Directorys);
        Core::getInstance()->getLogger()->info("§d$count §fDirectory(s) loaded");
    }
}