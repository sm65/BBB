Code for my webserver.

The file o2.py is scheduled by CRON and runs every minute. 

The main page (index.php) samples oxygen readings every 5 seconds from the BBB's 12 bit ADC.

The O2 Readings page (O2.php) shows the last 10 log entrys generated by o2.py.

The BBB Stuff page (about.php) shows the core temperature and the AM335 cpu frequency executed directly from php.
