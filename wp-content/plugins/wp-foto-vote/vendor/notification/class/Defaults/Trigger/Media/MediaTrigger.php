<?php
/**
 * Media trigger abstract
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\Trigger\Media;

use BracketSpace\Notification\Abstracts;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Media trigger class
 */
abstract class MediaTrigger extends Abstracts\Trigger {

	/**
	 * Constructor
	 *
	 * @param string $slug $params trigger slug.
	 * @param string $name $params trigger name.
	 */
	public function __construct( $slug, $name ) {
		parent::__construct( $slug, $name );
		$this->set_group( __( 'Media', 'notification' ) );
	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {
		$this->add_merge_tag( new MergeTag\Media\AttachmentID() );
		$this->add_merge_tag( new MergeTag\Media\AttachmentPage() );
		$this->add_merge_tag( new MergeTag\Media\AttachmentTitle() );
		$this->add_merge_tag( new MergeTag\Media\AttachmentMimeType() );
		$this->add_merge_tag( new MergeTag\Media\AttachmentDirectUrl() );

		$this->add_merge_tag(
			new MergeTag\DateTime\DateTime(
				array(
					'slug' => 'attachment_creation_date',
					'name' => __( 'Attachment creation date', 'notification' ),
				)
			)
		);

		// Author.
		$this->add_merge_tag(
			new MergeTag\User\UserID(
				array(
					'slug' => 'attachment_author_user_ID',
					'name' => __( 'Attachment author user ID', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserLogin(
				array(
					'slug' => 'attachment_author_user_login',
					'name' => __( 'Attachment author user login', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserEmail(
				array(
					'slug' => 'attachment_author_user_email',
					'name' => __( 'Attachment author user email', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserNicename(
				array(
					'slug' => 'attachment_author_user_nicename',
					'name' => __( 'Attachment author user nicename', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserDisplayName(
				array(
					'slug' => 'attachment_author_user_display_name',
					'name' => __( 'Attachment author user display name', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserFirstName(
				array(
					'slug' => 'attachment_author_user_firstname',
					'name' => __( 'Attachment author user first name', 'notification' ),
				)
			)
		);

		$this->add_merge_tag(
			new MergeTag\User\UserLastName(
				array(
					'slug' => 'attachment_author_user_lastname',
					'name' => __( 'Attachment author user last name', 'notification' ),
				)
			)
		);
	}

}
