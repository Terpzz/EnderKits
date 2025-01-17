<?php

declare(strict_types=1);

namespace Terpz710\EnderKits;

use pocketmine\plugin\PluginBase;
use Terpz710\EnderKits\Command\KitCommand;
use Terpz710\EnderKits\Command\KitsCommand;
use Terpz710\EnderKits\Task\CoolDownTask;
use Terpz710\EnderKits\Task\CooldownManager;
use Terpz710\BankNotesPlus\BankNotesPlus;

class Main extends PluginBase {

    public function onEnable(): void {
        $rankSystem = $this->getServer()->getPluginManager()->getPlugin("RankSystem");
        $bankNotePlugin = $this->getServer()->getPluginManager()->getPlugin("BankNotesPlus");

        if ($rankSystem !== null && $bankNotePlugin instanceof BankNotesPlus) {
            $cooldownManager = new CooldownManager($this);
            $this->getServer()->getCommandMap()->register("kit", new KitCommand($this, $cooldownManager, $bankNotePlugin));
            $this->getServer()->getCommandMap()->register("kits", new KitsCommand($this, $cooldownManager));
            $this->saveResource("kits.yml");

            $cooldownTask = new CoolDownTask($this);
            $this->getScheduler()->scheduleRepeatingTask($cooldownTask, 20 * 60);
        }
    }
}
