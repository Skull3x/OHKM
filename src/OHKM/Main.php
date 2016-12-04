<?php
namespace OHKM;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\entity\Creature;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDamage(EntityDamageEvent $action){
    if($action instanceof EntityDamageByEntityEvent){
      $m = $action->getEntity();
      $p = $action->getDamager();
      if($m instanceof Creature && $p instanceof Player){
        $m->kill();
      }
    }
  }
}
?>
