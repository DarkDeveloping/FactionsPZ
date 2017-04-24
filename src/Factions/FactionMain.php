<?php

namespace Factions\FactionMain;

/* DEVELOPED BY @ZorexDesigns, @Pizzahaet, & @Derpific
*[Insert Cool Stuff Here]
*
*
*
*
*
*
*
*
*
*
*/

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

 class FactionMain extends PluginBase {
  public function onEnable(){
   $this->getLogger->info("§2§lFactions§4PZ §3ENABLED!");
   $this->getServer->getPluginManager->registerEvents($this, $this);
   //Todo Decide on config setup and stuff
   }
 
 }
