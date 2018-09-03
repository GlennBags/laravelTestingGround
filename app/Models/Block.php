<?php
namespace Blockchain;

class Block {

    protected $index;
    protected $hash;
    protected $data;
    protected $timestamp;
    protected $previousHash;

    public function __construct($index, $timestamp, $data, $previousHash = '') {
        $this->index = $index;
        $this->previousHash = $previousHash;
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->hash = $this->calculateHash();
    }

    public function calculateHash() {
        return hash('sha256',$this->index . $this->previousHash . $this->timestamp . json_encode($this->data));
    }

    public function getIndex() {
        return $this->index;
    }

    public function getHash() {
        return $this->hash;
    }

    public function getData() {
        return $this->data;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function getPreviousHash() {
        return $this->previousHash;
    }

    public function setIndex($index) {
        $this->index = $index;
    }

    public function setHash($hash) {
        $this->hash = $hash;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }

    /**
     * Set PreviousHash (if NULL), and recalculate the hash.
     * @param $previousHash
     * @return void
     * @throws \Exception
     */
    public function setPreviousHash($previousHash) {
        if (!is_null($this->previousHash)) {
            throw new \Exception("`previousHash` is already set; cannot overwrite!");
        }
        $this->previousHash = $previousHash;
        $this->setHash($this->calculateHash());
    }

}