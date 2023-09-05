<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Header implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_Header[] $Get_Header
     */
    protected $Get_Header = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_Header[]
     */
    public function getGet_Header(): array
    {
      return $this->Get_Header;
    }

    /**
     * @param Get_Header[] $Get_Header
     * @return ArrayOfGet_Header
     */
    public function setGet_Header(array $Get_Header = null): ArrayOfGet_Header
    {
      $this->Get_Header = $Get_Header;
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
      return isset($this->Get_Header[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_Header
     */
    public function offsetGet($offset): Get_Header
    {
      return $this->Get_Header[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_Header $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Get_Header[] = $value;
      } else {
        $this->Get_Header[$offset] = $value;
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
      unset($this->Get_Header[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_Header Return the current element
     */
    public function current(): Get_Header
    {
      return current($this->Get_Header);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Get_Header);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Get_Header);
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
      reset($this->Get_Header);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Get_Header);
    }

}
