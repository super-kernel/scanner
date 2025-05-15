<?php

namespace SuperKernel\Scanner\Driver;

use SuperKernel\Scanner\Contract\ScanHandlerInterface;

final class NullScanHandler implements ScanHandlerInterface
{
	/**
	 * @return Scanned
	 */
	public function scan(): Scanned
	{
		// TODO: Implement scan() method.
	}
}