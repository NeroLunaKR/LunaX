<?php

declare(strict_types=1);

namespace pocketmine\world\generator;

use pocketmine\block\VanillaBlocks;
use pocketmine\world\ChunkManager;
use pocketmine\world\format\Chunk;

class VoidGenerator extends Generator{

	public function __construct(int $seed, string $preset){
		parent::__construct($seed, $preset);
	}

	public function generateChunk(ChunkManager $world, int $chunkX, int $chunkZ) : void{
		/** @phpstan-var Chunk $chunk */
		$chunk = $world->getChunk($chunkX, $chunkZ);
		
		if($chunkX == 0 && $chunkZ == 0) {
			$chunk->setBlockStateId(0, 0, 0, VanillaBlocks::BEDROCK()->getStateId());
		}
	}

	public function populateChunk(ChunkManager $world, int $chunkX, int $chunkZ) : void{}
}