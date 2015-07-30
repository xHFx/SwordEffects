<?php

namespace SwordEffects;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\entity\Effect;

class Main extends PluginBase implements Listener{

public function onEnable()
{
$this->getServer()->getLogger()->info(TextFormat::BLUE."[SE]Plugin Enabled!");
$this->getServer()->getPluginManager()->registerEvents($this,$this);

}

public function onHurt(EntityDamageEvent $event){
if($event instanceof EntityDamageByEntityEvent){
if($event->getDamager()->getInventory()->getItemInHand()->getId() === 276){
				$event->getEntity()->addEffect(Effect::getEffect(19)->setAmplifier(1)->setDuration(6000)->setVisible(false));
    				$event->getEntity()->addEffect(Effect::getEffect(18)->setAmplifier(1)->setDuration(6000)->setVisible(false));
    }
    }
    }
    }
