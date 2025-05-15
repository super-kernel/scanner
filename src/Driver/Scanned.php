<?php
declare(strict_types=1);

namespace SuperKernel\Scanner\Driver;

use SuperKernel\Scanner\Contract\ScannedInterface;

final readonly class Scanned implements ScannedInterface
{
	public function __construct(private bool $canned = true)
	{
	}

	public function isScanned(): bool
	{
		return $this->canned;
	}
}