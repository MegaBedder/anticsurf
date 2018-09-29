SecureToken v0.2.1 : An One-Time-Token Class for PHP

Mesut Timur <mesut@h-labs.org>, February 2009

http://www.webguvenligi.org
http://www.h-labs.org
http://code.google.com/p/anticsurf/

Introduction
--------------
PHP doesn't have any function or mechanism for CSRF vulnerabilities. Developers must implement 
their own functions to defend against this vulnerability. So, I have coded a small one-time-token 
library.

Some features of secureToken :

    * Provides strong entropy for brute-force attacks
    * Provides reliable uniqueness
    * Guarantees one time usage of issued token
    * Provides distinction between sessions. 
    * Provides timeout mechanism.

Usage
-------------
Database connection details must be configured in the class file. 
Given DB dump can help about required db structure.
You can see sample usage of the class from usage.php.

Credits
------------
Thanks Bedirhan Urgun for his helpful recommendations.
Thanks Adrian Sangas for a critical bug notification & fix.

Documentation
-------------
A Turkish tutorial named "CSRF Kýlavuzu" that contains 
information about the CSRF defense issues can be found from 
http://www.webguvenligi.org.

Licensing
------------
This library is covered by the GNU GPL version 2 license.

Thanks!