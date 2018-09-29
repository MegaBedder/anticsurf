# Introduction
Results of some statistical randomness tests on uniqid function with more entropy

The page contains the results of some statistical randomness tests on uniqid function with more entropy enabled.
Tests have been accomplished by [ENT](http://www.fourmilab.ch/random/)

# Code used in Tests
```PHP
<?php
for($i=0;$i<100000;$i++)
{
	printf("%25X",uniqid(rand(),true));
}
?>
```

# Results

![alt text](https://github.com/MegaBedder/anticsurf/blob/master/wiki/entropy.jpg "Entropy test")
