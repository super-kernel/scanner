<?php
declare(strict_types=1);

namespace SuperKernel\Scanner\Contract;

interface ScanHandlerInterface
{
	public function scan(): ScannedInterface;
}