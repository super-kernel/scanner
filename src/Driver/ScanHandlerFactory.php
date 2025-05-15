<?php
declare(strict_types=1);

namespace SuperKernel\Scanner\Driver;

use Phar;
use SuperKernel\Scanner\Contract\ScanHandlerInterface;

/**
 * @ScanHandlerFactory
 * @\SuperKernel\Di\Composer\ScannerHandler\ScanHandlerFactory
 */
final class ScanHandlerFactory
{
	public function __invoke(): ScanHandlerInterface
	{
		return match (true) {
			!!Phar::running(false)
			        => new NullScanHandler(),
			extension_loaded('swoole')
			        => new SwooleProcessScanHandler(),
			!extension_loaded('grpc') && extension_loaded('pcntl')
			        => new PcntlScanHandler(),
			default => new ProcessScanHandler(),
		};
	}
}