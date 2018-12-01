#!/usr/bin/php -f
<?php
/**
 * FlexiBee cryptocurency - Initial Setup
 *
 * @author     Vítězslav Dvořák <info@vitexsofware.cz>
 * @copyright  (G) 2018 Vitex Software
 */
define('EASE_APPNAME', 'CryptoCurrency INIT');
define('EASE_LOGGER', 'syslog|console|mail');

require_once '../vendor/autoload.php';
$shared = new Ease\Shared();
try {
    $shared->loadConfig('../client.json', true);
    $shared->loadConfig('../cryptocurrency.json', true);

    $currencer = new \FlexiPeeHP\FlexiBeeRW(null, ['evidence' => 'mena']);

    $currencer->sync(['kod' => 'BTC', 'nazev' => 'BITCoin', 'popis' => _('Bitcoin is an innovative payment network and a new kind of money.'), 'symbol' => '₿']);
    

//    $labelsRequied = ['UPOMINKA1', 'UPOMINKA2', 'UPOMINKA3', 'NEPLATIC', 'NEUPOMINKOVAT'];
//    $labeler       = new \FlexiPeeHP\Stitek();
//    foreach ($labelsRequied as $labelRequied) {
//        if (!$labeler->recordExists(['kod' => $labelRequied])) {
//            $labeler->insertToFlexiBee([
//                "kod" => $labelRequied,
//                "nazev" => $labelRequied,
//                "vsbAdr" => true
//            ]);
//            $labeler->addStatusMessage(sprintf(_('Requied label %s create'),
//                    $labelRequied),
//                ($labeler->lastResponseCode == 201) ? 'success' : 'error' );
//        }
//    }
} catch (Exception $exc) {
    echo $exc->getMessage() . "\n";
    echo $exc->getTraceAsString();
}


