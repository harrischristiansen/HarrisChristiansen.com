import socket

# Setup Server
s = socket.socket()
port = 12345
s.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1) # Make Address Reusable - No Lockout
s.bind(('', port))
running = True;

s.listen(1)
while running:
	c, addr = s.accept()
	while running:
		data = c.recv(1024)
		if not data: break # Connection Lost
		if("Shutdown" in data): # Shutdown Command
			c.shutdown(1)
			c.close()
			running=False
			break
		print "Received: ",data
		c.send(data)
	print "Connection Lost"

print "[Server] Shutdown"
s.close() # Shutdown Server