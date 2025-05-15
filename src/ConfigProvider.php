<?php
declare(strict_types=1);

namespace SuperKernel\Scanner;

use SuperKernel\Contract\ConfigProviderInterface;

final class ConfigProvider implements ConfigProviderInterface
{

	/**
	 * @inheritDoc
	 */
	public function __construct()
	{
	}

	/**
	 * @inheritDoc
	 */
	public function __invoke(): array
	{
		return [];
	}
}