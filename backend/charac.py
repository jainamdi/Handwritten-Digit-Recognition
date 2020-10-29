import numpy
import pandas
import matplotlib.pyplot as plt
from sklearn import datasets
from sklearn import svm

d=datasets.load_digits();


#print d.target

clf=svm.SVC(gamma=0.001,C=100)

X,y=d.data[:-10],d.target[:-10]

clf.fit(X,y)

print (clf.predict(d.data[-5]))

plt.imshow(d.images[-5], cmap=plt.cm.gray_r, interpolation='nearest')
plt.show()






