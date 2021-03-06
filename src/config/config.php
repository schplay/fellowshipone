<?php
/**
 * Part of the F1 package.
 *
 * @package    F1
 * @version    1.5.0
 * @author     Aaron Van Ruler
 * @link       http://avr.io
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Authorization Protocol
    |--------------------------------------------------------------------------
    |
    | Use this variable to select the type of authorization your application
    | will be utilizing.
    |
    | Possible values include:
    | '1', '2', '3', and 'v2v'
    | Representing 1st party, 2nd party, 3rd party, and vendor to vendor, respectively.
    |
    */

    'authType' => 'v2v',

    /*
    |--------------------------------------------------------------------------
    | Consumer Key and Secret
    |--------------------------------------------------------------------------
    |
    | To find your Consumer Key and Secret for your application, log in to your
    | sandbox environment at https://staging-www.fellowshipone.com/login.aspx.
    | Once logged in, go to Admin | Integration | Application Keys.  Please do
    | not share your consumer key or secret with anyone outside of your
    | organization.
    |
    */

    'key' => '',
    'secret' => '',

    /*
    |--------------------------------------------------------------------------
    | Vendor Token
    |--------------------------------------------------------------------------
    |
    | Vendor token to be used for v2v authorization.
    |
    */

    'vendorToken' => '',

    /*
    |--------------------------------------------------------------------------
    | Credentials
    |--------------------------------------------------------------------------
    |
    | You will need to collect the User's credentials directly.  They can be
    | portal credentials or weblink/infellowship credentials.  If using portal
    | credentials, the account should be linked to a person record in
    | Fellowship One.
    |
    | This is done in Admin | Portal Users | Edit User | Link Person
    |
    */

    'username' => '',
    'password' => '',

    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    |
    | The location of the API for your programming use.  Insert your church
    | code in the base url.  Use 'portalUser' when using portal credentials and
    | 'weblinkUser' for weblink or infellowship credentials
    |
    */

    'baseUrl' => 'https://churchcode.staging.fellowshiponeapi.com',
    'accessTokenUrl' => '/v1/PortalUser/AccessToken',

);
