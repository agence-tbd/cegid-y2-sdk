<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Create_ShippingTax[] $Create_ShippingTax
     */
    protected $Create_ShippingTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Create_ShippingTax[]
     */
    public function getCreate_ShippingTax(): ?array
    {
      return $this->Create_ShippingTax;
    }

    /**
     * @param Create_ShippingTax[] $Create_ShippingTax
     * @return ArrayOfCreate_ShippingTax
     */
    public function setCreate_ShippingTax(array $Create_ShippingTax = null): ArrayOfCreate_ShippingTax
    {
      $this->Create_ShippingTax = $Create_ShippingTax;
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
      return isset($this->Create_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Create_ShippingTax
     */
    public function offsetGet($offset): Create_ShippingTax
    {
      return $this->Create_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Create_ShippingTax $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Create_ShippingTax[] = $value;
      } else {
        $this->Create_ShippingTax[$offset] = $value;
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
      unset($this->Create_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Create_ShippingTax Return the current element
     */
    public function current(): Create_ShippingTax
    {
      return current($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Create_ShippingTax);
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
      reset($this->Create_ShippingTax);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Create_ShippingTax);
    }

}
