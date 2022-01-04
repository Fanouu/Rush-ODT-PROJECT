<?php

namespace RushMDT\Fan\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

use RushMDT\Fan\Core;

class RushCommand extends Command{

    private $plugin;

    public function __construct() {
        parent::__construct("rush", "Join a game", "/rush", []);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {

        if ($sender instanceof Player) {
            
        }
    }

}