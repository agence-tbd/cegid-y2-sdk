<?php

namespace Y2\Management;

class ArrayOfCreateFrom_Document implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CreateFrom_Document[] $Document
     */
    protected $Document = null;

    public function __construct()
    {

    }

    /**
     * @return CreateFrom_Document[]
     */
    public function getDocument(): ?array
    {
      return $this->Document;
    }

    /**
     * @param CreateFrom_Document[] $Documents
     * @return ArrayOfCreateFrom_Document
     */
    public function setDocument(array $Documents = null): ArrayOfCreateFrom_Document
    {
      $this->Document = $Documents;
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
      return isset($this->Document[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreateFrom_Document
     */
    public function offsetGet($offset): CreateFrom_Document
    {
      return $this->Document[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreateFrom_Document $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Document[] = $value;
      } else {
        $this->Document[$offset] = $value;
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
      unset($this->Document[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreateFrom_Document Return the current element
     */
    public function current(): CreateFrom_Document
    {
      return current($this->Document);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Document);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Document);
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
      reset($this->Document);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Document);
    }

}
