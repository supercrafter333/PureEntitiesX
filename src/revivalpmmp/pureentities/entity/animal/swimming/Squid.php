<?php
declare(strict_types=1);

/**
 * PureEntitiesX: Mob AI Plugin for PMMP
 * Copyright (C)  2018 RevivalPMMP
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace revivalpmmp\pureentities\entity\animal\swimming;

use pocketmine\item\Item;
use revivalpmmp\pureentities\data\Data;
use revivalpmmp\pureentities\entity\animal\Animal;

class Squid extends \pocketmine\entity\Squid implements Animal{
	//TODO implement
	const NETWORK_ID = Data::NETWORK_IDS["squid"];

	public $speed;

    public function initEntity() : void{
        parent::initEntity();
        $this->speed = 0.8;
    }

    public function getName() : string{
        return "Squid";
    }

    public function getSpeed() : float{
        return 0.8;
    }

    public function getMaxHealth() : int{
        return 10;
    }

    public function getDrops() : array{
        return [Item::get(351, 0, mt_rand(1, 3))];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(3, 4);
    }
}
