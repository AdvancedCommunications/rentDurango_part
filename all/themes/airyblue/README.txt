// $Id: README.txt,v 1.4 2009/11/10 07:55:36 geerlingguy Exp $

Thanks for downloading the Airy Blue theme, originally designed for Open Source Catholic (www.opensourcecatholic.com) by Jeff Geerling of Midwestern Mac, LLC (www.midwesternmac.com).


##############
To Install
##############

Download the theme from drupal.org, unzip the tarball, place it in sites/all/themes or sites/example.com/themes, and go to the admin/build/themes page on your Drupal site to enable the theme.


##############
Dependencies
##############
This theme REQUIRES the Zen core theme (2.x-dev as of this release) to be installed; without it, the theme will not work. You can download zen from http://drupal.org/project/zen (install it using the same process above).

Note: Zen 2.x-dev is currently still undergoing some structural changes, so this theme might be broken when you upgrade Zen to the latest -dev version. Always test before putting it on a production server! (There are no performance problems, however - you can use this theme without worrying).


##############
Maintenance Page
##############
In order to use this theme's maintenance page for your website (so it will not show the default 'minnelli' theme if your site is in maintenance mode or has a problem), you will need to add the line below to your settings.php file, before the closing ?> tag. For more information, see:
http://drupal.org/node/195435

$conf['maintenance_theme'] = 'airyblue';


##############
Graphic Header
##############
By default, the Title of the site is simply a text header at the top center of the display. If you'd like to make a graphic title (while preserving the text title—especially good for SEO), then you can do so following the steps below (which were used to create the header on www.opensourcecatholic.com):

1. Open the pages.css file in the airyblue folder.

2. Add the following lines in near the #site-name CSS definition (or replace that definition):

  h1#site-name,
  div#site-name
  {
    background: url(images/example-title.png) no-repeat top left;
    width: XXXpx;
    margin: 0 auto;
    padding-top: 0;
    height: 100px;
  }

  h1#site-name a,
  div#site-name a
  {
    display: block;
    text-indent: -9999px;
    height: 80px;
    width: XXXpx;
    padding-top: 20px;
  }

3. Place an example-title.png (which you'd like to use as your page title) file in the images folder.

4. Change the width values (so they match) to the width of your image.

5. Adjust the height/padding values according to the height of your title image.

Basically, what this code does is move the textual title off the screen (9999px to the left, to be exact), then places an image behind the place that text occupied.

Note: The Photoshop (PSD) file that was used to make this header is included in the 'sources' folder of the airyblue theme.

Note 2: If you'd like to change the positioning of the logo, you can do so by editing the 'top' and 'left' values for the #logo CSS selector in the pages.css file.


##############
Rounded Corners in Internet Explorer
##############
If you would like to give IE users and users of other older browsers the ability to see the rounded corners enjoyed by CSS3-compatible browsers, please see the Drupal issue #549590 and use the attached file: http://drupal.org/node/549590

Another solution is to implement a Javascript technique for making rounded corners in IE 6, 7, 8, etc. Just search Google for 'IE Rounded Corners,' and you'll be set!


##############
CSS Problems in Internet Explorer
##############

If you are experiencing layout problems in Internet Explorer 6/7/8, it might be caused by the number of CSS files referenced by this theme, along with all the modules enabled on the site. Internet Explorer may limit the number of CSS files you can reference.

To fix this problem, turn on CSS file aggregation in admin/settings/performance. This greatly reduces the number of CSS files loaded by the browser.