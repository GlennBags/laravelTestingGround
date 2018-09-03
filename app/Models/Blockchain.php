<?php
namespace Blockchain;

class Blockchain {

    /** @var array Block */
    protected $chain;

    /**
     * Genesis block creation
     */
    public function __construct() {
        $this->chain = [$this->createGenesisBlock()];
    }

    /**
     * Create Genesis Block
     * @return Block
     */
    public function createGenesisBlock() {
        return new Block(0, '09/01/2018', 'Genesis Block', '0');
    }

    /**
     * Get the last block out of the chain
     * @return Block
     */
    public function getLatestBlock() {
        return $this->chain[count($this->chain)];
    }

    /**
     * Append a new Block onto the chain
     * @param Block $newBlock
     * @return void
     * @throws \Exception
     */
    public function addBlock(Block $newBlock) {
        $newBlock->setPreviousHash($this->getLatestBlock()->getHash());
    }
}