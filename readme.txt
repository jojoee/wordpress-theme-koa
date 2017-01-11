=== Koa ===

Koa - wordpress blog theme, inspired by [koa](http://koajs.com/)

Koa WordPress Theme, Copyright 2016 Nathachai Thongniran
Koa is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/licenses/gpl-2.0.html.

Koa WordPress Theme is derived from Sage WordPress Theme, Copyright 2013 Ben Word and Scott Walkinshaw
Sage WordPress Theme is distributed under the terms of the MIT

Koa WordPress Theme bundles the following third-party resources:

FastClick, Copyright 2014 The Financial Times Ltd
FastClick is licensed under the terms of the MIT
Source: https://github.com/ftlabs/fastclick

Font Awesome, Copyright 2012 Dave Gandy
Font Awesome is licensed under the terms of the MIT
Source: http://fontawesome.io/

Slideout.js, Copyright 2015 Mango
Slideout.js is licensed under the terms of the MIT
Source: https://slideout.js.org/

Jeans Kit, Copyright 2016 Nathachai Thongniran
Jeans Kit is licensed under the terms of the MIT
Source: https://github.com/jojoee/jeans-kit

=== Getting started (development purpose) ===

1. Set path (e.g. `cd wp-content/themes/wordpress-theme-koa/`)
2. Install global - `npm install -g bower gulp jscs`
3. Install dependencies - `npm install & bower install & composer install`
4. Set proxy on `devUrl` in `wp-content\themes\wordpress-theme-koa\assets\manifest.json`
5. Run task runner - `gulp` or `gulp` watch (for develop)

=== Note ===

* Based on [Sage](https://github.com/jojoee/sage-with-space)
* CSS code style: [rscss](http://rscss.io/)
* Javascript code style: [Airbnb JavaScript Style Guide](https://github.com/airbnb/javascript)
* Yoast SEO breadcrumb over Breadcrumb NavXT
* 3 footer sidebars but no right sidebar
* Menu: [slideout](https://github.com/Mango/slideout)
* Menu (alternative)
  * [jQuery-menu-aim](https://github.com/kamens/jQuery-menu-aim)
  * [jQuery.mmenu](https://github.com/FrDH/jQuery.mmenu)
  * [pushy](https://github.com/christophery/pushy)

=== Support ===

* [x] [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
* [x] [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* [x] [Really Simple CAPTCHA](https://wordpress.org/plugins/really-simple-captcha/)
* [x] [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) breadcrumb (page only)
* [x] [Breadcrumb NavXT](https://wordpress.org/plugins/breadcrumb-navxt/)
* [x] [Yet Another Related Posts Plugin (YARPP)](https://wordpress.org/plugins/yet-another-related-posts-plugin/)
* [x] [WordPress Popular Posts](https://wordpress.org/plugins/wordpress-popular-posts/)
* [x] [Facebook Comments](https://wordpress.org/plugins/facebook-comments-plugin/)
* [x] Gallery of [Jetpack by WordPress.com](https://wordpress.org/plugins/jetpack/) / [Slim Jetpack](https://wordpress.org/plugins/slimjetpack/)
* [ ] [Ninja Forms](https://wordpress.org/plugins/ninja-forms/)
* [ ] [MailChimp for WordPress](https://wordpress.org/plugins/mailchimp-for-wp/)
* [ ] [Disqus Comment System](https://wordpress.org/plugins/disqus-comment-system/)
* [ ] [Page Builder by SiteOrigin](https://wordpress.org/plugins/siteorigin-panels/)
* [ ] [SiteOrigin Widgets Bundle](https://wordpress.org/plugins/so-widgets-bundle/)
* [ ] [NextGEN Gallery](https://wordpress.org/plugins/nextgen-gallery/)
* [ ] [WooCommerce](https://wordpress.org/plugins/woocommerce/) and test with dummy woocommerce content
* [ ] [bbPress](https://wordpress.org/plugins/bbpress/)
* [ ] [BuddyPress](https://wordpress.org/plugins/buddypress/)

=== Future update ===

* [ ] Lightbox: (e.g. [MediumLightbox](https://github.com/davidecalignano/MediumLightbox), [Fluidbox](https://github.com/terrymun/Fluidbox), [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/))
* [x] Google Fonts: [Web Font Loader](https://github.com/typekit/webfontloader)
* [x] Theme Customizer by [Kirki](https://kirki.org/)@15commits
* [x] [TGM Plugin Activation](https://github.com/TGMPA/TGM-Plugin-Activation) - v2.6.1
* [ ] [FastClick](https://github.com/ftlabs/fastclick)
* [ ] Navmenu: when hover then show scrollbar
* [ ] Fix `.travis.yml`
* [ ] Translation ready

=== Changelog ===

= 1.0.4 =
* Fix minors

= 1.0.3 =
* Remove Kirki, TGM
* Update pot
* Fix minors

= 1.0.2 =
* Remove unused

= 1.0.1 =
* Restructure & refactor
* Remove unused and debug-related
* Fix minors

= 1.0.0 =
* First release

=== Checklist ===

* [x] Theme unit test: [wptest.io](http://wptest.io/)
* [x] Page Layout - [Home](http://localhost:3000/)
* [x] Page Layout - Archive: [Category](http://localhost:3000/category/codex/)
* [x] Page Layout - Archive: [Tag](http://localhost:3000/tag/8bit/)
* [x] Page Layout - Archive: [Author](http://localhost:3000/author/joe/)
* [x] Page Layout - Archive: [Date](http://localhost:3000/2012/12/)
* [x] Page Layout - Singular: [Post](http://wp11.dev/image-alignment/)
* [x] Page Layout - Singular: [Page](http://localhost:3000/about/)
* [x] Page Layout - [Attachment](http://localhost:3000/photo-1428189923803-e9801d464d76/)
* [x] Page Layout - [Search](http://localhost:3000/?s=test)
* [x] Page Layout - [404](http://localhost:3000/404/)
* [x] Component layout - Widget tested by [Monster Widget](https://wordpress.org/plugins/monster-widget/)
* [x] Component layout - Menu
* [x] Fixed `REQUIRED` of [Theme Check](https://wordpress.org/plugins/theme-check/)
* [x] [Log Deprecated Notices](https://wordpress.org/plugins/log-deprecated-notices/)
* [x] [RTL Tester](https://wordpress.org/plugins/rtl-tester/)

=== Reference & Thank you ===

* [Wordpress.org](https://wordpress.org/themes/)
* Photo by [Taylor Leopold](https://unsplash.com/photos/COE-CIGj8VA), [Creative Commons Zero](https://creativecommons.org/publicdomain/zero/1.0/)
