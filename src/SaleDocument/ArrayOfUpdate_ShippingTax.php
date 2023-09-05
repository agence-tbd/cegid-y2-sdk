<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Update_ShippingTax[] $Update_ShippingTax
     */
    protected $Update_ShippingTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Update_ShippingTax[]
     */
    public function getUpdate_ShippingTax(): array
    {
      return $this->Update_ShippingTax;
    }

    /**
     * @param Update_ShippingTax[] $Update_ShippingTax
     * @return ArrayOfUpdate_ShippingTax
     */
    public function setUpdate_ShippingTax(array $Update_ShippingTax = null): ArrayOfUpdate_ShippingTax
    {
      $this->Update_ShippingTax = $Update_ShippingTax;
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
      return isset($this->Update_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Update_ShippingTax
     */
    public function offsetGet($offset): Update_ShippingTax
    {
      return $this->Update_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Update_ShippingTax $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->Update_ShippingTax[] = $value;
      } else {
        $this->Update_ShippingTax[$offset] = $value;
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
      unset($this->Update_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Update_ShippingTax Return the current element
     */
    public function current(): Update_ShippingTax
    {
      return current($this->Update_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Update_ShippingTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->Update_ShippingTax);
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
      reset($this->Update_ShippingTax);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->Update_ShippingTax);
    }

}
