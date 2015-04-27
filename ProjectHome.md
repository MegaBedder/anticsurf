# Introduction #
PHP doesn't have any function or mechanism for CSRF vulnerabilities. Developers must implement their own functions to defend against this vulnerability. So, I have coded a small one-time-token library.

**Some features of secureToken** :

  * Provides strong entropy for brute-force attacks
  * Provides reliable uniqueness
  * Guarantees one time usage of issued token
  * Provides distinction between sessions.
  * Provides timeout restrictions
![http://www.webguvenligi.org/wp-content/themes/ocean-mist-10/images/owasp.png](http://www.webguvenligi.org/wp-content/themes/ocean-mist-10/images/owasp.png)

---

## Usage & Wiki Links ##
  * Download                          : http://www.webguvenligi.org/software/anticsurf/secureTokenv0.2.1.rar <br>
<ul><li>Installation & Usage Instructions : SetupandUsage <br>
</li><li>Use AntiCSurf on your HTMLForms   : <a href='http://code.google.com/p/anticsurf/wiki/UsageHTMLForms'>UsageHTMLForms</a> <br>
</li><li>Use AntiCSurf on your links       : UsageOnHrefLinks <br>
</li><li>Check the validity of tokens      : UsageOnTokenChecking <br>
<hr />
<h2>What is CSRF ?</h2></li></ul>

According to the <a href='http://en.wikipedia.org/wiki/Cross-site_request_forgery'>Wikipedia</a> description :<br>
<blockquote>Cross-site request forgery, also known as one-click attack or session riding and  abbreviated as CSRF or XSRF, is a type of malicious exploit of a website whereby  unauthorized commands are transmitted from a user that the website trusts.</blockquote>

Check out <a href='http://www.owasp.org/index.php/Cross-Site_Request_Forgery'>OWASP</a> and <a href='http://www.cgisecurity.com/csrf-faq.html'>CGISecurity's</a> pages for detailed descriptions.<br>
There is a Turkish tutorial named <a href='http://docs.google.com/Doc?id=dgqzqj5d_53gfnrg66m'>"CSRF Klavuzu"</a> for developers to understand and defend their code for CSRF vulnerabilities.