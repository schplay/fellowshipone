# Fellowship One API

## Interacting with Fellowship One

This package provides 2nd Party, and Vendor to Vendor authentication and the ability to make GET, POST, and PUT requests.  You must build your own package/controllers to actually interact with Fellowship One data.

For 2nd party authorization, before starting, you need to have a "Portal User" account that is linked to a specific user in your Fellowship One database.  You also must have a 2nd Party Application enabled in your church's Fellowship One admin section.

## Installation

### Service Provider

Add the following to your service provider array

    Schplay\F1\F1ServiceProvider

### Configuration

Copy the configuration file

    php artisan config:publish schplay/f1

Set the appropriate credentials and base URLs.

## Usage

In any class, add `use F1;` before the class declaration.

If using 3rd party or vendor to vendor authorization, you then need to dynamically set the base url and api secret using the Config class.

The builtin `F1` façade uses Guzzle's HTTP Client + OauthPlugin to make the requests.  Consult their documentation for building requests and handling responses.

For example, create a request to Fellowship One's API by using the appropriate endpoint and format:

    $request = F1::get('v1/people/statuses.json')->send();

Using Guzzle, there are multiple ways to handle the response:

    $response = $request->getBody(true);

Or, use Guzzle's built in `json()` method:

    $response = $request->json();

Check Guzzle's documentation for more help (including leveraging Exceptions, etc).

Questions: @avr