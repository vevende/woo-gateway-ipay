# Woo Payme Gateway

Contributors: vevende

Tags: store, sales, sell, mobile payment, Payme, credit card, debit card, woocommerce, bolivia, ecommerce, e-commerce

Requires at least: 4.1

Tested up to: 4.7.4

Stable tag: 3.2.0

License: GPLv3

License URI: http://www.gnu.org/licenses/gpl-3.0.html

Provides integration between Payme (Bolivia) mobile payments and WooCommerce.

## Description

Woo Payme Gateway plugin allows to easily add Payme Bolivia payment option to your Wordpress / Woocommerce website store. Credit and Debit card users from Bolivia will be able to pay using their internet enabled card.

You can integrate this to your Wordpress / Woocommerce Store and after applying to an Payme account start selling your products and services online. The plugin features also the testing mode for the required validation for the account and sandbox testing of sales.

## Features

* Sell products and services using Payme in your Wordpress / Woocommerce webpage.
* Helps in the activation of the Payme Business Account with the Testing Mode
* You can set and modify the identification and encriptation key directly in the admin panel.
* The confirmation and notification message are customizable.
* At the Checkout, an inline form is served from Payme site.
* Compatible with Woocommerce and any Woocommerce enabled theme.

## Installation

1. For installing the plugin, you need first to install Woocommerce plugin and have it activated.

2. After Woocommerce is working, download Woo Payme Gateway or select it from the Wordpress Plugin Directory. In the admin panel, select plugin -> install new. Then upload or search it in the Wordpress Plugin Directory.

3. After installation of Payme Plugin, you have to configure the basic settings in the plugin:
Go to WooCommerce -> Settings. In the Checkout panel, select Payme of the different Checkout Options.
* Enable Payme
* Select if you need to enable the testing mode
* Select the title of the payment method for the user (default is Payme)
* Select the description of the payment method for the user (default is Pay with Payme)
* Enter the identification and encryption key provided by Payme
* Enter your own Confirmation and Notification message
* In case of problems with the plugin, you can enable the debug log for troubleshooting.

Save the settings and the plugin is insalled. It will appear as an option of purchase for your clients in the checkout screen.

## Usage
Once the plugin is activated, it enables itself as one of the methods of the WC_Payment_Gateway and let users follow the same steps as the other payments methods.

The user after Payme payment method is selected, will be presented with a inline form that asks for valid credit/debit card, where the user input his/her information. After this, the user receives a message confirming the payment or an error message.

After the payment is effective, woocommerce receives a confirmation of the payment and the buying process continues.

## Frequently Asked Questions
* Can I use to process payments in Wordpress without installing woocommerce
No, this plugin requires woocommerce to work.

## Screenshots
1. Woocommerce Admin Panel Configuration
2. Checkout Process

## Changelog

Version 1.0
* Basic funcionality

## Upgrade Notice
None

## Copyright

woo-gateway-Payme, Copyright 2016 Vevende.com
woo-gateway-Payme is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

## Commercial Support
If you need help installing or modifying this plugin, you can get commercial support sending an email to info@zoftco.com and accessing http://vevende.com