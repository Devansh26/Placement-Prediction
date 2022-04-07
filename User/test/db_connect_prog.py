import pymysql
import numpy as np
import pandas as pd

# Open database connection
db = pymysql.connect("localhost","root","","placement" ) #(localhot,username,password,tablename)

# prepare a cursor object using cursor() method
cursor = db.cursor()

query = "SELECT Quants,LR,Verbal,Programming,CGPA,Networking,CC,WS,DA,QA,AI FROM `placement_data`"

cursor.execute(query)

result = cursor.fetchall() #//result = (1,2,3,) or  result =((1,3),(4,5),)

final_result = [list(i) for i in result]

# execute SQL query using execute() method.
#cursor.execute("SELECT VERSION()")

# Fetch a single row using fetchone() method.
#data = cursor.fetchone()
#print ("Database version : %s " % data)
X = np.asarray(final_result)
#eval_data1 = np.reshape(eval_data12, (-1, 2))
# disconnect from server
print(type(X))
query = "SELECT Placed FROM `placement_data`"

cursor.execute(query)

result = cursor.fetchall() #//result = (1,2,3,) or  result =((1,3),(4,5),)

final_result = [list(i) for i in result]
y = np.asarray(final_result)
#y = np.reshape(eval_data12, (-1, 2))
print(type(y))

print(X[0].shape)
print(y[0].shape)
db.close()