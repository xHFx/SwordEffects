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
if(!file_exists($this->getDataFolder() . "config.yml")) {
            @mkdir($this->getDataFolder());
             file_put_contents($this->getDataFolder() . "config.yml",$this->getResource("config.yml"));
        }$this->getServer()->getLogger()->info(TextFormat::BLUE."[SwordEffects]Plugin Enabled!");
$this->getServer()->getPluginManager()->registerEvents($this,$this);

}

public function onHurt(EntityDamageEvent $event){
if($event instanceof EntityDamageByEntityEvent){
if($event->getDamager()->getInventory()->getItemInHand()->getId() === 276){
				$event->getEntity()->addEffect(Effect::getEffect($this->getConfig()->get("DiamondSwordEffect"))->setAmplifier($this->getConfig()->get("DiamondSwordAmp"))->setDuration($this->getConfig()->get("DiamondSwordTime"))->setVisible(false));
    }
    }
    }
    }
