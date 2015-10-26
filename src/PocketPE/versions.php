<?php

namespace PocketPE\PocketPE;

use pocketpe\PocketPE;
use pocketpe\packets;

class Versions extends PocketPE {
 
 public function Versions() {
Packets>>playerVersion  
get.clientVersion=0.12.1
 correctVersion.connectYes
 incorrectVersion.connectNo 
  if=connectNo>>pingmsg="Client Disconnected because you are using an invalid version."
 }
}
