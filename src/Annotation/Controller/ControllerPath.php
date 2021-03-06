<?php

namespace Apitte\Core\Annotation\Controller;

use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\AnnotationException;

/**
 * @Annotation
 * @Target("CLASS")
 */
final class ControllerPath
{

	/** @var string */
	private $path;

	/**
	 * @param array $values
	 */
	public function __construct(array $values)
	{
		if (isset($values['value'])) {
			if (empty($values['value'])) {
				throw new AnnotationException('Empty @ControllerPath given');
			}
			$this->path = $values['value'];
		} else if (isset($values['path'])) {
			if (empty($values['path'])) {
				throw new AnnotationException('Empty @ControllerPath given');
			}
			$this->path = $values['path'];
		} else {
			throw new AnnotationException('No @ControllerPath given');
		}
	}

	/**
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}

}
