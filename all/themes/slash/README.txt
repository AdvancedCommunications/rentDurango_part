Drupal slash theme:
------------------
Author - Fredrik Jonsson fredrik at combonet dot se
Requires - Drupal 6+
License - GPL (see LICENSE)


Overview:
--------
The Slash theme is originally from Slashcode
<http://www.slashcode.com/>. I found a version for PHP-Nuke that I later
converted to Postnuke and now to Drupal.

The main style is dark red and there are additional styles that are,
black, blue (MacSlash) and green (Slashdot).

Tables are only used for the three column layout. For the rest CSS is
used.


Install:
-------
1. Place the slash directory in your themes folder (this will
   usually be "sites/all/themes/").
2. Log in as an administrator on your Drupal site and go to Administer > Site
   building > Themes (admin/build/themes) and make Slash the default theme.


Header backround image:
----------------------
Replace the image "header_bg.png" that comes with the theme, and each
style, with your own image with the same name to get a header background
image. The original "header_bg.png" is only a transperant placeholder.


Make a new style:
----------------
It's easy to make a new style. Duplicate a style folder, e.g.
"slash_blue", and name it something new. Edit the two corner pictures,
cl.png and cr.png, and the style.css file to some nice colours. Enable
the nyw style on the "administer >> configuration >> themes" page.


Compatibility:
-------------
Theme has been tested using:
- Safari 3.x (WebKit)
- Firefox 3.x (Gecko)
- Internet Explorer 7

It works with Internet Explorer 6 with some small display problems.
They are due to CSS bugs in IE, if someone has some clean and neat
patches for this I will commit them.


Last updated:
------------
$Id: README.txt,v 1.10 2008/09/12 19:06:09 frjo Exp $