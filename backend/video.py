import cv2
import numpy as np
from matplotlib import pyplot as plt

img = cv2.imread('watch.jpg',cv2.IMREAD_COLOR)

#plt.imshow(img, interpolation='none')
#plt.show()

px=img[150,150]
print px