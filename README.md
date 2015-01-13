# Use case:
I use this script with my [Loxone]
(http://www.loxone.com) 
Miniserver. 

## Why not use the pushover API directly?

* The Loxone Miniserver does not support HTTPS
* With the wrapper Script, only minimal changes in the Loxone config are necessary


# Requirements: 
a php capable Server which is connected to the internet (a raspberry pi with raspian is a rather good, cheap and stable solution). You also need the php curl library.


# general setup:

copy config.inc.php.dist to config.inc.php. Edit the file and enter your pushover credentials


configuration in Loxone images:

![Konfiguration V/A]
(https://github.com/witscher/pushover-wrapper/blob/master/doc/images/virtueller_ausgang.png)

![Konfiguration Befehl]
(https://github.com/witscher/pushover-wrapper/blob/master/doc/images/virtueller_ausgang_befehl.png)

![Aufruf und AUslösen der notification]
(https://github.com/witscher/pushover-wrapper/blob/master/doc/images/aufruf.png)
