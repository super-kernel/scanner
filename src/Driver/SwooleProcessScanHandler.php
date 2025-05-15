<?php
declare(strict_types=1);

namespace SuperKernel\Scanner\Driver;

use SuperKernel\Scanner\Contract\ScanHandlerInterface;

final class SwooleProcessScanHandler implements ScanHandlerInterface
{
	public function __construct()
	{
	}

	/**
	 * @return Scanned
	 */
	public function scan(): Scanned
	{
		return new Scanned(true);
	}
}