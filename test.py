#!/usr/bin/env python3
import sys

import MySQLdb
import pandas as pd
import numpy as np
import pickle

conn = MySQLdb.connect (host="localhost",user="root",passwd ="",db="be_project")
cursor = conn.cursor()


cursor_1 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_1.execute("SELECT * FROM `user_exe1` WHERE 1")
data_1  = list(cursor_1)
pref = data_1[-1]["veg"]

data_1 = pd.DataFrame(list(data_1))
data_1 = data_1.iloc[:,[0,1,2,3,4,5,6,8,9]]


cursor_2 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_2.execute("SELECT * FROM `user_exe2` WHERE 1")
data_2  = list(cursor_2)
data_2 = pd.DataFrame(list(data_2))

cursor_3 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_3.execute("SELECT * FROM `user_exe3` WHERE 1")
data_3  = list(cursor_3)
data_3 = pd.DataFrame(list(data_3))


cursor_4 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_4.execute("SELECT * FROM `user_exe4` WHERE 1")
data_4  = list(cursor_4)
data_4 = pd.DataFrame(list(data_4))

cursor_5 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_5.execute("SELECT * FROM `user_exe5` WHERE 1")
data_5  = list(cursor_5)
data_5 = pd.DataFrame(list(data_5))

cursor_6 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_6.execute("SELECT * FROM `user_exe6` WHERE 1")
data_6  = list(cursor_6)
data_6 = pd.DataFrame(list(data_6))

cursor_7 = conn.cursor(MySQLdb.cursors.DictCursor)
cursor_7.execute("SELECT * FROM `user_exe7` WHERE 1")
data_7  = list(cursor_7)
data_7 = pd.DataFrame(list(data_7))


frames = [data_1, data_2, data_3, data_4, data_5, data_6, data_7]
result = pd.concat(frames, axis=1)
result = result.reindex_axis(sorted(result.columns), axis=1)

#for row1 in data_3 :
x_test = result.iloc[[-1]].values

from sklearn.ensemble import RandomForestClassifier
if pref:
    pickle_in = open('veg.pickle','rb')
    classifier = pickle.load(pickle_in)
    y_pred = classifier.predict(x_test)

else:
    pickle_in = open('nveg.pickle','rb')
    classifier = pickle.load(pickle_in)
    y_pred = classifier.predict(x_test)

#from sklearn.ensemble import RandomForestClassifier
#classifier = RandomForestClassifier(n_estimators = 500, criterion = 'entropy', random_state = 0)
#pickle_in = open('real.pickle','rb')
#classifier = pickle.load(pickle_in)
#y_pred = classifier.predict(x_test)

y_pred = y_pred[0]

print y_pred
cursor_1.close ()
cursor_2.close()
conn.close ()
