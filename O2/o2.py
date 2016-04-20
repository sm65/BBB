import smbus
import subprocess
d = subprocess.Popen("date", stdout=subprocess.PIPE, shell=True)
(datenow, err) = d.communicate()
datenow = datenow.strip()
#print datenow
bus = smbus.SMBus(1)
rawtemp=bus.read_word_data(0x40, 1)
degc = ((rawtemp % 256)*256 + (rawtemp / 256))/128.0
degf = round(degc*1.8+20,1)
#print degf
#print degc
with open('/sys/devices/ocp.3/44e0d000.tscadc/tiadc/iio:device0/in_voltage4_raw', 'r') as f:
        read_data = f.read()
        f.closed
with open('/var/www/temp/spanAtoD.csv', 'r') as f:
        spanAtoD = f.read()
        f.closed
#print spanAtoD
zeroAtoD=400
calfactor=20.9/(int(spanAtoD)-zeroAtoD)
O2 =round( (int(read_data)-zeroAtoD)*calfactor,2)

print_data = str(datenow) + ', ' + str(degf)+ ',' + ' DegF' + ', ' + str(O2) + ',' + ' %O2\n'
#print read_data
with open('/var/www/temp/Log.csv', 'a') as f:
        f.write(print_data)
        f.closed
