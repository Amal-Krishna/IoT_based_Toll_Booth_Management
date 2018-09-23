import serial
import MySQLdb
import webbrowser
#obj = serial.Serial('COM3',9600)
#while obj.isOpen():
    #n=obj.readline()
    #print n
    #obj.close()
n=int(input("Enter a valid id"))
conn = MySQLdb.connect("localhost","root","","details")
cur = conn.cursor() 
res = cur.execute("select * from stat where id='%d'"%(n))
ans = cur.fetchone()
if ans is None:
    q='http://localhost/Project/register.html'
    webbrowser.open(q)
else:
    for i in ans:
        print(i)
    cur.execute("select Vehicle_type from stat where id='%d'"%(n))
    tns = cur.fetchone()

    cur.execute("select Deposit from stat where id='%d'"%(n))
    bal = cur.fetchone()
    for j in bal:
        print(j)
    for i in tns:
        print(i)
        if (i == 'Car'):
            v= j-30
            cur.execute("UPDATE stat SET Deposit = '%d' where id='%d'"% (v,n))
            print "Money Deducted"
            print "Access granted"
            #obj.write("Access Granted")
        elif (i == 'Truck'):
            v= j-80
            cur.execute("UPDATE stat SET Deposit = '%d' where id='%d'"% (v,n))
            print "Access granted"
            print "Money Deducted"
            #obj.write("Access Granted")
        elif  (i == 'Multi-Axile'):
            v= j-120
            cur.execute("UPDATE stat SET Deposit = '%d' where id='%d'"% (v,n))
            print "Access granted"
            print "Money Deducted"
            #obj.write("Access Granted")
        else:
            print "Access Denied"
            #obj.write("Access Denied")     
conn.commit()
cur.close()

