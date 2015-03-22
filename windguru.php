#!/usr/bin/php
<?php
/**
 * Telegram test. Send message
 *
 * Usage:
 *   send.php Peer_Name Message
 *
 * This is a demo/test script to be run from the command line.
 *
 * The TelegramClient can be used without Drupal too.
 */
require('vendor/autoload.php');
$telegram = new \Zyberspace\Telegram\Cli\Client('unix:///tmp/tg.sck');

//$contactList = $telegram->getContactList();
$telegram->msg('Surf', 'Costa da Caparica:');
$telegram->send_photo('Surf', '/home/kae/Pictures/windguru_1426993742355.png');



