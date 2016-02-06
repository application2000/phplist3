<?php

/*

* ==============================================================================================================
* 
* 
* The minimum requirements to get phpList working are in this file. 
* If you are interested in tweaking more options, check out the config_extended.php file
* or visit http://resources.phplist.com/system/config
* 
* ** NOTE: To use options from config_extended.php, you need to copy them to this file **
* 
==============================================================================================================

*/

# select the language module to use
# Look for <country>.inc files in the texts directory
# to find your language
# this is the language for the frontend pages. In the admin pages you can
# choose your language by using the dropdown in the pages.
$language_module = 'french.inc';

## default system language
# set the default system language. If the language cannot be detected, it will fall back to
# this one. It has to be the "ISO code" of the language.
# to find what languages are available here, check out http://translate.phplist.com/
$default_system_language = 'fr';

# what is your Mysql database server
$database_host = 'localhost';

# what is the name of the database we are using
$database_name = 'bdd_mailing';

# who do we log in as?
$database_user = 'root_mailing';

# and what password do we use
$database_password = '76hPmZ48kUKr3HBvDonL';

# enable database connection compression
$database_connection_compression = false;

# force database connection to use SSL
$database_connection_ssl = false;

# if you use multiple installations of phpList you can set this to
# something to identify this one. it will be prepended to email report
# subjects
$installation_name = 'TLMC';

# if you want a prefix to all your tables, specify it here,
$table_prefix = 'phplist_';

# if you want to use a different prefix to user tables, specify it here.
# read README.usertables for more information
$usertable_prefix = 'phplist_user_';



# if you have an SMTP server, set it here. Otherwise it will use the normal php mail() function
## if your SMTP server is called "smtp.mydomain.com" you enter this below like this:
##
##     define("PHPMAILERHOST",'smtp.mydomain.com');

define('PHPMAILERHOST', '');

# if test is true (not 0) it will not actually send ANY messages, but display what it would have sent
# this is here, to make sure you edited the config file and mails are not sent "accidentally"
# on unmanaged systems

define('TEST', 0);

/*

==============================================================================================================
* 
* Settings for handling bounces
* 
* This section is OPTIONAL, and not necessary to send out mailings, but it is highly recommended to correctly 
* set up bounce processing. Without processing of bounces your system will end up sending large amounts of
* unnecessary messages, which overloads your own server, the receiving servers and internet traffic as a whole
* 
==============================================================================================================

*/

# Message envelope.
#
# This is the address that most bounces will be delivered to
# Your should make this an address that no PERSON reads
# but a mailbox that phpList can empty every so often, to process the bounces

# $message_envelope = 'listbounces@yourdomain';

# Handling bounces. Check README.bounces for more info
# This can be 'pop' or 'mbox'
$bounce_protocol = 'pop';

# set this to 0, if you set up a cron to download bounces regularly by using the
# commandline option. If this is 0, users cannot run the page from the web
# frontend. Read README.commandline to find out how to set it up on the
# commandline
define('MANUALLY_PROCESS_BOUNCES', 1);

# when the protocol is pop, specify these three
$bounce_mailbox_host = 'localhost';
$bounce_mailbox_user = 'popuser';
$bounce_mailbox_password = 'password';

# the "port" is the remote port of the connection to retrieve the emails
# the default should be fine but if it doesn't work, you can try the second
# one. To do that, add a # before the first line and take off the one before the
# second line
$bounce_mailbox_port = '110/pop3/notls';
#$bounce_mailbox_port = "110/pop3";

# it's getting more common to have secure connections, in which case you probably want to use
#$bounce_mailbox_port = "995/pop3/ssl/novalidate-cert";

# when the protocol is mbox specify this one
# it needs to be a local file in mbox format, accessible to your webserver user
$bounce_mailbox = '/var/mail/listbounces';

# set this to 0 if you want to keep your messages in the mailbox. this is potentially
# a problem, because bounces will be counted multiple times, so only do this if you are
# testing things.
$bounce_mailbox_purge = 1;

# set this to 0 if you want to keep unprocessed messages in the mailbox. Unprocessed
# messages are messages that could not be matched with a user in the system
# messages are still downloaded into phpList, so it is safe to delete them from
# the mailbox and view them in phpList
$bounce_mailbox_purge_unprocessed = 1;

# how many bounces in a row need to have occurred for a user to be marked unconfirmed
$bounce_unsubscribe_threshold = 5;

# choose the encryption method for password
# check the extended config for more info
# in most cases, it is fine to leave this as it is
define('ENCRYPTION_ALGO', 'sha256');