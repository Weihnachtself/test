<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '6157b075b923803e5ef157aeb43b83bd' => __DIR__ . '/..' . '/tamtamchik/simple-flash/src/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
        'T' => 
        array (
            'Tamtamchik\\SimpleFlash\\' => 23,
        ),
        'P' => 
        array (
            'ProjectSend\\' => 12,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
        'Tamtamchik\\SimpleFlash\\' => 
        array (
            0 => __DIR__ . '/..' . '/tamtamchik/simple-flash/src',
        ),
        'ProjectSend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ProjectSend\\Classes\\ActionsLog' => __DIR__ . '/../..' . '/includes/Classes/ActionsLog.php',
        'ProjectSend\\Classes\\AssetsLoader' => __DIR__ . '/../..' . '/includes/Classes/AssetsLoader.php',
        'ProjectSend\\Classes\\Auth' => __DIR__ . '/../..' . '/includes/Classes/Auth.php',
        'ProjectSend\\Classes\\AuthenticationCode' => __DIR__ . '/../..' . '/includes/Classes/AuthenticationCode.php',
        'ProjectSend\\Classes\\BruteForceBlock' => __DIR__ . '/../..' . '/includes/Classes/BruteForceBlock.php',
        'ProjectSend\\Classes\\Categories' => __DIR__ . '/../..' . '/includes/Classes/Categories.php',
        'ProjectSend\\Classes\\Cron' => __DIR__ . '/../..' . '/includes/Classes/Cron.php',
        'ProjectSend\\Classes\\CustomAsset' => __DIR__ . '/../..' . '/includes/Classes/CustomAsset.php',
        'ProjectSend\\Classes\\DatabaseUpgrade' => __DIR__ . '/../..' . '/includes/Classes/DatabaseUpgrade.php',
        'ProjectSend\\Classes\\Download' => __DIR__ . '/../..' . '/includes/Classes/Download.php',
        'ProjectSend\\Classes\\EmailNotifications' => __DIR__ . '/../..' . '/includes/Classes/EmailNotifications.php',
        'ProjectSend\\Classes\\Emails' => __DIR__ . '/../..' . '/includes/Classes/Emails.php',
        'ProjectSend\\Classes\\Files' => __DIR__ . '/../..' . '/includes/Classes/Files.php',
        'ProjectSend\\Classes\\Folder' => __DIR__ . '/../..' . '/includes/Classes/Folder.php',
        'ProjectSend\\Classes\\FormGenerate' => __DIR__ . '/../..' . '/includes/Classes/Layout/FormGenerate.php',
        'ProjectSend\\Classes\\Groups' => __DIR__ . '/../..' . '/includes/Classes/Groups.php',
        'ProjectSend\\Classes\\GroupsMemberships' => __DIR__ . '/../..' . '/includes/Classes/GroupsMemberships.php',
        'ProjectSend\\Classes\\I18n' => __DIR__ . '/../..' . '/includes/Classes/i18n.php',
        'ProjectSend\\Classes\\Layout\\Pagination' => __DIR__ . '/../..' . '/includes/Classes/Layout/Pagination.php',
        'ProjectSend\\Classes\\Layout\\Table' => __DIR__ . '/../..' . '/includes/Classes/Layout/Table.php',
        'ProjectSend\\Classes\\Options' => __DIR__ . '/../..' . '/includes/Classes/Options.php',
        'ProjectSend\\Classes\\OrphanFiles' => __DIR__ . '/../..' . '/includes/Classes/OrphanFiles.php',
        'ProjectSend\\Classes\\PasswordReset' => __DIR__ . '/../..' . '/includes/Classes/PasswordReset.php',
        'ProjectSend\\Classes\\Permissions' => __DIR__ . '/../..' . '/includes/Classes/Permissions.php',
        'ProjectSend\\Classes\\Session' => __DIR__ . '/../..' . '/includes/Classes/Session.php',
        'ProjectSend\\Classes\\Users' => __DIR__ . '/../..' . '/includes/Classes/Users.php',
        'ProjectSend\\Classes\\Validation' => __DIR__ . '/../..' . '/includes/Classes/Validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8fb6844d5ee1a83083c73b3d8f9ff826::$classMap;

        }, null, ClassLoader::class);
    }
}
