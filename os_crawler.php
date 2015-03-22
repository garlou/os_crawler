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
require('fbGroupCrawler.php');

define('TELEGRAM_PATH', '/home/kae/Documents/workspace/tg/');
define('TELEGRAM_PEER', 'Opstop');
define('FB_GROUP_ID', '292458127505205');
//define('FB_GROUP_ID', '275398442505640');


$crawler = new fbGroupCrawler(FB_GROUP_ID);
$json = $crawler->run();


die();


$first=true;
while(!file_exists('/tmp/tg.sck')) {
		
	if(!$first)
	{
		echo "Cannot create /tmp/tg.sck. Quitting...\r\n";
		//die();
	}
	exec(TELEGRAM_PATH.'bin/telegram-cli -dWS /tmp/tg.sck &');
	$first=false;
	sleep(2);
	break;	
}


$telegram = new \Zyberspace\Telegram\Cli\Client('unix:///tmp/tg.sck');

//$contactList = $telegram->getContactList();
$telegram->msg('Opstop', 'Hey man, what\'s up? :D');

