/*
 * obscureemail.js:
 * Simple and nasty encoding for email addresses in Javascript.
 *
 * Copyright (c) 2006 Chris Lightfoot. All rights reserved.
 * Email: chris@ex-parrot.com; WWW: http://www.ex-parrot.com/~chris/
 *
 * $Id: obscureemail.js,v 1.1 2006/07/23 18:45:58 chris Exp $
 *
 */

function decodeEmail(s, p) {
    s2 = '';
    for (i = 0; i < p.length; ++i)
        s2 += s.charAt(p[i]);
    return s2;
}

function showEmail(s, p, a) {
    m = 'm' + 'a' + 'i' + 'l' + 't' + 'o';
    s2 = decodeEmail(s, p);
    if (!a) a = s2;
    document.write('<a href="' + m + ':'
                        + s2
                    + '">'
                        + a
                    + '</a>');
}
