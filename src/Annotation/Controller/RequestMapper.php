<?php

namespace Apitte\Core\Annotation\Controller;

use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\AnnotationException;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class RequestMapper
{

	/** @var string */
	private $entity;

	/** @var bool */
	private $validation = TRUE;

	/**
	 * @param array $values
	 */
	public function __construct(array $values)
	{
		if (!isset($values['entity']) || empty($values['entity'])) {
			throw new AnnotationException('Empty @RequestMapper entity given');
		}

		$this->entity = $values['entity'];

		if (isset($values['validation'])) {
			$this->validation = boolval($values['validation']);
		}
	}

	/**
	 * @return string
	 */
	public function getEntity()
	{
		return $this->entity;
	}

	/**
	 * @return bool
	 */
	public function isValidation()
	{
		return $this->validation;
	}

}
