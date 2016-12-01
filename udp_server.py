import socket
import subprocess
d = subprocess.Popen("date", stdout=subprocess.PIPE, shell=True)
(datenow, err) = d.communicate()
datenow = datenow.strip()
data="              error"
UDP_IP = "0.0.0.0"
UDP_PORT = 5001

sock = socket.socket(socket.AF_INET, # Internet
                 socket.SOCK_DGRAM) # UDP
sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)                
sock.bind((UDP_IP, UDP_PORT))
sock.settimeout(2)
print "waiting"
try:
    data, addr = sock.recvfrom(25) # buffer size is 1024 bytes
        #print "received message:", data, " address:", addr
except socket.timeout:
    sock.close()
print_data = str(datenow) + ', ' + data[15:20]
print print_data
with open('/var/www/temp/Log.csv', 'a') as f:
        f.write(print_data)
f.closed   
    
