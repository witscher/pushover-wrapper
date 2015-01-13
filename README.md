# Use case:
I use this script with my [Loxone]
(http://www.loxone.com) 
Miniserver. 

## Why not use the pushover API directly?

* The Loxone Miniserver does not support HTTPS
* With the wrapper Script, only minimal changes in the Loxone config are necessary


# Requirements: 
a php capable Server which is connected to the internet (a raspberry pi with raspian is a rather good, cheap and stable solution)


# general setup:

copy config.inc.php.dist to config.inc.php. Edit the file and enter your pushover credentials


