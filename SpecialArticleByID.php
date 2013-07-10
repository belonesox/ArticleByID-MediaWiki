<?php
/**
 * A special page that provides redirects to articles via their page IDs
 *
 * @author stas-fomin@yandex.ru
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "not a valid entry point.\n" );
	die( 1 );
}

/**
 * Provides the actual redirection
 * @ingroup SpecialPage
 */
class SpecialArticleByID extends UnlistedSpecialPage {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'ArticleByID' );
	}

	/**
	 * Main execution function
	 *
	 * @param $par Mixed: Parameters passed to the page
	 */
	public function execute( $par ) {
		$out = $this->getOutput();

		$title = Title::newFromID( $par );
		if ( $title !== false ) {
			$out->redirect( $title->getFullURL(), '301' );
		} else {
			$parEsc = wfEscapeWikiText( $par );
			$out->showErrorPage( 'articlebyid-not-found-title', 'articlebyid-not-found-message', array( $parEsc ) );
		}
	}
}
