# 用PHP实现八皇后动画效果

题目：

在8格的国际象棋上摆放8个皇后，使其不能互相攻击，即任意两个皇后都不能处于同一行、同一列或同一斜线上，问有多少种摆法？<br />
  
![question](./img/8queens.jpeg "question")  

思路：

从上到下遍历每个可以放皇后的位置，遇到冲突向后查找。

命令行：

>php 8queens.php

效果：  
  
![effect](./img/solution.gif "effect")