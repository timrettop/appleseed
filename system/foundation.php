<?php
/**
 * @version      $Id$
 * @package      Appleseed.Framework
 * @subpackage   System
 * @copyright    Copyright (C) 2004 - 2010 Michael Chisari. All rights reserved.
 * @link         http://opensource.appleseedproject.org
 * @license      GNU General Public License version 2.0 (See LICENSE.txt)
 */

// Restrict direct access
defined( 'APPLESEED' ) or die( 'Direct Access Denied' );

/** Foundation Class
 * 
 * Base class for Foundation
 * 
 * @package     Appleseed.Framework
 * @subpackage  System
 */
class cFoundation extends cBase {
	
	protected $_Config;
	protected $_Continue;
	protected $_Redirect = false;

	/**
	 * Constructor
	 *
	 * @access  public
	 */
	public function __construct ( ) {
		
 		// Load foundation configuration.
 		$this->_Config = new cConf ( );
		$this->_Config->Set ( "Data",  $this->_Config->Load ( "foundations" ) );
		
		$this->_Continue = true;
		
		return ( true );
	}
	
	/**
	 * Loads the proper foundation using inheritance order
	 *
	 * @access  public
	 * @param string $pRoute Which foundation to route to.
	 */
	public function Load ( $pRoute ) {
		eval ( GLOBALS );
		
		$Config = $this->GetSys ( "Config" );
		$paths = array_reverse ( $Config->GetPath() );
		
		$Buffer = $this->GetSys ( "Buffer" );
		
		$contexts = $this->Get ( "Config" )->GetConfiguration ( "contexts" );
		
		$context = $contexts[$pRoute];
		
		if ( !$context ) {
			// @todo: Throw a warning.
 		}
		
		// If the context isn't set in the Request data, set it with the specified default.
		if ( !$this->GetSys ( "Request" )->Get ( "Context" ) ) {
			$this->GetSys ( "Request" )->Set ( "Context", $context );
		}
		
		foreach ( $paths as $p => $path ) {
			$route = ltrim ( rtrim ( $pRoute, '/' ), '/' );
			$filename = $zApp->GetPath () . DS . 'foundations' . DS . $path . DS . $route;
			if ( is_file ( $filename ) ) {
				$Buffer->LoadFoundation ( $filename );
		
				return ( true );
			}
		}
		
		echo __("Foundation Not Found", array ( 'route' => $route ) );
		exit;
	}
	
	/**
	 * Discards the current foundation, and loads the new one.
	 *
	 * @access  public
	 * @param string $pRoute Which foundation to redirect to.
	 */
	public function Redirect ( $pRoute ) {
		eval ( GLOBALS );
		
		$Config = $this->GetSys ( "Config" );
		$paths = array_reverse ( $Config->GetPath() );
		
		foreach ( $paths as $p => $path ) {
			$route = ltrim ( rtrim ( $pRoute, '/' ), '/' );
			$filename = $zApp->GetPath () . DS . 'foundations' . DS . $path . DS . $route;
			if ( is_file ( $filename ) ) {
				$this->Set ( "Redirect", $filename );
		
		
				return ( true );
			}
		}
		
		return ( true );
	}

}
