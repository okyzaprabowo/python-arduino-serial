import serial
from time import sleep
import sys


COM = 'COM7'# /dev/ttyACM0 (Sesuaikan jika menggunakan Linux)
BAUD = 9600

ser = serial.Serial(COM, BAUD, timeout = .1)

print('Waiting for Arduino');
sleep(3)
print(ser.name)

if("-m" in sys.argv or "--monitor" in sys.argv):
    monitor = True

else:
    monitor = False

while(1):
    val = str(ser.readline().decode().strip('\r\n'))
    valA = val.split("/")
    if(monitor == True):
        print(val, valA[7], end="\r", flush=True)
        sleep(1)