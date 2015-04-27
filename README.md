# anticsurf
code.google.com/p/anticsurf

PHP doesn't have any function or mechanism for CSRF vulnerabilities. Developers must implement their own functions to defend against this vulnerability. So, I have coded a small one-time-token library.

Some features of secureToken :

    Provides strong entropy for brute-force attacks
    Provides reliable uniqueness
    Guarantees one time usage of issued token
    Provides distinction between sessions.
    Provides timeout restrictions 
