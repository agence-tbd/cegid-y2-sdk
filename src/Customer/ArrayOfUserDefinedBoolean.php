<?php

namespace Y2\Customer;

class ArrayOfUserDefinedBoolean implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UserDefinedBoolean[] $UserDefinedBoolean
     */
    protected $UserDefinedBoolean = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedBoolean[]
     */
    public function getUserDefinedBoolean(): ?array
    {
        return $this->UserDefinedBoolean;
    }

    /**
     * @param UserDefinedBoolean[] $UserDefinedBoolean
     *
     * @return ArrayOfUserDefinedBoolean
     */
    public function setUserDefinedBoolean(array $UserDefinedBoolean = null): ArrayOfUserDefinedBoolean
    {
        $this->UserDefinedBoolean = $UserDefinedBoolean;
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
        return isset($this->UserDefinedBoolean[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserDefinedBoolean
     */
    public function offsetGet($offset): UserDefinedBoolean
    {
        return $this->UserDefinedBoolean[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed              $offset The offset to assign the value to
     * @param UserDefinedBoolean $value The value to set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedBoolean[] = $value;
        } else {
            $this->UserDefinedBoolean[$offset] = $value;
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
        unset($this->UserDefinedBoolean[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedBoolean Return the current element
     */
    public function current(): UserDefinedBoolean
    {
        return current($this->UserDefinedBoolean);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->UserDefinedBoolean);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->UserDefinedBoolean);
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
        reset($this->UserDefinedBoolean);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->UserDefinedBoolean);
    }

}
