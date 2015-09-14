<?php

namespace PocketPE\Packets;

use pocketpe\pocketpe;
use pocketpe\plugins\core;
use pocketpe\player\player;
use pocketpe\player\playerpackethandeler;
use pocketpe\inv\inv;
use pocketpe\items\items;
use pocketpe\items\brokenItem;
use pocketpe\items\placedItem;
use pocketpe\generation\normal;
use pocketpe\generation\flat;
use pocketpe\generation\nether;

class Packets extends PocketPE {

public function PacketRequest {
 <GetPackets > Client >List(forAll)
      List.Now>Create
       get.playerName
       get.PlayerIP
       get.playerTime
       get.playerLanguage
       get.playerVersion
       // this is a list of the packets that PocketPE gets from the client machine.
}

public function PacketRequestToSpawn
 <GetPackets > Client >Spawn;
  Spawn.Location>Get
   coords_x: ()
   coords_y: ()
   coords_z: ()
 
}
