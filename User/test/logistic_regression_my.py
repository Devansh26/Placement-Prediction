# Logistic Regression

# Importing the libraries
import sys,json
sys.path.insert(0,"c:/users/admin/appdata/local/programs/python/python36-32/lib/site-packages")
import pymysql
import numpy as np
import pandas as pd
from warnings import simplefilter
import warnings
from sklearn.exceptions import DataConversionWarning

simplefilter(action='ignore', category=FutureWarning)
warnings.filterwarnings(action='ignore', category=DataConversionWarning)


user=sys.argv[1]
#user = json.loads(sys.argv[1])
#user='devansh981226@gmail.com'
# Importing the dataset
#dataset = pd.read_csv('finalplacementdata3.csv')
db = pymysql.connect("localhost","root","","placement") #(localhot,username,password,tablename)
cursor = db.cursor()

query = "SELECT Quants,LR,Verbal,Programming,CGPA,Networking,CC,WS,DA,QA,AI FROM `placement_data`"

cursor.execute(query)

result = cursor.fetchall() #//result = (1,2,3,) or  result =((1,3),(4,5),)

final_result = [list(i) for i in result]
X = np.asarray(final_result)
#X = np.reshape(eval_data12, (-1, 11))

query = "SELECT Placed FROM `placement_data`"

cursor.execute(query)

result = cursor.fetchall() #//result = (1,2,3,) or  result =((1,3),(4,5),)

final_result = [list(i) for i in result]
y = np.asarray(final_result)
#y = np.reshape(eval_data12, (-1, 11))

db.close()
#X = dataset.iloc[:, range(1, 12)].values

#y = dataset.iloc[:, 12].values
#print(type(X))
#print(type(y))
# Splitting the dataset into the Training set and Test set
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.25, random_state = 0)


# Feature Scaling
from sklearn.preprocessing import StandardScaler
sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

# Fitting Logistic Regression to the Training set
from sklearn.linear_model import LogisticRegression
classifier = LogisticRegression(random_state = 0)
classifier.fit(X_train, y_train)

# Predicting the Test set results
y_pred = classifier.predict(X_test)

# Making the Confusion Matrix
from sklearn.metrics import confusion_matrix
cm = confusion_matrix(y_test, y_pred)



'''x=input("Enter Data ")
x=x.split()
x=list(map(float,x))'''


db = pymysql.connect("localhost","root","","placement" ) #(localhot,username,password,tablename)
cursor = db.cursor()

#query = "SELECT Quants,LR,Verbal,Programming,CGPA,Networking,CC,WS,DA,QA,AI FROM `placement_data_1` WHERE email= 'devansh981226@gmail.com' "

cursor.execute('SELECT Quants,LR,Verbal,Programming,CGPA,Networking,CC,WS,DA,QA,AI FROM `placement_data_1` WHERE email= %s ' , (user))
#cursor.execute(query)

result = cursor.fetchall()

final_result = [list(i) for i in result]
X = np.asarray(final_result)

db.close()

#eval_data12 = np.asarray(x)
#eval_data1 = np.reshape(eval_data12, (-1, 11))

X_test = sc.transform(X)
y_pred = classifier.predict(X_test)
#print(y_pred)
if(y_pred==1):
    pl="Placed"
else:
    pl="NotPlaced"
print(pl, end = '')