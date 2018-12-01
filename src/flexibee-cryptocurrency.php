#!/usr/bin/php -f
<?php
/**
 * FlexiBee CryptoCurrency - Bank sync
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */
define('EASE_APPNAME', 'SyncCryptoCurrencies');
define('EASE_LOGGER', 'syslog|console|mail');

require_once '../vendor/autoload.php';
$shared = new Ease\Shared();
try {
    $shared->loadConfig('../client.json', true);
    $shared->loadConfig('../cryptocurrency.json', true);
    $localer = new \Ease\Locale('cs_CZ', '../i18n', 'flexibee-cryptocurrency');

    $cryptocurrency->addStatusMessage('comming soon', 'success');
} catch (Exception $exc) {
    echo $exc->getMessage()."\n";
    echo $exc->getTraceAsString();
}


