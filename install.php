<?php
/**
 * Part of CodeIgniter Twig & HMVC
 *
 * @author     Andi Kurniawan <https://github.com/nakamichikun>
 * @license    MIT License
 * @copyright  2019 Andi kurniawan
 * @link       https://github.com/nakamichikun/ci-twig-hmvc
 */

$installer = new Installer();
$installer->install();

class Installer
{
	public static function install()
	{
		self::recursiveCopy('vendor/codeigniter/framework', '.');
		self::copy('Twig.php', 'application/libraries/Twig.php');
		self::recursiveCopy('vendor/nakamichikun/ci-twig-hmvc/module', 'application');
	}

	private static function copy($src, $dst)
	{
		$success = copy($src, $dst);
		if ($success) {
			echo 'copied: ' . $dst . PHP_EOL;
		}
	}

	/**
	 * Recursive Copy
	 *
	 * @param string $src
	 * @param string $dst
	 */
	private static function recursiveCopy($src, $dst)
	{
		@mkdir($dst, 0755);
		
		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($src, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::SELF_FIRST
		);
		
		foreach ($iterator as $file) {
			if ($file->isDir()) {
				@mkdir($dst . '/' . $iterator->getSubPathName());
			} else {
				if($iterator->getSubPathName() != 'composer.json') {
					$success = copy($file, $dst . '/' . $iterator->getSubPathName());
					if ($success) {
						echo 'copied: ' . $dst . '/' . $iterator->getSubPathName() . PHP_EOL;
					}
				}
			}
		}
	}
}
