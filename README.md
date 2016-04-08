# svg-smartpath
Simple tool that adds a canvas rotation function to the svg path, making it easier to create geometry figures.

###square example 
smartpath
```
M 10 10 H 100 R 90 H 100 R 90 H 100 Z
```
converts to normal path
```
M 10 10 H 100 V 100 H -100 Z
```

###triangle example 
smartpath
```
M 10 10 R 45 H 100 R 315 H 100 Z
```
converts to normal path
```
M 10 10 L 80.7106 80.7106 H -100 Z
```
