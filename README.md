Code for my webserver. www.smealy.com

The file o2.py is scheduled by CRON and runs every minute. 

the page O2 graph (chart.php) samples oxygen readings every 5 seconds from the BBB's 12 bit ADC.

The O2 Readings page (O2.php) shows the last 10 log entrys generated by o2.py.

The BBB Stuff page (about.php) shows the core temperature and the AM335 cpu frequency executed directly from php.

place in crontab -e 

* * * * * sudo python /var/www/O2/o2.py
0 */1 * * * sudo python /home/ubuntu/update_dns

