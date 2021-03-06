<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee6aad1a7655745f4c5a5c0b31b4b349
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sunra\\PhpSimple\\HtmlDomParser' => 
            array (
                0 => __DIR__ . '/..' . '/sunra/php-simple-html-dom-parser/Src',
            ),
        ),
    );

    public static $classMap = array (
        'Crawler' => __DIR__ . '/../..' . '/crawler1/Crawler.php',
        'Crawler2' => __DIR__ . '/../..' . '/crawler2/Crawler.php',
        'Csv' => __DIR__ . '/../..' . '/vinos/Csv.class.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'InvalidURLException' => __DIR__ . '/../..' . '/crawler2/Crawler.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Pagina' => __DIR__ . '/../..' . '/vinos/vinoHtmlDom.php',
        'Prueba' => __DIR__ . '/../..' . '/vinos/vinoCrawler.php',
        'Registro' => __DIR__ . '/../..' . '/dom/Registro.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Sunra\\PhpSimple\\HtmlDomParser' => __DIR__ . '/..' . '/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/HtmlDomParser.php',
        'URL' => __DIR__ . '/../..' . '/crawler2/Crawler.php',
        'Vino' => __DIR__ . '/../..' . '/vinos/vino.php',
        'VinoSeleccion' => __DIR__ . '/../..' . '/vinos/vinoHtmlDom.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitee6aad1a7655745f4c5a5c0b31b4b349::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitee6aad1a7655745f4c5a5c0b31b4b349::$classMap;

        }, null, ClassLoader::class);
    }
}
