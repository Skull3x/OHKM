<?php
namespace OHKM;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onDamage(EntityDamageByEntityEvent $action){
$m = $action->getEntity();
$p = $action->getDamager();
if($m instanceof Creature){
$m->kill();
}
}
