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
use revivalpmmp\pureentities\entity\animal\SwimmingAnimal;

class Pufferfish extends SwimmingAnimal{
	const NETWORK_ID = Data::NETWORK_IDS["pufferfish"];

	public function initEntity() : void{
		parent::initEntity();
		$this->speed = 1.1;
	}

	public function getName() : string{
		return "PufferFish";
	}

	public function getSpeed() : float{
		return $this->speed;
	}

	public function getMaxHealth() : int{
		return 5;
	}

	public function getDrops() : array{
		return [Item::get(461, 0, 1)];
	}

	public function updateXpDropAmount() : void{
	    $this->xpDropAmount = 2;
	}
}                                                                                                                                           
