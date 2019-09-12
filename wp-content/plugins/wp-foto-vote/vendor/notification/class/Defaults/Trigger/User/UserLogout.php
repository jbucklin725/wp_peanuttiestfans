<?php
/**
 * User logout trigger
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\Trigger\User;

use BracketSpace\Notification\Defaults\MergeTag;

/**
 * User logout trigger class
 */
class UserLogout extends UserTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( 'wordpress/user_logout', __( 'User logout', 'notification' ) );

		$this->add_action( 'wp_logout', 10, 0 );

		$this->set_description( __( 'Fires when user log out from WordPress', 'notification' ) );

	}

	/**
	 * Assigns action callback args to object
	 *
	 * @return void
	 */
	public function action() {

		$this->user_id     = get_current_user_id();
		$this->user_object = get_userdata( $this->user_id );
		$this->user_meta   = get_user_meta( $this->user_id );

		$this->user_registered_datetime = strtotime( $this->user_object->user_registered );
		$this->user_logout_datetime     = current_time( 'timestamp' );

	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {

		parent::merge_tags();

		$this->add_merge_tag( new MergeTag\User\UserNicename() );
		$this->add_merge_tag( new MergeTag\User\UserDisplayName() );
		$this->add_merge_tag( new MergeTag\User\UserFirstName() );
		$this->add_merge_tag( new MergeTag\User\UserLastName() );

		$this->add_merge_tag( new MergeTag\User\UserBio() );

		$this->add_merge_tag(
			new MergeTag\DateTime\DateTime(
				array(
					'slug' => 'user_logout_datetime',
					'name' => __( 'User logout time', 'notification' ),
				)
			)
		);

	}

}
