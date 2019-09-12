<?php
/**
 * Taxonomy term name merge tag
 *
 * Requirements:
 * - Trigger property of the WP_Taxonomy term object
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\MergeTag\Taxonomy;

use BracketSpace\Notification\Defaults\MergeTag\StringTag;


/**
 * Taxonomy term name merge tag class
 */
class TermName extends StringTag {

	/**
	 * Merge tag constructor
	 *
	 * @since 5.2.2
	 */
	public function __construct() {

		$args = wp_parse_args(
			array(
				'slug'        => 'term_name',
				'name'        => __( 'Term name', 'notification' ),
				'description' => 'Nature',
				'example'     => true,
				'resolver'    => function( $trigger ) {
					return $trigger->term->name;

				},
			)
		);

		parent::__construct( $args );

	}

	/**
	 * Function for checking requirements
	 *
	 * @return boolean
	 */
	public function check_requirements() {
		return isset( $this->trigger->term->name );
	}

}
