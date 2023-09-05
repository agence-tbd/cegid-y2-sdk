<?php

namespace Y2\Customer;

class ArrayOfUserDefinedText implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserDefinedText[] $UserDefinedText
     */
    protected $UserDefinedText = null;

    public function __construct()
    {

    }

    /**
     * @return UserDefinedText[]
     */
    public function getUserDefinedText(): array
    {
        return $this->UserDefinedText;
    }

    /**
     * @param UserDefinedText[] $UserDefinedText
     *
     * @return ArrayOfUserDefinedText
     */
    public function setUserDefinedText(array $UserDefinedText = null): ArrayOfUserDefinedText
    {
        $this->UserDefinedText = $UserDefinedText;
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
        return isset($this->UserDefinedText[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserDefinedText
     */
    public function offsetGet($offset): UserDefinedText
    {
        return $this->UserDefinedText[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed           $offset The offset to assign the value to
     * @param UserDefinedText $value The value to set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedText[] = $value;
        } else {
            $this->UserDefinedText[$offset] = $value;
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
        unset($this->UserDefinedText[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserDefinedText Return the current element
     */
    public function current(): UserDefinedText
    {
        return current($this->UserDefinedText);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->UserDefinedText);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
        return key($this->UserDefinedText);
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
        reset($this->UserDefinedText);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->UserDefinedText);
    }

}
