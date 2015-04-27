# Introduction #

The page contains the results of some statistical randomness tests on uniqid function with more entropy enabled.
Tests have been accomplished by [ENT](http://www.fourmilab.ch/random/).

# Code used in Tests #
```
<?
for($i=0;$i<100000;$i++)
{
	printf("%25X",uniqid(rand(),true));
}
?>
```

# Results #

![http://anticsurf.googlecode.com/files/a.jpg](http://anticsurf.googlecode.com/files/a.jpg)