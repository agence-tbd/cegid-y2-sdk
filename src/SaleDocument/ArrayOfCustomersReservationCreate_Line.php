<?php

namespace Y2\SaleDocument;

class ArrayOfCustomersReservationCreate_Line implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomersReservationCreate_Line[] $CustomersReservationCreate_Line
     */
    protected $CustomersReservationCreate_Line = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomersReservationCreate_Line[]
     */
    public function getCustomersReservationCreate_Line(): array
    {
      return $this->CustomersReservationCreate_Line;
    }

    /**
     * @param CustomersReservationCreate_Line[] $CustomersReservationCreate_Line
     * @return ArrayOfCustomersReservationCreate_Line
     */
    public function setCustomersReservationCreate_Line(array $CustomersReservationCreate_Line = null): ArrayOfCustomersReservationCreate_Line
    {
      $this->CustomersReservationCreate_Line = $CustomersReservationCreate_Line;
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
      return isset($this->CustomersReservationCreate_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomersReservationCreate_Line
     */
    public function offsetGet($offset): CustomersReservationCreate_Line
    {
      return $this->CustomersReservationCreate_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomersReservationCreate_Line $value The value to set
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
      if (!isset($offset)) {
        $this->CustomersReservationCreate_Line[] = $value;
      } else {
        $this->CustomersReservationCreate_Line[$offset] = $value;
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
      unset($this->CustomersReservationCreate_Line[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomersReservationCreate_Line Return the current element
     */
    public function current(): CustomersReservationCreate_Line
    {
      return current($this->CustomersReservationCreate_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->CustomersReservationCreate_Line);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): ?string
    {
      return key($this->CustomersReservationCreate_Line);
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
      reset($this->CustomersReservationCreate_Line);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
      return count($this->CustomersReservationCreate_Line);
    }

}
