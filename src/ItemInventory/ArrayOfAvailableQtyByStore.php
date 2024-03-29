<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableQtyByStore implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var AvailableQtyByStore[] $AvailableQtyByStore
     */
    protected $AvailableQtyByStore = null;

    public function __construct()
    {

    }

    /**
     * @return AvailableQtyByStore[]
     */
    public function getAvailableQtyByStore(): ?array
    {
        return $this->AvailableQtyByStore;
    }

    /**
     * @param AvailableQtyByStore[] $AvailableQtyByStore
     *
     * @return ArrayOfAvailableQtyByStore
     */
    public function setAvailableQtyByStore(array $AvailableQtyByStore = null): ArrayOfAvailableQtyByStore
    {
        $this->AvailableQtyByStore = $AvailableQtyByStore;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     *
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
        return isset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return AvailableQtyByStore
     */
    public function offsetGet($offset): AvailableQtyByStore
    {
        return $this->AvailableQtyByStore[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed               $offset The offset to assign the value to
     * @param AvailableQtyByStore $value The value to set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->AvailableQtyByStore[] = $value;
        } else {
            $this->AvailableQtyByStore[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailableQtyByStore Return the current element
     */
    public function current(): AvailableQtyByStore
    {
        return current($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->AvailableQtyByStore);
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
        reset($this->AvailableQtyByStore);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->AvailableQtyByStore);
    }

}
