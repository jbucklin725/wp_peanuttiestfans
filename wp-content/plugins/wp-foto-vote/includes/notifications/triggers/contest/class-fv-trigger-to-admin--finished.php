<?php

use BracketSpace\Notification;

/**
 * Class FV_Trigger_To_Admin__Contest_Finished
 *  * @since 2.3.00
 */
class FV_Trigger_To_Admin__Contest_Finished extends Notification\Abstracts\Trigger {

    /** @var  FV_Contest $contest */
    public $contest;

    public function __construct() {

        // 1. Slug, can be prefixed with your plugin name.
        // 2. Title, should be translatable.
        parent::__construct(
            'fv/contest/to-admin/finished',
            __( '*Contest* has been finished', 'fv' )
        );

        // 1. Action hook.
        // 2. (optional) Action priority, default: 10.
        // 3. (optional) Action args, default: 1.
        // It's the same as add_action( 'my_action_hook', 'callback', 10, 2 ) with
        // only difference - the callback is always action() method (see below).
        $this->add_action( 'fv/notification/contest/to-admin/finished', 10, 1 );

        // 1. Trigger group, should be translatable.
        // This is optional, Group is displayed in the Trigger select.
        $this->set_group( 'WP Foto Vote (to admin)' );

        // 1. Trigger description, should be translatable.
        // This is optional, Description is displayed in the Trigger select.
        $this->set_description(
            'Fires when contest voting dates ends'
        );

    }

    /**
     * Assigns action callback args to object
     * Return `false` if you want to abort the trigger execution
     *
     * @param FV_Contest|bool $contest
     *
     * @return mixed void or false if no notifications should be sent
     */
    public function action( $contest ) {

        // We can assign any property here, whole object will be accessible in Merge Tag resolver.
        $this->contest = $contest;
    }

    /**
     * Registers attached merge tags
     *
     * @return void
     */
    public function merge_tags() {
        FV_Notification_Integration__Contest::get()->_add_default_tags( $this );
    }
}