<?php
namespace Models\Blockchain;

class Blockchain {

    /** @var array Block */
    protected $chain = [];

    /**
     * Genesis block creation
     */
    public function __construct() {
        $this->chain[0] = $this->createGenesisBlock();
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
     * Append a new Block onto the chain; updating the previousHash of the new block with the hash of the latest block.
     * @param Block $newBlock
     * @return void
     * @throws \Exception
     */
    public function addBlock(Block $newBlock) {
        $newBlock->setPreviousHash($this->getLatestBlock()->getHash());
        array_push($this->chain, $newBlock);
    }

    /**
     * Walk the chain, verifying hashes
     * @return bool
     */
    public function isChainValid() {
        $previous = null;
        foreach ($this->chain as $item) {
            if (is_null($previous)) {
                // initialize $previous if not already
                $previous = $item;
                continue;
            }
            $current = $item;
            if ($current->getHash() !== $current->calculateHash()) {
                return false;
            }
            if ($current->getPreviousHash() !== $previous->getHash()) {
                return false;
            }
        }

        return true;
    }
}