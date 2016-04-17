import socket

UDP_IP = "0.0.0.0"
UDP_PORT = 5001

sock = socket.socket(socket.AF_INET, # Internet
                 socket.SOCK_DGRAM) # UDP
sock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)                
sock.bind((UDP_IP, UDP_PORT))
print "waiting"
try:
    while True:
        data, addr = sock.recvfrom(14) # buffer size is 1024 bytes
        print "received message:", data, " address:", addr
except KeyboardInterrupt:
    pass
    sock.close()
