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
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param CreateFrom_Document[] $Documents
     * @return ArrayOfCreateFrom_Document
     */
    public function setDocument(array $Documents = null)
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
    public function offsetExists($offset)
    {
      return isset($this->Document[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreateFrom_Document
     */
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
      unset($this->Document[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreateFrom_Document Return the current element
     */
    public function current()
    {
      return current($this->Document);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Document);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Document);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Document);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
      return count($this->Document);
    }

}
