<?php

namespace PocketPE\PocketPE;

use pocketpe\PocketPE;
use pocketpe\packets;

class Versions extends PocketPE {
 
 public function Versions() {
Packets>>playerVersion  
get.clientVersion=0.14.0b2 get.protocolVersion=40
 correctVersion.connectYes
 incorrectVersion.connectNo 
  if=connectNo>>pingmsg="Invalid client"
 }
}
