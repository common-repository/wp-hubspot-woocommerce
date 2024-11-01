=== Integration for HubSpot and WooCommerce ===
Contributors: crmperks, sbazzi, asif876
Tags: hubspot woocommerce plugin, hubspot, hubspot and woocommerce, hubspot and woocommerce integration, hubspot crm woocommerce
Requires at least: 3.8
Tested up to: 6.6
Stable tag: 1.1.7
Version: 1.1.7
WC requires at least: 3.0
WC tested up to: 9.1
Requires PHP: 5.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

HubSpot WooCommerce Plugin allows you to quickly integrate WooCommerce Orders with HubSpot.

== Description ==

Easily create Contact, Company, Task, Deal in HubSpot when an order is placed via WooCommerce. Learn more at [crmperks.com](https://www.crmperks.com/plugins/woocommerce-plugins/woocommerce-hubspot-plugin/?utm_source=wordpress&amp;utm_medium=directory&amp;utm_campaign=readme)


== HubSpot WooCommerce Integration Setup ==

* Go to WooCommerce -> Settings -> HubSpot tab then add new account.
* Go to WooCommerce -> HubSpot Feeds tab then create new feed.
* Map required HubSpot fields to WooCommerce Order fields.
* Send your test entry to HubSpot.
* Go to WooCommerce -> HubSpot Logs and verify, if entry was sent to HubSpot.


**Connect HubSpot Account**

Connect HubSpot Account to WooCommerce by simply oauth 2.0 authentication or API Key. Also you can connect multiple HubSpot accounts.

**Fields Mapping**

Simply Select HubSpot Object(Contact, Company, Task, Deal) then map WooCommerce Order fields to HubSpot Object(Contact, Company, Task, Deal) fields.

**Export Event**

Choose event, when WooCommerce Order data should be sent to HubSpot. For example , send WooCommerce Order to HubSpot on Order Completion.

**CRM Logs**

Plugin saves detailed log of each WooCommerce Order whether sent or not sent to HubSpot and easily resend an Order to HubSpot.


**Error Reporting**

If there is an error while sending data to HubSpot, an email containing the error details will be sent to the specified email address.


**Primary Key**

Instead of creating new Object(Contact, Company) in hubspot CRM, you can update old object(Contact, Company) by setting Primary Key field.

**Filter orders**

By default all Woocommerce orders are sent to HubSpot, but you can apply filters & setup rules to limit the orders sent to HubSpot. For example sending Orders from specific city to HubSpot.


**Assign Objects**

You can assign task and deal to any contact, similarly add any contact to a company.

**Send Data As Notes**

Send one to many WooCommerce Order fields data as Contact/Company Note in hubspot CRM.



<blockquote><strong>Premium Version.</strong>

Following features are available in Premium version only.<a href="https://www.crmperks.com/plugins/woocommerce-plugins/woocommerce-hubspot-plugin/?utm_source=wordpress&amp;utm_medium=directory&amp;utm_campaign=hubspot_readme">HubSpot WooCommerce Plugin Pro</a>

<ul>
 	<li>Add WooCommerce Order Items as Products to Hubspot Deals.</li>
 	<li>HubSpot Custom fields.</li>
 	<li>Add HubSpot Contact to Deal, Ticket, Task, Company.</li>
 	<li>Send WooCommerce Orders in bulk to Hubspot.</li>
 	<li>HubSpot Phone Number fields.</li>
 	<li>Add a Contact to lists and workflows in Hubspot CRM.</li>
 	<li>Assign owner to any object(Contact, Deal, Ticket, Company etc) in Hubspot CRM.</li>
 	<li>Update deals and tickets in HubSpot.</li>
 	<li>Set Ticket Status , Deals stage and Status in Hubspot CRM.</li>
 	<li>Track Google Analytics Parameters and Geolocation of a WooCommerce customer.</li>
 	<li>Lookup lead's email and phone number using popular email and phone lookup services.</li>
</ul>
</blockquote>

== Premium Addons ==

We have 20+ premium addons and new ones being added regularly, it's likely we have everything you'll ever need.[View All Add-ons](https://www.crmperks.com/add-ons/?utm_medium=referral&amp;utm_source=wordpress&amp;utm_campaign=WC+hubspot+Readme&amp;utm_content=WC)

== Want to send data to other crm ==
We have Premium Extensions for 20+ CRMs.[View All CRM Extensions](https://www.crmperks.com/plugin-category/woocommerce-plugins/?utm_source=wordpress&amp;utm_medium=directory&amp;utm_campaign=hubspot_readme)


== Our free HubSpot Plugins  ==
[Contact Form 7 HubSpot](https://wordpress.org/plugins/cf7-hubspot/)
[Gravity Forms HubSpot](https://wordpress.org/plugins/gf-hubspot/)



== Screenshots ==

1. Connect HubSpot Account.
2. Map HubSpot Fields to WooCommerce Order fields.
3. HubSpot logs.
4. Send WooCommerce Order to HubSpot.
5. Get Customer's email infomation from Full Contact(Premium feature).
6. Get Customer's geolocation, browser and OS (Premium feature).

== Frequently Asked Questions ==

= Where can I get support? =

Our team provides free support at <a href="https://www.crmperks.com/contact-us/">https://www.crmperks.com/contact-us/</a>.

= HubSpot and WooCommerce integration =

HubSpot integration with WooCommerce is very easy with this HubSpot WooCommerce integration Plugin. 

* Connect HubSpot account to woocommerce.
* Create Feed and Select HubSpot Object(Contact, Company, Task, Deal) then map WooCommerce Orders fields to HubSpot object fields.
* All Orders will be automatically sent to HubSpot.

= WooCommerce and HubSpot =

WooCommerce is a free ecommerce store for wordpress and HubSpot is a popuplar crm, you can integrate your Woocommerce and HubSpot with this free HubSpot WooCommerce Plugin.

= Hubspot CRM WooCommerce =

* Go to Woocommerce Settings then select "HubSpot" Tab.
* Click "Add new account" and connect your hubspot account.
* Go to HubSpot feeds, create new feed , select hubspot account and Object then map HubSpot fields to Woocommerce fields.
* Save feed then open any Woocommerce Order and click "Send to HubSpot" button.
* Go to hubspot Logs and verify if order was sent to hubspot.

== Changelog ==


= 1.1.7 =
* fixed "hubspot api error code" issue.

= 1.1.6 =
* fixed "order fee empty" issue.

= 1.1.5 =
* upgraded to hubspot API V3.

= 1.1.4 =
* fixed "line item price" issue.
* fixed "order update from log" issue.

= 1.1.3 =
* fixed "undefined order_total" issue.

= 1.1.2 =
* fixed "products library scope" issue.

= 1.1.1 =
* fixed "contacts lists scope missing" issue.

= 1.1.0 =
* fixed "missing scopes" issue.

= 1.0.9 =
* fixed "subscription types" issue.

= 1.0.8 =
* fixed "add to workflow when update is disabled" issue.

= 1.0.7 =
* fixed "html entity in hubspot options" issue.

= 1.0.6 =
* fixed "token expired" issue.

= 1.0.5 =
* fixed manual event spellings.

= 1.0.4 =
* added all woocommerce events.

= 1.0.3 =
* fixed custom field in feed.

= 1.0.2 =
* fixed checkbox issue in forms.
* added "pipeline" support for deals.
* fixed "assign company" feature.

= 1.0.1 =
* Fixed Woocommerce Order function warnings.

= 1.0.0 =
* Initial release.

