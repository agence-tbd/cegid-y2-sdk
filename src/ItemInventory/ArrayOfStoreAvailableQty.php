<?php

namespace Y2\ItemInventory;

class ArrayOfStoreAvailableQty implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var StoreAvailableQty[] $StoreAvailableQty
     */
    protected $StoreAvailableQty = null;

    public function __construct()
    {

    }

    /**
     * @return StoreAvailableQty[]
     */
    public function getStoreAvailableQty(): ?array
    {
        return $this->StoreAvailableQty;
    }

    /**
     * @param StoreAvailableQty[] $StoreAvailableQty
     * @return ArrayOfStoreAvailableQty
     */
    public function setStoreAvailableQty(array $StoreAvailableQty = null): ArrayOfStoreAvailableQty
    {
        $this->StoreAvailableQty = $StoreAvailableQty;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
        return isset($this->StoreAvailableQty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StoreAvailableQty
     */
    public function offsetGet($offset): StoreAvailableQty
    {
        return $this->StoreAvailableQty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StoreAvailableQty $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->StoreAvailableQty[] = $value;
        } else {
            $this->StoreAvailableQty[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->StoreAvailableQty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StoreAvailableQty Return the current element
     */
    public function current(): StoreAvailableQty
    {
        return current($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid(): bool
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind(): void
    {
        reset($this->StoreAvailableQty);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->StoreAvailableQty);
    }

}
