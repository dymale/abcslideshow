
CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Installation
 * Credits


INTRODUCTION
------------

ABC-Slideshow module provides quick implementation of two (at present version) JavaScript libraries
to organize the slideshow.
ABC-Slideshow module covers cases of mock-up front-end development, demo website or the usage at the production
environment as the example of quick implementation of JavaScript library.


INSTALLATION
------------

1. Copy the abcslideshow directory to your sites/SITENAME/modules directory.

2. Download and extract the latest version of the JavaScript libraries:
   Nivo Slider - http://dev7studios.com/nivo-slider/ -> sites/all/libraries/nivo
   SlidesJS - http://slidesjs.com/ -> sites/all/libraries/slidesjs

3. Enable the module at SITENAME/admin/modules page.

4. Open administration page at SITENAME/admin/structure/abcslideshow
  4.1 Upload or use existing images with the slideshow
  4.2 Add path to images at Image Paths field, for example:
      sites/default/files/slideshow/dog-1.jpg
      sites/default/files/slideshow/dog-2.jpg
  4.3 Save the page

5. Open Blocks page at SITENAME/admin/structure/block
  5.1 Enable block "ABC-Slideshow block" by selecting the Region name from selector
  5.2 Save the page

CREDITS
-------
* Alexander Dymnikov (dymale)

