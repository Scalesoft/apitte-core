<?php

namespace Apitte\Core\Mapping\Request;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

abstract class AbstractEntity implements IRequestEntity, IteratorAggregate
{

	/**
	 * @return array
	 */
	abstract public function toArray();

	/**
	 * @return ArrayIterator|Traversable
	 */
	public function getIterator()
	{
		return new ArrayIterator($this->toArray());
	}

}
