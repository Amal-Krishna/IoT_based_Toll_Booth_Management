import serial
import MySQLdb

BAUD_RATE = 9600
RFID_BYTES = 12
ser = serial.Serial('COM3', BAUD_RATE)

while True:
	print 'Wating for RFID Tag......'
	rfid = ser.read(RFID_BYTES)
	print 'Tag Found', rfid
	ser.flushInput()		
	conn = MySQLdb.connect("localhost","root","","intern")
	cur = conn.cursor()
	cur.execute("insert into rfidtable(rfidno) values('%s')"  %(rfid))
	conn.commit()
	cur.close()
