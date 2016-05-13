<?php

$data = '{
   "data": {
      "21": {
         "id": 21,
         "description": "Shields your champion for 115-455 (depending on champion level) for 2 seconds.",
         "name": "Barrier",
         "key": "SummonerBarrier",
         "summonerLevel": 4
      },
      "3": {
         "id": 3,
         "description": "Exhausts target enemy champion, reducing their Movement Speed and Attack Speed by 30%, their Armor and Magic Resist by 10, and their damage dealt by 40% for 2.5 seconds.",
         "name": "Exhaust",
         "key": "SummonerExhaust",
         "summonerLevel": 4
      },
      "2": {
         "id": 2,
         "description": "Reveals a small area of the map for your team for 5 seconds.",
         "name": "Clairvoyance",
         "key": "SummonerClairvoyance",
         "summonerLevel": 8
      },
      "1": {
         "id": 1,
         "description": "Removes all disables and summoner spell debuffs affecting your champion and lowers the duration of incoming disables by 65% for 3 seconds.",
         "name": "Cleanse",
         "key": "SummonerBoost",
         "summonerLevel": 6
      },
      "7": {
         "id": 7,
         "description": "Restores 90-345 Health (depending on champion level) and grants 30% Movement Speed for 1 second to you and target allied champion. This healing is halved for units recently affected by Summoner Heal.",
         "name": "Heal",
         "key": "SummonerHeal",
         "summonerLevel": 1
      },
      "30": {
         "id": 30,
         "description": "Quickly travel to the Poro King\'s side.",
         "name": "To the King!",
         "key": "SummonerPoroRecall",
         "summonerLevel": 1
      },
      "6": {
         "id": 6,
         "description": "Your champion can move through units and has 27% increased Movement Speed for 10 seconds.",
         "name": "Ghost",
         "key": "SummonerHaste",
         "summonerLevel": 1
      },
      "32": {
         "id": 32,
         "description": "Throw a snowball in a straight line at your enemies. If it hits an enemy, they become marked and your champion can quickly travel to the marked target as a follow up.",
         "name": "Mark",
         "key": "SummonerSnowball",
         "summonerLevel": 1
      },
      "4": {
         "id": 4,
         "description": "Teleports your champion a short distance toward your cursor\'s location.",
         "name": "Flash",
         "key": "SummonerFlash",
         "summonerLevel": 8
      },
      "31": {
         "id": 31,
         "description": "Toss a Poro at your enemies. If it hits, you can quickly travel to your target as a follow up.",
         "name": "Poro Toss",
         "key": "SummonerPoroThrow",
         "summonerLevel": 1
      },
      "17": {
         "id": 17,
         "description": "Allied Turret: Grants massive regeneration for 8 seconds. Enemy Turret: Reduces damage dealt by 80% for 8 seconds.",
         "name": "Garrison",
         "key": "SummonerOdinGarrison",
         "summonerLevel": 1
      },
      "13": {
         "id": 13,
         "description": "Restores 40% of your champion\'s maximum Mana. Also restores allies for 40% of their maximum Mana.",
         "name": "Clarity",
         "key": "SummonerMana",
         "summonerLevel": 1
      },
      "14": {
         "id": 14,
         "description": "Ignites target enemy champion, dealing 70-410 true damage (depending on champion level) over 5 seconds, grants you vision of the target, and reduces healing effects on them for the duration.",
         "name": "Ignite",
         "key": "SummonerDot",
         "summonerLevel": 10
      },
      "11": {
         "id": 11,
         "description": "Deals 390-1000 true damage (depending on champion level) to target epic or large monster or enemy minion.",
         "name": "Smite",
         "key": "SummonerSmite",
         "summonerLevel": 10
      },
      "12": {
         "id": 12,
         "description": "After channeling for 3.5 seconds, teleports your champion to target allied structure, minion, or ward.",
         "name": "Teleport",
         "key": "SummonerTeleport",
         "summonerLevel": 6
      }
   },
   "type": "summoner",
   "version": "6.9.1"
}';


function getAllSpellData() {
    return json_decode($GLOBALS['data'], true)['data'];
}

?>