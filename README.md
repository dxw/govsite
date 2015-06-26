GovSite
-------

GovSite is a customisable WordPress theme developed by [dxw](https://www.dxw.com/). It is based on the [Zurb Foundation 5](http://foundation.zurb.com/) framework.

#### Key features
* Multiple, flexible templates with video and multimedia support
* Clear, focussed design
* Configurable styles to match your branding
* Accessible to WCAG 2.0 AA standard
* Responsive design for a better mobile and tablet user experience
* Powerful internal search
* Human readable and search friendly URLs
* Social media integration
* Google Analytics baked in
* Browser support for IE7+, Firefox, Chrome, Safari, plus popular mobile browsers.

For more information about functionality, please refer to our [blog post about GovSite](https://www.dxw.com/2015/03/govsite-a-flexible-wordpress-theme-developed-by-dxw/).


Installation
------------

1. Download GovSite.
2. Upload the zip file to your `/wp-content/themes` folder in your WordPress install
3. Log in to your WordPress admin area.
4. Install the [Advanced Custom Fields](http://www.advancedcustomfields.com/) plugin.
5. Select the Appearance tab, then Themes.
6. Activate the GovSite theme

**NB:** GovSite requires installation of [Advanced Custom Fields](http://www.advancedcustomfields.com/) plugin, otherwise some of the fields on page templates and posts won't be available. 

The custom fields required for the theme will automatically be configured for the theme through a PHP file in the **app/posts/** folder. However, if you want to make changes to those fields or add new fields, remove the PHP file and import the XML file in **app/posts/** through the Advanced Custom Fields interface in the WordPress admin. 


Theme options
-------------

#### Colours

GovSite theme is built with SCSS. We use [Grunt](http://gruntjs.com/) for compiling it to CSS.

**Instructions on setting up Grunt and Bower:**

1. If you are unfamiliar with npm and don’t have node.js installed, [download](http://nodejs.org/download/) it first.
2. Then from them command line:
  - Install `grunt-cli` and `bower` globally with `npm install -g grunt-cli bower`.
  - Navigate to the vendor folder in your theme directory and run `npm install`. npm will look at `package.json` and automatically install the necessary dependencies. It will also automatically install front-end packages defined in `bower.json`.

You can now run various Grunt commands from the theme vendor folder:
* `grunt watch` - compile SCSS and JS assets when file changes are made
* `grunt imagemin` - compile image assets when file changes are made

npm requires write permissions so you might need to use an elevated terminal or prefix the command with `sudo`, i.e., `sudo npm install -g grunt-cli bower`.

Branded elements use colour variables to make it easier to customise. They are saved in a separate SCSS partial **colour.scss** in assets/scss/ folder.

Although the project is built using SCSS, you can still edit the final compiled CSS file and customise it to match the visual identity of your organisation.

When you update colours to match your branding, make sure they are accessible. There are online tools like [Contrast Colour Check](http://snook.ca/technical/colour_contrast/colour.html) where you can verify if your foreground and background colours meet the accessibility standards.

#### Appearance settings

GovSite includes additional options to customise your site. These pages are located in the **Appearance** tab in the WordPress admin area.

We've built-in the functionality that will allow you to add your company logo. You can upload it to your Media Library and then update the **Logo** settings pointing to the correct image.

You can modify links to your social media profiles by clicking on the **Social media** link in the WordPress sidebar navigation. At the moment we support icons for six sites: Facebook, Flickr, Google+, LinkedIn, Twitter and YouTube. Select the social media site you want to link to and paste the URL to your page. You don’t have to add all of them - only the fields with URLs will be displayed on the site.

**Footer link** is an additional option to add another call to action to your site.

You can also add a personalised favicon to your site. If you upload an image called **favicon.png** to the Media Library, GovSite theme will automatically display it as your website icon. Make sure that is only one such file uploaded. We advise to upload an image that has minimum 32 x 32 pixels size.

#### Google Analytics settings

GovSite theme includes the latest version of the Google Analytics code. You will need to create a GA account for your site. Then go to the **Settings > Google Analytics** tab in WordPress and paste your website tracking ID into the text field.

Page and post layouts
---------------------

#### Page templates

There are four templates available:
* Campaign page
* Contact page
* Homepage
* Default

#### Campaign page template

Campaign template allows you to have a featured image or video at the top of your page. You specify it in the **Featured video** custom field. Text from the default WordPress editor area will appear on the right of the featured content only if there is any image or video.

**Content blocks** custom field allows you to add two columns of additional features. We would recommend that images have the same size and headlines and copy have similar length.

**Bottom banner** area is designed for a call to action. You can customise the title, button text and button link.

#### Contact page template

Contact template allows you to embed a full width Google map just below the main site header. In order to do so, use the **Location** custom field area and paste the iframe src URL into the text box.

You can also include your company information in a special sidebar by filling in the **Contact details** box. Address, phone number and email address will be displayed with small icons on their left.

#### Homepage template

Homepage includes a banner, featured content, latest posts feed and another call to action in the sidebar further down the page.

You can specify the banner link in the **Main call to action** field. Text from the default WordPress editor area will be displayed above it.

**Images** custom field works similar to the Content blocks on the Campaign template. It is designed for featured content on the page that you can link with other areas on your site. We would recommend that images have the same size and headlines and copy have similar length.

**Side banner** will be displayed on the right, next to the latest news section. You can modify the title, content, button text and link.

**Link to the News page** allows you to add a URL to your news archive so you can link to it directly from the homepage.

#### Default page template

We haven't modified the default WordPress page template because each site has the need to include some standard content pages, like for example Privacy policy. We decided to display text on 66% of desktop screen width because this is the text area width that is the easiest to read.

#### Customising post

The design of single post can also be customised. Some of these options are similar to the Campaign page template.

You can decide whether you prefer to have a featured image or video by filling in the **Video/image and introduction** custom field area. Introduction will only appear if there is any video or image added to the post.

If you would like to have a full width image at the top instead, check the box for **Full width image**.

Posts also have a custom sidebar next to the main content. It’s designed for links related to the article content. You can add them as unordered list to the **Related content** box and they will be displayed in GovSite theme styling.

**Bottom banner** area has got the same functionality and editing options as it is on the Campaign page template.

Theme structure
-------------

GovSite directory structure:

* **app** - includes theme functions, registered custom fields and post types and other theme-specific elements
* **assets** - includes precompiled images, JS and SCSS files
* **build** - includes compiled assets that are used on the site: images, JS, CSS, as well as the icon font files
* **templates** - includes main layout file WordPress page templates
* **vendor** - includes `Gruntfile.js`, `package.json` and `bower.json` that install the necessary dependencies and compile assets

**NB:** GovSite's theme structure is defined by Whippet, our (early stage) framework for WordPress development. [Whippet](https://github.com/dxw/whippet) is currently pre-release, but it is not a dependency for using GovSite. Also available is [Whippet-server](https://github.com/dxw/whippet-server), a standalone tool for running WordPress sites during development without having to use Apache.

Authors
-------

Alex Sexton (alex@dxw.com)

Magda Faizov (magda@dxw.com)

Tom Adams (tom@dxw.com)
