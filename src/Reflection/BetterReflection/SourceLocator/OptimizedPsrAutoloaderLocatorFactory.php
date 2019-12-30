<?php declare(strict_types = 1);

namespace PHPStan\Reflection\BetterReflection\SourceLocator;

use Roave\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping;

interface OptimizedPsrAutoloaderLocatorFactory
{

	public function create(PsrAutoloaderMapping $mapping): OptimizedPsrAutoloaderLocator;

}
