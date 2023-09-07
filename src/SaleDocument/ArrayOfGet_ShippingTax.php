<?php

namespace Y2\SaleDocument;

class ArrayOfGet_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Get_ShippingTax[] $Get_ShippingTax
     */
    protected $Get_ShippingTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Get_ShippingTax[]
     */
    public function getGet_ShippingTax(): ?array
    {
      return $this->Get_ShippingTax;
    }

    /**
     * @param Get_ShippingTax[] $Get_ShippingTax
     * @return ArrayOfGet_ShippingTax
     */
    public function setGet_ShippingTax(array $Get_ShippingTax = null): ArrayOfGet_ShippingTax
    {
      $this->Get_ShippingTax = $Get_ShippingTax;
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
      return isset($this->Get_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Get_ShippingTax
     */
    public function offsetGet($offset): Get_ShippingTax
    {
      return $this->Get_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Get_ShippingTax $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Get_ShippingTax[] = $value;
      } else {
        $this->Get_ShippingTax[$offset] = $value;
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
      unset($this->Get_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Get_ShippingTax Return the current element
     */
    public function current(): Get_ShippingTax
    {
      return current($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Get_ShippingTax);
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
      reset($this->Get_ShippingTax);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Get_ShippingTax);
    }

}
