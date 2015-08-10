<?php

namespace PocketPE\generation\Normal;

use pocketpe\PocketPE;

class Normal extends PocketPE {

 public function Generation() {
  Server>canGenerateWorld
   Layer>1>bedrock
   Layer>2>dirt
   Layer>3>dirt
   Layer>4>Grass
   
   packetProvide>WorldPackets
   
    //use the same world generation as mcpe client and let it write to server disk
 }
}
