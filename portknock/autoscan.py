#!/usr/bin/python
# author: Bernard Parinas
# email: bparinas@hotmail.com

import nmap
res = open('tmp.csv','w')
host = open('hosts.txt', 'r')
nm = nmap.PortScanner()
for target in host:
  nm.scan(target, '1-65535')
  res.write(nm.csv())
host.close()
res.close()

#remove the header in csv and save it to a new file
with open('tmp.csv') as old, open('scanout.csv', 'w') as new:
   for line in old:
      if 'extrainfo' not in line:
         new.write(line)
old.close()
new.close()
