<?php
/**
 * Setup for ArticleByID extension, a special page that provides redirects to articles
 * via their page IDs
 *
 * @author stas-fomin@yandex.ru
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

$wgArticleByIDTemplate = false;

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'ArticleByID',
	'version' => '0.9',
	'author' => 'Stas Fomin',
);

// Set up the new special page
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['ArticleByID'] = $dir . 'ArticleByID.i18n.php';

$wgAutoloadClasses['SpecialArticleByID'] = $dir . 'SpecialArticleByID.php';
$wgSpecialPages['ArticleByID'] = 'SpecialArticleByID';
$wgSpecialPageGroups['ArticleByID'] = 'pagetools';


