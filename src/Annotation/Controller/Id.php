<?php

namespace Apitte\Core\Annotation\Controller;

use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\AnnotationException;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class Id
{

	/** @var string */
	private $name;

	/**
	 * @param array $values
	 */
	public function __construct(array $values)
	{
		if (isset($values['value'])) {
			if (empty($values['value'])) {
				throw new AnnotationException('Empty @Id given');
			}
			$this->name = $values['value'];
		} else if (isset($values['name'])) {
			if (empty($values['name'])) {
				throw new AnnotationException('Empty @Id given');
			}
			$this->name = $values['name'];
		} else {
			throw new AnnotationException('No @Id given');
		}
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

}
