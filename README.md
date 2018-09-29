# SecureToken v0.2.1 : An One-Time-Token Class for PHP
A Small PHP library that can be used for Cross-Site Request Forgery defenses.

## Introduction
PHP doesn't have any function or mechanism for CSRF vulnerabilities. Developers must implement their own functions to defend against this vulnerability. So, I have coded a small one-time-token library. PHP API to be used in PHP web applications to protect against vulnerability.

### Some features of secureToken :

* Provides strong entropy for brute-force attacks
* Provides reliable uniqueness
* Guarantees one time usage of issued token
* Provides distinction between sessions.
* Provides timeout restrictions

### Usage
* Database connection details must be configured in the class file. 
* Given DB dump can help about required db structure.
* You can see sample usage of the class from usage.php.

### Wiki Links
* [Installation & Usage Instructions](wiki/SetupandUsage.md)
* [Use AntiCSurf on your HTMLForms](wiki/UsageHTMLForms.md)
* [Use AntiCSurf on your links](wiki/UsageOnHrefLinks.md)
* [Check the validity of tokens](wiki/UsageOnTokenChecking.md)
* [Results of some statistical randomness tests](wiki/RandomnessTest.md)

### What is CSRF ?
According to the [Wikipedia](https://en.wikipedia.org/wiki/Cross-site_request_forgery) description :

> Cross-site request forgery, also known as one-click attack or session riding and abbreviated as CSRF or XSRF, is a type of malicious exploit of a website whereby unauthorized commands are transmitted from a user that the website trusts.

Check out [A Turkish document on defense against CSRF attacks](https://web.archive.org/web/20100703022141/https://docs.google.com/Doc?id=dgqzqj5d_53gfnrg66m), [OWASP](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)) and [CGISecurity](http://www.cgisecurity.com/csrf-faq.html)'s pages for detailed descriptions.
