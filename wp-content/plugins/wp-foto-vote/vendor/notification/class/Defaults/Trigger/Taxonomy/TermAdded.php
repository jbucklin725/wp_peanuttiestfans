<?php
/**
 * Taxonomy term added trigger
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\Trigger\Taxonomy;

use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Taxonomy term added trigger class
 */
class TermAdded extends TermTrigger {

	/**
	 * Term object
	 *
	 * @var object
	 */
	public $term;

	/**
	 * Taxonomy slug
	 *
	 * @var string
	 */
	public $taxonomy;

	/**
	 * Constructor
	 *
	 * @param string $taxonomy optional default category.
	 */
	public function __construct( $taxonomy = 'category' ) {

		$this->taxonomy = $taxonomy;

		parent::__construct(
			array(
				'taxonomy' => $taxonomy,
				'slug'     => 'wordpress/' . $taxonomy . '/created',
				// Translators: taxonomy name.
				'name'     => sprintf( __( '%s term created', 'notification' ), parent::get_taxonomy_singular_name( $taxonomy ) ),
			)
		);

		$this->add_action( 'created_' . $taxonomy, 100, 2 );

		// translators: 1. taxonomy name, 2. taxonomy slug.
		$this->set_description( sprintf( __( 'Fires when %1$s (%2$s) is created', 'notification' ), parent::get_taxonomy_singular_name( $taxonomy ), $taxonomy ) );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param integer $term_id Term ID.
	 * @return mixed void or false if no notifications should be sent
	 */
	public function action( $term_id ) {

		$term       = get_term( $term_id );
		$this->term = $term;

		if ( $this->taxonomy !== $this->term->taxonomy ) {
			return false;
		}

		$this->taxonomy       = $this->term->taxonomy;
		$this->term_permalink = get_term_link( $this->term );

		$this->term_creation_datetime = current_time( 'timestamp' );

	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {

		parent::merge_tags();

		$this->add_merge_tag(
			new MergeTag\DateTime\DateTime(
				array(
					'slug' => 'term_creation_datetime',
					'name' => sprintf( __( 'Term creation date and time', 'notification' ) ),
				)
			)
		);

	}

}
