<?php
/**
 * Configuration for TrustedLogin Client
 *
 *
 * @see https://docs.trustedlogin.com/Client/configuration
 */

$config = [];

try {
    // Check class_exists() for sites running PHP 5.2.x
    if ( class_exists( '\PhpNamespace\TrustedLogin\Client') ) {
        new \PhpNamespace\TrustedLogin\Client(
            new \PhpNamespace\TrustedLogin\Config( $config )
        );
    }
} catch ( \Exception $exception ) {
    error_log( $exception->getMessage() );
}

/**
 * Autoloader for the TrustedLogin Client
 *
 * @param string $class The fully-qualified class name.
 * @see https://www.php-fig.org/psr/psr-4/examples/
 * @return void
 */
spl_autoload_register(function ($class) {
    $prefix = 'PhpNamespace\\TrustedLogin\\';
    $base_dir = __DIR__ . '/src/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
