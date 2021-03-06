<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita62246dc0f89881516f90bb8dfe6afb1
{
    public static $files = array (
        'da253f61703e9c22a5a34f228526f05a' => __DIR__ . '/..' . '/wixel/gump/gump.class.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'BW\\Vkontakte' => __DIR__ . '/../..' . '/includes/libs/class-vkontakte-api.php',
        'FV' => __DIR__ . '/../..' . '/includes/class-fv.php',
        'FV_Abstract_Meta' => __DIR__ . '/../..' . '/includes/class-fv-abstract-meta.php',
        'FV_Abstract_Object' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-abstract-object.php',
        'FV_Abstract_Trigger_To_Admin__System' => __DIR__ . '/../..' . '/includes/notifications/triggers/class-fv-abstract-system-trigger.php',
        'FV_Activator' => __DIR__ . '/../..' . '/includes/class-fv-activator.php',
        'FV_Admin' => __DIR__ . '/../..' . '/admin/class-fv-admin.php',
        'FV_Admin_Actions' => __DIR__ . '/../..' . '/admin/class-fv-admin-actions.php',
        'FV_Admin_Ajax' => __DIR__ . '/../..' . '/admin/class-fv-admin-ajax.php',
        'FV_Admin_Competitor_Helper' => __DIR__ . '/../..' . '/admin/class-fv-admin-competitor-helper.php',
        'FV_Admin_Contest' => __DIR__ . '/../..' . '/admin/class-fv-admin-contest.php',
        'FV_Admin_Contest_Config_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-abstract-contest-config.php',
        'FV_Admin_Contest_Config_Helper' => __DIR__ . '/../..' . '/admin/class-fv-admin-contest-config-helper.php',
        'FV_Admin_Contest_Meta_Helper' => __DIR__ . '/../..' . '/admin/class-fv-admin-contest-meta-helper.php',
        'FV_Admin_Dismissible_Notice' => __DIR__ . '/../..' . '/includes/notice/class-admin-dismissible-notice.php',
        'FV_Admin_Export' => __DIR__ . '/../..' . '/admin/class-fv-admin-export.php',
        'FV_Admin_Notice_Helper' => __DIR__ . '/../..' . '/includes/notice/class-admin-notice-helper.php',
        'FV_Admin_Pages' => __DIR__ . '/../..' . '/admin/class-fv-admin-pages.php',
        'FV_Admin_Winners' => __DIR__ . '/../..' . '/admin/class-fv-admin-winners.php',
        'FV_Autoloader' => __DIR__ . '/../..' . '/includes/class-fv-autoloader.php',
        'FV_Competitor' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-competitor.php',
        'FV_Competitor_ABS' => __DIR__ . '/../..' . '/includes/db/class-fv-competitors-abstract.php',
        'FV_Competitor_Categories' => __DIR__ . '/../..' . '/includes/class-fv-competitor-categories.php',
        'FV_Competitor_Meta' => __DIR__ . '/../..' . '/includes/class-fv-competitor-meta.php',
        'FV_Contest' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-contest.php',
        'FV_Contest_Meta' => __DIR__ . '/../..' . '/includes/class-fv-contest-meta.php',
        'FV_Contests_List_Base' => __DIR__ . '/../..' . '/includes/class-fv-contests-list-base.php',
        'FV_Contests_List_Skins' => __DIR__ . '/../..' . '/includes/class-fv-contests-list-skins.php',
        'FV_Cron' => __DIR__ . '/../..' . '/includes/class-fv-cron.php',
        'FV_Customize_Control_Checkbox_Multiple' => __DIR__ . '/../..' . '/admin/customizer/controls/class-fv-customizer-control--checkbox-multiple.php',
        'FV_Customize_Control_Select' => __DIR__ . '/../..' . '/admin/customizer/controls/class-fv-customizer-control--select.php',
        'FV_Customizer' => __DIR__ . '/../..' . '/admin/customizer/class-fv-admin-customizer.php',
        'FV_Customizer__Design' => __DIR__ . '/../..' . '/admin/customizer/class-fv-admin-customizer--design.php',
        'FV_DB' => __DIR__ . '/../..' . '/includes/db/class-fv-db.php',
        'FV_Deactivator' => __DIR__ . '/../..' . '/includes/class-fv-deactivator.php',
        'FV_Element_Customizer_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-element-customizer-abstract.php',
        'FV_Functions' => __DIR__ . '/../..' . '/includes/class-fv-functions.php',
        'FV_GDPR_Tasks' => __DIR__ . '/../..' . '/includes/class-fv-gdpr.php',
        'FV_Image_Lightbox' => __DIR__ . '/../..' . '/includes/lightbox/class-fv-image-lightbox.php',
        'FV_Leaders_Base' => __DIR__ . '/../..' . '/includes/class-fv-leaders-base.php',
        'FV_Leaders_Skins' => __DIR__ . '/../..' . '/includes/class-fv-leaders-skins.php',
        'FV_Lightbox_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-lighbox-abstract.php',
        'FV_Lightbox_Evolution' => __DIR__ . '/../..' . '/includes/lightbox/class-fv-lightbox-evolution.php',
        'FV_Lightbox_Magnific_Popup' => __DIR__ . '/../..' . '/includes/lightbox/class-fv-lightbox-magnific-popup.php',
        'FV_Lightbox_iLightbox' => __DIR__ . '/../..' . '/public/lightbox/class-fv-lightbox-ilightbox.php',
        'FV_List_Competitors' => __DIR__ . '/../..' . '/includes/list-tables/class_competitors_list.php',
        'FV_List_Contests' => __DIR__ . '/../..' . '/includes/list-tables/class_contests_list.php',
        'FV_List_Votes_Log' => __DIR__ . '/../..' . '/includes/list-tables/class_votes_log_list.php',
        'FV_Loader' => __DIR__ . '/../..' . '/includes/class-fv-loader.php',
        'FV_Mailer' => __DIR__ . '/../..' . '/includes/class-fv-mailer.php',
        'FV_Notification_Integration__Abstract' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifications-abstract.php',
        'FV_Notification_Integration__Competitor' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifications-competitor.php',
        'FV_Notification_Integration__Contest' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifications-contest.php',
        'FV_Notification_Integration__System' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifications-system.php',
        'FV_Notifications_Core' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifications-core.php',
        'FV_Notifier' => __DIR__ . '/../..' . '/includes/notifications/class-fv-notifier.php',
        'FV_Public' => __DIR__ . '/../..' . '/public/class-fv-public.php',
        'FV_Public_Ajax' => __DIR__ . '/../..' . '/public/class-fv-public-ajax.php',
        'FV_Public_Assets' => __DIR__ . '/../..' . '/public/class-fv-public-assets.php',
        'FV_Public_Contests_List' => __DIR__ . '/../..' . '/public/class-fv-public-contests-list.php',
        'FV_Public_Countdown' => __DIR__ . '/../..' . '/public/class-fv-public-countdown.php',
        'FV_Public_Form' => __DIR__ . '/../..' . '/public/class-fv-public-form.php',
        'FV_Public_Gallery' => __DIR__ . '/../..' . '/public/class-fv-public-gallery.php',
        'FV_Public_Leaders' => __DIR__ . '/../..' . '/public/class-fv-public-leaders.php',
        'FV_Public_Single' => __DIR__ . '/../..' . '/public/class-fv-public-single.php',
        'FV_Public_Social_Login' => __DIR__ . '/../..' . '/public/class-fv-public-social-login.php',
        'FV_Public_Upload' => __DIR__ . '/../..' . '/public/class-fv-public-upload.php',
        'FV_Public_Upload_Orientation_Fix' => __DIR__ . '/../..' . '/public/class-fv-public-upload-orientation-fix.php',
        'FV_Public_Vote' => __DIR__ . '/../..' . '/public/class-fv-public-vote.php',
        'FV_Public_Winners' => __DIR__ . '/../..' . '/public/class-fv-public-winners.php',
        'FV_RVJ_ImageResize' => __DIR__ . '/../..' . '/includes/libs/class_resize.php',
        'FV_Settings' => __DIR__ . '/../..' . '/includes/class-fv-settings.php',
        'FV_Singleton_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-singleton.php',
        'FV_Singleton_Customizable_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-singleton-customizable.php',
        'FV_Skin_Base' => __DIR__ . '/../..' . '/includes/class-fv-skin-base.php',
        'FV_Skin_Base_Abstract' => __DIR__ . '/../..' . '/includes/abstracts/class-fv-skin-base-abstract.php',
        'FV_Skins' => __DIR__ . '/../..' . '/includes/class-fv-skins.php',
        'FV_Skins_Abstract' => __DIR__ . '/../..' . '/includes/class-fv-skins-abstract.php',
        'FV_Subscribers_Log' => __DIR__ . '/../..' . '/includes/list-tables/class_subscribers_list.php',
        'FV_Templater' => __DIR__ . '/../..' . '/includes/class-fv-templater.php',
        'FV_Terms_List_Table' => __DIR__ . '/../..' . '/includes/list-tables/class_terms-list-table.php',
        'FV_Trigger_To_Admin__Contest_Finished' => __DIR__ . '/../..' . '/includes/notifications/triggers/contest/class-fv-trigger-to-admin--finished.php',
        'FV_Trigger_To_Admin__Reminder_To_Erase_Subscribers' => __DIR__ . '/../..' . '/includes/notifications/triggers/system/class-fv-trigger-to-admin--erase-subscribers.php',
        'FV_Trigger_To_Admin__Uploaded' => __DIR__ . '/../..' . '/includes/notifications/triggers/competitors/class-fv-trigger-to-admin--uploaded.php',
        'FV_Trigger_To_User__Approved' => __DIR__ . '/../..' . '/includes/notifications/triggers/competitors/class-fv-trigger-to-user--approved.php',
        'FV_Trigger_To_User__Deleted' => __DIR__ . '/../..' . '/includes/notifications/triggers/competitors/class-fv-trigger-to-user--deleted.php',
        'FV_Trigger_To_User__Uploaded' => __DIR__ . '/../..' . '/includes/notifications/triggers/competitors/class-fv-trigger-to-user--uploaded.php',
        'FV_Trigger_To_User__Verify_Email' => __DIR__ . '/../..' . '/includes/notifications/triggers/contest/class-fv-trigger-to-user--verify-email.php',
        'FV_Trigger_To_User__Winner' => __DIR__ . '/../..' . '/includes/notifications/triggers/competitors/class-fv-trigger-to-user--winner.php',
        'FV_WP_List_Table' => __DIR__ . '/../..' . '/includes/libs/class-fv-wp-list-table.php',
        'FV_WP_Social_Login_Integration' => __DIR__ . '/../..' . '/public/class-fv-wp-social-login-integration.php',
        'FV_Winners_Base' => __DIR__ . '/../..' . '/includes/class-fv-winners-base.php',
        'FV_Winners_Skins' => __DIR__ . '/../..' . '/includes/class-fv-winners-skins.php',
        'Facebook\\Authentication\\AccessToken' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/AccessToken.php',
        'Facebook\\Authentication\\AccessTokenMetadata' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/AccessTokenMetadata.php',
        'Facebook\\Authentication\\OAuth2Client' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/OAuth2Client.php',
        'Facebook\\Exceptions\\FacebookAuthenticationException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookAuthenticationException.php',
        'Facebook\\Exceptions\\FacebookAuthorizationException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookAuthorizationException.php',
        'Facebook\\Exceptions\\FacebookClientException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookClientException.php',
        'Facebook\\Exceptions\\FacebookOtherException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookOtherException.php',
        'Facebook\\Exceptions\\FacebookResponseException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookResponseException.php',
        'Facebook\\Exceptions\\FacebookResumableUploadException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookResumableUploadException.php',
        'Facebook\\Exceptions\\FacebookSDKException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookSDKException.php',
        'Facebook\\Exceptions\\FacebookServerException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookServerException.php',
        'Facebook\\Exceptions\\FacebookThrottleException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookThrottleException.php',
        'Facebook\\Facebook' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Facebook.php',
        'Facebook\\FacebookApp' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookApp.php',
        'Facebook\\FacebookBatchRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookBatchRequest.php',
        'Facebook\\FacebookBatchResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookBatchResponse.php',
        'Facebook\\FacebookClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookClient.php',
        'Facebook\\FacebookRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookRequest.php',
        'Facebook\\FacebookResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookResponse.php',
        'Facebook\\FileUpload\\FacebookFile' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookFile.php',
        'Facebook\\FileUpload\\FacebookResumableUploader' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookResumableUploader.php',
        'Facebook\\FileUpload\\FacebookTransferChunk' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookTransferChunk.php',
        'Facebook\\FileUpload\\FacebookVideo' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookVideo.php',
        'Facebook\\FileUpload\\Mimetypes' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/Mimetypes.php',
        'Facebook\\GraphNodes\\Birthday' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/Birthday.php',
        'Facebook\\GraphNodes\\Collection' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/Collection.php',
        'Facebook\\GraphNodes\\GraphAchievement' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphAchievement.php',
        'Facebook\\GraphNodes\\GraphAlbum' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphAlbum.php',
        'Facebook\\GraphNodes\\GraphApplication' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphApplication.php',
        'Facebook\\GraphNodes\\GraphCoverPhoto' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphCoverPhoto.php',
        'Facebook\\GraphNodes\\GraphEdge' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphEdge.php',
        'Facebook\\GraphNodes\\GraphEvent' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphEvent.php',
        'Facebook\\GraphNodes\\GraphGroup' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphGroup.php',
        'Facebook\\GraphNodes\\GraphList' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphList.php',
        'Facebook\\GraphNodes\\GraphLocation' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphLocation.php',
        'Facebook\\GraphNodes\\GraphNode' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphNode.php',
        'Facebook\\GraphNodes\\GraphNodeFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphNodeFactory.php',
        'Facebook\\GraphNodes\\GraphObject' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphObject.php',
        'Facebook\\GraphNodes\\GraphObjectFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphObjectFactory.php',
        'Facebook\\GraphNodes\\GraphPage' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphPage.php',
        'Facebook\\GraphNodes\\GraphPicture' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphPicture.php',
        'Facebook\\GraphNodes\\GraphSessionInfo' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphSessionInfo.php',
        'Facebook\\GraphNodes\\GraphUser' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphUser.php',
        'Facebook\\Helpers\\FacebookCanvasHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookCanvasHelper.php',
        'Facebook\\Helpers\\FacebookJavaScriptHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookJavaScriptHelper.php',
        'Facebook\\Helpers\\FacebookPageTabHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookPageTabHelper.php',
        'Facebook\\Helpers\\FacebookRedirectLoginHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookRedirectLoginHelper.php',
        'Facebook\\Helpers\\FacebookSignedRequestFromInputHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookSignedRequestFromInputHelper.php',
        'Facebook\\HttpClients\\FacebookCurl' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookCurl.php',
        'Facebook\\HttpClients\\FacebookCurlHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookCurlHttpClient.php',
        'Facebook\\HttpClients\\FacebookGuzzleHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookGuzzleHttpClient.php',
        'Facebook\\HttpClients\\FacebookHttpClientInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookHttpClientInterface.php',
        'Facebook\\HttpClients\\FacebookStream' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookStream.php',
        'Facebook\\HttpClients\\FacebookStreamHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookStreamHttpClient.php',
        'Facebook\\HttpClients\\HttpClientsFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/HttpClientsFactory.php',
        'Facebook\\Http\\GraphRawResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/GraphRawResponse.php',
        'Facebook\\Http\\RequestBodyInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyInterface.php',
        'Facebook\\Http\\RequestBodyMultipart' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyMultipart.php',
        'Facebook\\Http\\RequestBodyUrlEncoded' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyUrlEncoded.php',
        'Facebook\\PersistentData\\FacebookMemoryPersistentDataHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/FacebookMemoryPersistentDataHandler.php',
        'Facebook\\PersistentData\\FacebookSessionPersistentDataHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/FacebookSessionPersistentDataHandler.php',
        'Facebook\\PersistentData\\PersistentDataFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/PersistentDataFactory.php',
        'Facebook\\PersistentData\\PersistentDataInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/PersistentDataInterface.php',
        'Facebook\\PseudoRandomString\\McryptPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/McryptPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\OpenSslPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/OpenSslPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorFactory.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorInterface.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorTrait' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorTrait.php',
        'Facebook\\PseudoRandomString\\RandomBytesPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/RandomBytesPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\UrandomPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/UrandomPseudoRandomStringGenerator.php',
        'Facebook\\SignedRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/SignedRequest.php',
        'Facebook\\Url\\FacebookUrlDetectionHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/FacebookUrlDetectionHandler.php',
        'Facebook\\Url\\FacebookUrlManipulator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/FacebookUrlManipulator.php',
        'Facebook\\Url\\UrlDetectionInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/UrlDetectionInterface.php',
        'FvAddonBase' => __DIR__ . '/../..' . '/includes/class-fv-addon-base.php',
        'FvAddonsLocking' => __DIR__ . '/../..' . '/includes/wp-page-locker/locker-init.php',
        'FvDebug' => __DIR__ . '/../..' . '/includes/libs/class-fv-debug.php',
        'FvFormsLocking' => __DIR__ . '/../..' . '/includes/wp-page-locker/locker-init.php',
        'FvFunctions' => __DIR__ . '/../..' . '/includes/class-fv-functions.php',
        'FvLogger' => __DIR__ . '/../..' . '/includes/libs/class-fv-logger.php',
        'FvModel' => __DIR__ . '/../..' . '/includes/db/class-query.php',
        'FvQuery' => __DIR__ . '/../..' . '/includes/db/class-query.php',
        'FvSettingsLocking' => __DIR__ . '/../..' . '/includes/wp-page-locker/locker-init.php',
        'Fv_Empty_Unit' => __DIR__ . '/../..' . '/includes/libs/class_empty_unit.php',
        'Fv_Form_Helper' => __DIR__ . '/../..' . '/includes/class-fv-form-helper.php',
        'Fv_Options_Framework' => __DIR__ . '/../..' . '/admin/options-framework/includes/class-options-framework.php',
        'Fv_Options_Framework_Admin' => __DIR__ . '/../..' . '/admin/options-framework/includes/class-options-framework-admin.php',
        'Fv_Options_Framework_Color_RGBA' => __DIR__ . '/../..' . '/admin/options-framework/includes/class-options-color-rgba.php',
        'Fv_Options_Framework_Interface' => __DIR__ . '/../..' . '/admin/options-framework/includes/class-options-interface.php',
        'Fv_Options_Framework_Media_Uploader' => __DIR__ . '/../..' . '/admin/options-framework/includes/class-options-media-uploader.php',
        'Fv_Options_Framework_Sortable' => __DIR__ . '/../..' . '/admin/options-framework/fields/class-field-sortable.php',
        'Fv_Options_Framework_Taxonomy_Dropdown' => __DIR__ . '/../..' . '/admin/options-framework/fields/class-field-taxonomy-dropdown.php',
        'Fv_Theme_Base' => __DIR__ . '/../..' . '/includes/class-fv-theme-base.php',
        'ModelCompetitors' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-competitors.php',
        'ModelContest' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-contests.php',
        'ModelForms' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-forms.php',
        'ModelMeta' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-meta.php',
        'ModelSubscribers' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-subscribers.php',
        'ModelVotes' => __DIR__ . '/../..' . '/includes/db/class-fv-tbl-votes.php',
        'Test_Notifications' => __DIR__ . '/../..' . '/admin/libs/test-notifications/test-notifications.php',
        'WP_Admin_Dismissible_Notice' => __DIR__ . '/../..' . '/includes/notice-lib/class-admin-dismissible-notice.php',
        'Widget_FV_Gallery' => __DIR__ . '/../..' . '/includes/widget-gallery/class-widget.php',
        'Widget_FV_List' => __DIR__ . '/../..' . '/includes/widget-list/class-widget.php',
        'Widget_FV_List_Global' => __DIR__ . '/../..' . '/includes/widget-list-global/class-widget.php',
        'WpPageLocking' => __DIR__ . '/../..' . '/includes/wp-page-locker/wp-page-locker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita62246dc0f89881516f90bb8dfe6afb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita62246dc0f89881516f90bb8dfe6afb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita62246dc0f89881516f90bb8dfe6afb1::$classMap;

        }, null, ClassLoader::class);
    }
}
