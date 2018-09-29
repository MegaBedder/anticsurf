# anticsurf
A Small PHP library that can be used for Cross-Site Request Forgery defenses.

## Introduction
PHP doesn't have any function or mechanism for CSRF vulnerabilities. Developers must implement their own functions to defend against this vulnerability. So, I have coded a small one-time-token library.

### Some features of secureToken :

* Provides strong entropy for brute-force attacks
* Provides reliable uniqueness
* Guarantees one time usage of issued token
* Provides distinction between sessions.
* Provides timeout restrictions

### Usage & Wiki Links
* Installation & Usage Instructions : SetupandUsage 
* Use AntiCSurf on your HTMLForms : UsageHTMLForms 
* Use AntiCSurf on your links : UsageOnHrefLinks 
* Check the validity of tokens : UsageOnTokenChecking

### What is CSRF ?
According to the [Wikipedia](https://en.wikipedia.org/wiki/Cross-site_request_forgery) description :

> Cross-site request forgery, also known as one-click attack or session riding and abbreviated as CSRF or XSRF, is a type of malicious exploit of a website whereby unauthorized commands are transmitted from a user that the website trusts.

Check out [OWASP](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)) and [CGISecurity](http://www.cgisecurity.com/csrf-faq.html)'s pages for detailed descriptions.
