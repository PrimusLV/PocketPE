<?php

namespace PocketPE\generation\Flat;

use pocketpe\PocketPE;

class Flat extends PocketPE {

 public function Generation() {
  Server>canGenerateWorld
   Layer>1>bedrock
   Layer>2>dirt
   Layer>3>dirt
   Layer>4>Grass
 
   
   packetProvide>WorldPackets
   
   
   public function generateChunk($chunkX, $chunkZ){
		if($this->chunk === null) {
			if(isset($this->options["preset"]) and $this->options["preset"] != ""){
				$this->parsePreset($this->options["preset"], $chunkX, $chunkZ);
			}else{
				$this->parsePreset($this->preset, $chunkX, $chunkZ);
			}
		}
		$chunk = clone $this->chunk;
		$chunk->setX($chunkX);
		$chunk->setZ($chunkZ);
		$this->level->setChunk($chunkX, $chunkZ, $chunk);
	}
	public function populateChunk($chunkX, $chunkZ){
		$this->random->setSeed(0xdeadbeef ^ ($chunkX << 8) ^ $chunkZ ^ $this->level->getSeed());
		foreach($this->populators as $populator){
			$populator->populate($this->level, $chunkX, $chunkZ, $this->random);
		}

	public function getSpawn(){
		return new Vector3(128, $this->floorLevel, 128);
		
		public function finishedChunk{
		 $x == $Generate__constuctChuck()-get("X");
		 $y == $Generate__constuctChuck()-get("y");
		 $z == $Generate__constuctChuck()-get("z");
		 
		}
      // More needs to ber done, Such as spawning player...ect
    //use the same world generation as mcpe client and let it write to server disk
}
