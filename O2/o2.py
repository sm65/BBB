import subprocess
d = subprocess.Popen("date", stdout=subprocess.PIPE, shell=True)
(datenow, err) = d.communicate()
datenow = datenow.strip()
#print datenow
with open('/sys/devices/ocp.3/44e0d000.tscadc/tiadc/iio:device0/in_voltage4_raw', 'r') as f:
        read_data = f.read()
        f.closed
spanAtoD=3465
zeroAtoD=400
calfactor=20.9/(spanAtoD-zeroAtoD)
O2 =round( (int(read_data)-zeroAtoD)*calfactor,2)

print_data = str(datenow) + ', ' + str(O2) + ',' + ' %O2\n\r'
#print read_data
with open('/var/www/O2/Log.csv', 'a') as f:
        f.write(print_data)
        f.closed
