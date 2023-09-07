<?php

namespace Y2\SaleDocument;

class ArrayOfSaleDocumentType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SaleDocumentType[] $SaleDocumentType
     */
    protected $SaleDocumentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SaleDocumentType[]
     */
    public function getSaleDocumentType(): ?array
    {
      return $this->SaleDocumentType;
    }

    /**
     * @param SaleDocumentType[] $SaleDocumentType
     * @return ArrayOfSaleDocumentType
     */
    public function setSaleDocumentType(array $SaleDocumentType = null): ArrayOfSaleDocumentType
    {
      $this->SaleDocumentType = $SaleDocumentType;
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
      return isset($this->SaleDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SaleDocumentType
     */
    public function offsetGet($offset): SaleDocumentType
    {
      return $this->SaleDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SaleDocumentType $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->SaleDocumentType[] = $value;
      } else {
        $this->SaleDocumentType[$offset] = $value;
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
      unset($this->SaleDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SaleDocumentType Return the current element
     */
    public function current(): SaleDocumentType
    {
      return current($this->SaleDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->SaleDocumentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->SaleDocumentType);
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
      reset($this->SaleDocumentType);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->SaleDocumentType);
    }

}
