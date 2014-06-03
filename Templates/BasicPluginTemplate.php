<?php

use ManiaControl\ManiaControl;
use ManiaControl\Plugins\Plugin;

// TODO: Maintain plugin class phpdoc
/**
 * Plugin Description
 *
 * @author  Template Author
 * @version 1.0
 */
class BasicPluginTemplate implements Plugin {
	/*
	 * Constants
	 */
	// TODO: Maintain plugin metadata constants
	const ID      = -1;
	const VERSION = 1.0;
	const NAME    = 'Plugin Template';
	const AUTHOR  = 'Template Author';

	/**
	 * Private Properties
	 */
	/** @var ManiaControl $maniaControl */
	private $maniaControl = null;

	/**
	 * @see \ManiaControl\Plugins\Plugin::getId()
	 */
	public static function getId() {
		return self::ID;
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::getName()
	 */
	public static function getName() {
		return self::NAME;
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::getVersion()
	 */
	public static function getVersion() {
		return self::VERSION;
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::getAuthor()
	 */
	public static function getAuthor() {
		return self::AUTHOR;
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::getDescription()
	 */
	public static function getDescription() {
		// TODO: Implement getDescription() method.
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::prepare()
	 */
	public static function prepare(ManiaControl $maniaControl) {
		// TODO: Implement prepare() method.
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::load()
	 */
	public function load(ManiaControl $maniaControl) {
		$this->maniaControl = $maniaControl;
		// TODO: Implement load() method.
	}

	/**
	 * @see \ManiaControl\Plugins\Plugin::unload()
	 */
	public function unload() {
		// TODO: Implement unload() method.
	}
}
