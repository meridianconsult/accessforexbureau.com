<?php die("Access Denied"); ?>#x#s:78938:"//
// Variables
// --------------------------------------------------


//== Colors
//
//## Gray and brand colors for use across Bootstrap.

@gray-darker:            lighten(#000, 13.5%); // #222
@gray-dark:              lighten(#000, 20%);   // #333
@gray:                   lighten(#000, 33.5%); // #555
@gray-light:             lighten(#000, 60%);   // #999
@gray-lighter:           lighten(#000, 93.5%); // #eee

@brand-primary:         #428bca;
@brand-success:         #5cb85c;
@brand-info:            #5bc0de;
@brand-warning:         #f0ad4e;
@brand-danger:          #d9534f;


//== Scaffolding
//
// ## Settings for some of the most global styles.

//** Background color for `<body>`.
@body-bg:               #fff;
//** Global text color on `<body>`.
@text-color:            @gray-dark;

//** Global textual link color.
@link-color:            @brand-primary;
//** Link hover color set via `darken()` function.
@link-hover-color:      darken(@link-color, 15%);


//== Typography
//
//## Font, line-height, and color for body text, headings, and more.

@font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
@font-family-serif:       Georgia, "Times New Roman", Times, serif;
//** Default monospace fonts for `<code>`, `<kbd>`, and `<pre>`.
@font-family-monospace:   Menlo, Monaco, Consolas, "Courier New", monospace;
@font-family-base:        @font-family-sans-serif;

@font-size-base:          14px;
@font-size-large:         ceil((@font-size-base * 1.25)); // ~18px
@font-size-small:         ceil((@font-size-base * 0.85)); // ~12px

@font-size-h1:            floor((@font-size-base * 2.6)); // ~36px
@font-size-h2:            floor((@font-size-base * 2.15)); // ~30px
@font-size-h3:            ceil((@font-size-base * 1.7)); // ~24px
@font-size-h4:            ceil((@font-size-base * 1.25)); // ~18px
@font-size-h5:            @font-size-base;
@font-size-h6:            ceil((@font-size-base * 0.85)); // ~12px

//** Unit-less `line-height` for use in components like buttons.
@line-height-base:        1.428571429; // 20/14
//** Computed "line-height" (`font-size` * `line-height`) for use with `margin`, `padding`, etc.
@line-height-computed:    floor((@font-size-base * @line-height-base)); // ~20px

//** By default, this inherits from the `<body>`.
@headings-font-family:    inherit;
@headings-font-weight:    500;
@headings-line-height:    1.1;
@headings-color:          inherit;


//-- Iconography
//
//## Specify custom locations of the include Glyphicons icon font. Useful for those including Bootstrap via Bower.

@icon-font-path:          "../fonts/";
@icon-font-name:          "glyphicons-halflings-regular";
@icon-font-svg-id:        "glyphicons_halflingsregular";

//== Components
//
//## Define common padding and border radius sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).

@padding-base-vertical:     6px;
@padding-base-horizontal:   12px;

@padding-large-vertical:    10px;
@padding-large-horizontal:  16px;

@padding-small-vertical:    5px;
@padding-small-horizontal:  10px;

@padding-xs-vertical:       1px;
@padding-xs-horizontal:     5px;

@line-height-large:         1.33;
@line-height-small:         1.5;

@border-radius-base:        4px;
@border-radius-large:       6px;
@border-radius-small:       3px;

//** Global color for active items (e.g., navs or dropdowns).
@component-active-color:    #fff;
//** Global background color for active items (e.g., navs or dropdowns).
@component-active-bg:       @brand-primary;

//** Width of the `border` for generating carets that indicator dropdowns.
@caret-width-base:          4px;
//** Carets increase slightly in size for larger components.
@caret-width-large:         5px;


//== Tables
//
//## Customizes the `.table` component with basic values, each used across all table variations.

//** Padding for `<th>`s and `<td>`s.
@table-cell-padding:            8px;
//** Padding for cells in `.table-condensed`.
@table-condensed-cell-padding:  5px;

//** Default background color used for all tables.
@table-bg:                      transparent;
//** Background color used for `.table-striped`.
@table-bg-accent:               #f9f9f9;
//** Background color used for `.table-hover`.
@table-bg-hover:                #f5f5f5;
@table-bg-active:               @table-bg-hover;

//** Border color for table and cell borders.
@table-border-color:            #ddd;


//== Buttons
//
//## For each of Bootstrap's buttons, define text, background and border color.

@btn-font-weight:                normal;

@btn-default-color:              #333;
@btn-default-bg:                 #fff;
@btn-default-border:             #ccc;

@btn-primary-color:              #fff;
@btn-primary-bg:                 @brand-primary;
@btn-primary-border:             darken(@btn-primary-bg, 5%);

@btn-success-color:              #fff;
@btn-success-bg:                 @brand-success;
@btn-success-border:             darken(@btn-success-bg, 5%);

@btn-info-color:                 #fff;
@btn-info-bg:                    @brand-info;
@btn-info-border:                darken(@btn-info-bg, 5%);

@btn-warning-color:              #fff;
@btn-warning-bg:                 @brand-warning;
@btn-warning-border:             darken(@btn-warning-bg, 5%);

@btn-danger-color:               #fff;
@btn-danger-bg:                  @brand-danger;
@btn-danger-border:              darken(@btn-danger-bg, 5%);

@btn-link-disabled-color:        @gray-light;


//== Forms
//
//##

//** `<input>` background color
@input-bg:                       #fff;
//** `<input disabled>` background color
@input-bg-disabled:              @gray-lighter;

//** Text color for `<input>`s
@input-color:                    @gray;
//** `<input>` border color
@input-border:                   #ccc;
//** `<input>` border radius
@input-border-radius:            @border-radius-base;
//** Border color for inputs on focus
@input-border-focus:             #66afe9;

//** Placeholder text color
@input-color-placeholder:        @gray-light;

//** Default `.form-control` height
@input-height-base:              (@line-height-computed + (@padding-base-vertical * 2) + 2);
//** Large `.form-control` height
@input-height-large:             (ceil(@font-size-large * @line-height-large) + (@padding-large-vertical * 2) + 2);
//** Small `.form-control` height
@input-height-small:             (floor(@font-size-small * @line-height-small) + (@padding-small-vertical * 2) + 2);

@legend-color:                   @gray-dark;
@legend-border-color:            #e5e5e5;

//** Background color for textual input addons
@input-group-addon-bg:           @gray-lighter;
//** Border color for textual input addons
@input-group-addon-border-color: @input-border;


//== Dropdowns
//
//## Dropdown menu container and contents.

//** Background for the dropdown menu.
@dropdown-bg:                    #fff;
//** Dropdown menu `border-color`.
@dropdown-border:                rgba(0,0,0,.15);
//** Dropdown menu `border-color` **for IE8**.
@dropdown-fallback-border:       #ccc;
//** Divider color for between dropdown items.
@dropdown-divider-bg:            #e5e5e5;

//** Dropdown link text color.
@dropdown-link-color:            @gray-dark;
//** Hover color for dropdown links.
@dropdown-link-hover-color:      darken(@gray-dark, 5%);
//** Hover background for dropdown links.
@dropdown-link-hover-bg:         #f5f5f5;

//** Active dropdown menu item text color.
@dropdown-link-active-color:     @component-active-color;
//** Active dropdown menu item background color.
@dropdown-link-active-bg:        @component-active-bg;

//** Disabled dropdown menu item background color.
@dropdown-link-disabled-color:   @gray-light;

//** Text color for headers within dropdown menus.
@dropdown-header-color:          @gray-light;

// Note: Deprecated @dropdown-caret-color as of v3.1.0
@dropdown-caret-color:           #000;


//-- Z-index master list
//
// Warning: Avoid customizing these values. They're used for a bird's eye view
// of components dependent on the z-axis and are designed to all work together.
//
// Note: These variables are not generated into the Customizer.

@zindex-navbar:            1000;
@zindex-dropdown:          1000;
@zindex-popover:           1010;
@zindex-tooltip:           1030;
@zindex-navbar-fixed:      1030;
@zindex-modal-background:  1040;
@zindex-modal:             1050;


//== Media queries breakpoints
//
//## Define the breakpoints at which your layout will change, adapting to different screen sizes.

// Extra small screen / phone
// Note: Deprecated @screen-xs and @screen-phone as of v3.0.1
@screen-xs:                  480px;
@screen-xs-min:              @screen-xs;
@screen-phone:               @screen-xs-min;

// Small screen / tablet
// Note: Deprecated @screen-sm and @screen-tablet as of v3.0.1
@screen-sm:                  768px;
@screen-sm-min:              @screen-sm;
@screen-tablet:              @screen-sm-min;

// Medium screen / desktop
// Note: Deprecated @screen-md and @screen-desktop as of v3.0.1
@screen-md:                  992px;
@screen-md-min:              @screen-md;
@screen-desktop:             @screen-md-min;

// Large screen / wide desktop
// Note: Deprecated @screen-lg and @screen-lg-desktop as of v3.0.1
@screen-lg:                  1200px;
@screen-lg-min:              @screen-lg;
@screen-lg-desktop:          @screen-lg-min;

// So media queries don't overlap when required, provide a maximum
@screen-xs-max:              (@screen-sm-min - 1);
@screen-sm-max:              (@screen-md-min - 1);
@screen-md-max:              (@screen-lg-min - 1);


//== Grid system
//
//## Define your custom responsive grid.

//** Number of columns in the grid.
@grid-columns:              12;
//** Padding between columns. Gets divided in half for the left and right.
@grid-gutter-width:         30px;
// Navbar collapse
//** Point at which the navbar becomes uncollapsed.
@grid-float-breakpoint:     @screen-sm-min;
//** Point at which the navbar begins collapsing.
@grid-float-breakpoint-max: (@grid-float-breakpoint - 1);


//== Container sizes
//
//## Define the maximum width of `.container` for different screen sizes.

// Small screen / tablet
@container-tablet:             ((720px + @grid-gutter-width));
//** For `@screen-sm-min` and up.
@container-sm:                 @container-tablet;

// Medium screen / desktop
@container-desktop:            ((940px + @grid-gutter-width));
//** For `@screen-md-min` and up.
@container-md:                 @container-desktop;

// Large screen / wide desktop
@container-large-desktop:      ((1140px + @grid-gutter-width));
//** For `@screen-lg-min` and up.
@container-lg:                 @container-large-desktop;


//== Navbar
//
//##

// Basics of a navbar
@navbar-height:                    50px;
@navbar-margin-bottom:             @line-height-computed;
@navbar-border-radius:             @border-radius-base;
@navbar-padding-horizontal:        floor((@grid-gutter-width / 2));
@navbar-padding-vertical:          ((@navbar-height - @line-height-computed) / 2);
@navbar-collapse-max-height:       340px;

@navbar-default-color:             #777;
@navbar-default-bg:                #f8f8f8;
@navbar-default-border:            darken(@navbar-default-bg, 6.5%);

// Navbar links
@navbar-default-link-color:                #777;
@navbar-default-link-hover-color:          #333;
@navbar-default-link-hover-bg:             transparent;
@navbar-default-link-active-color:         #555;
@navbar-default-link-active-bg:            darken(@navbar-default-bg, 6.5%);
@navbar-default-link-disabled-color:       #ccc;
@navbar-default-link-disabled-bg:          transparent;

// Navbar brand label
@navbar-default-brand-color:               @navbar-default-link-color;
@navbar-default-brand-hover-color:         darken(@navbar-default-brand-color, 10%);
@navbar-default-brand-hover-bg:            transparent;

// Navbar toggle
@navbar-default-toggle-hover-bg:           #ddd;
@navbar-default-toggle-icon-bar-bg:        #888;
@navbar-default-toggle-border-color:       #ddd;


// Inverted navbar
// Reset inverted navbar basics
@navbar-inverse-color:                      @gray-light;
@navbar-inverse-bg:                         #222;
@navbar-inverse-border:                     darken(@navbar-inverse-bg, 10%);

// Inverted navbar links
@navbar-inverse-link-color:                 @gray-light;
@navbar-inverse-link-hover-color:           #fff;
@navbar-inverse-link-hover-bg:              transparent;
@navbar-inverse-link-active-color:          @navbar-inverse-link-hover-color;
@navbar-inverse-link-active-bg:             darken(@navbar-inverse-bg, 10%);
@navbar-inverse-link-disabled-color:        #444;
@navbar-inverse-link-disabled-bg:           transparent;

// Inverted navbar brand label
@navbar-inverse-brand-color:                @navbar-inverse-link-color;
@navbar-inverse-brand-hover-color:          #fff;
@navbar-inverse-brand-hover-bg:             transparent;

// Inverted navbar toggle
@navbar-inverse-toggle-hover-bg:            #333;
@navbar-inverse-toggle-icon-bar-bg:         #fff;
@navbar-inverse-toggle-border-color:        #333;


//== Navs
//
//##

//=== Shared nav styles
@nav-link-padding:                          10px 15px;
@nav-link-hover-bg:                         @gray-lighter;

@nav-disabled-link-color:                   @gray-light;
@nav-disabled-link-hover-color:             @gray-light;

@nav-open-link-hover-color:                 #fff;

//== Tabs
@nav-tabs-border-color:                     #ddd;

@nav-tabs-link-hover-border-color:          @gray-lighter;

@nav-tabs-active-link-hover-bg:             @body-bg;
@nav-tabs-active-link-hover-color:          @gray;
@nav-tabs-active-link-hover-border-color:   #ddd;

@nav-tabs-justified-link-border-color:            #ddd;
@nav-tabs-justified-active-link-border-color:     @body-bg;

//== Pills
@nav-pills-border-radius:                   @border-radius-base;
@nav-pills-active-link-hover-bg:            @component-active-bg;
@nav-pills-active-link-hover-color:         @component-active-color;


//== Pagination
//
//##

@pagination-color:                     @link-color;
@pagination-bg:                        #fff;
@pagination-border:                    #ddd;

@pagination-hover-color:               @link-hover-color;
@pagination-hover-bg:                  @gray-lighter;
@pagination-hover-border:              #ddd;

@pagination-active-color:              #fff;
@pagination-active-bg:                 @brand-primary;
@pagination-active-border:             @brand-primary;

@pagination-disabled-color:            @gray-light;
@pagination-disabled-bg:               #fff;
@pagination-disabled-border:           #ddd;


//== Pager
//
//##

@pager-bg:                             @pagination-bg;
@pager-border:                         @pagination-border;
@pager-border-radius:                  15px;

@pager-hover-bg:                       @pagination-hover-bg;

@pager-active-bg:                      @pagination-active-bg;
@pager-active-color:                   @pagination-active-color;

@pager-disabled-color:                 @pagination-disabled-color;


//== Jumbotron
//
//##

@jumbotron-padding:              30px;
@jumbotron-color:                inherit;
@jumbotron-bg:                   @gray-lighter;
@jumbotron-heading-color:        inherit;
@jumbotron-font-size:            ceil((@font-size-base * 1.5));


//== Form states and alerts
//
//## Define colors for form feedback states and, by default, alerts.

@state-success-text:             #3c763d;
@state-success-bg:               #dff0d8;
@state-success-border:           darken(spin(@state-success-bg, -10), 5%);

@state-info-text:                #31708f;
@state-info-bg:                  #d9edf7;
@state-info-border:              darken(spin(@state-info-bg, -10), 7%);

@state-warning-text:             #8a6d3b;
@state-warning-bg:               #fcf8e3;
@state-warning-border:           darken(spin(@state-warning-bg, -10), 5%);

@state-danger-text:              #a94442;
@state-danger-bg:                #f2dede;
@state-danger-border:            darken(spin(@state-danger-bg, -10), 5%);


//== Tooltips
//
//##

//** Tooltip max width
@tooltip-max-width:           200px;
//** Tooltip text color
@tooltip-color:               #fff;
//** Tooltip background color
@tooltip-bg:                  #000;
@tooltip-opacity:             .9;

//** Tooltip arrow width
@tooltip-arrow-width:         5px;
//** Tooltip arrow color
@tooltip-arrow-color:         @tooltip-bg;


//== Popovers
//
//##

//** Popover body background color
@popover-bg:                          #fff;
//** Popover maximum width
@popover-max-width:                   276px;
//** Popover border color
@popover-border-color:                rgba(0,0,0,.2);
//** Popover fallback border color
@popover-fallback-border-color:       #ccc;

//** Popover title background color
@popover-title-bg:                    darken(@popover-bg, 3%);

//** Popover arrow width
@popover-arrow-width:                 10px;
//** Popover arrow color
@popover-arrow-color:                 #fff;

//** Popover outer arrow width
@popover-arrow-outer-width:           (@popover-arrow-width + 1);
//** Popover outer arrow color
@popover-arrow-outer-color:           fadein(@popover-border-color, 5%);
//** Popover outer arrow fallback color
@popover-arrow-outer-fallback-color:  darken(@popover-fallback-border-color, 20%);


//== Labels
//
//##

//** Default label background color
@label-default-bg:            @gray-light;
//** Primary label background color
@label-primary-bg:            @brand-primary;
//** Success label background color
@label-success-bg:            @brand-success;
//** Info label background color
@label-info-bg:               @brand-info;
//** Warning label background color
@label-warning-bg:            @brand-warning;
//** Danger label background color
@label-danger-bg:             @brand-danger;

//** Default label text color
@label-color:                 #fff;
//** Default text color of a linked label
@label-link-hover-color:      #fff;


//== Modals
//
//##

//** Padding applied to the modal body
@modal-inner-padding:         20px;

//** Padding applied to the modal title
@modal-title-padding:         15px;
//** Modal title line-height
@modal-title-line-height:     @line-height-base;

//** Background color of modal content area
@modal-content-bg:                             #fff;
//** Modal content border color
@modal-content-border-color:                   rgba(0,0,0,.2);
//** Modal content border color **for IE8**
@modal-content-fallback-border-color:          #999;

//** Modal backdrop background color
@modal-backdrop-bg:           #000;
//** Modal backdrop opacity
@modal-backdrop-opacity:      .5;
//** Modal header border color
@modal-header-border-color:   #e5e5e5;
//** Modal footer border color
@modal-footer-border-color:   @modal-header-border-color;

@modal-lg:                    900px;
@modal-md:                    600px;
@modal-sm:                    300px;


//== Alerts
//
//## Define alert colors, border radius, and padding.

@alert-padding:               15px;
@alert-border-radius:         @border-radius-base;
@alert-link-font-weight:      bold;

@alert-success-bg:            @state-success-bg;
@alert-success-text:          @state-success-text;
@alert-success-border:        @state-success-border;

@alert-info-bg:               @state-info-bg;
@alert-info-text:             @state-info-text;
@alert-info-border:           @state-info-border;

@alert-warning-bg:            @state-warning-bg;
@alert-warning-text:          @state-warning-text;
@alert-warning-border:        @state-warning-border;

@alert-danger-bg:             @state-danger-bg;
@alert-danger-text:           @state-danger-text;
@alert-danger-border:         @state-danger-border;


//== Progress bars
//
//##

//** Background color of the whole progress component
@progress-bg:                 #f5f5f5;
//** Progress bar text color
@progress-bar-color:          #fff;

//** Default progress bar color
@progress-bar-bg:             @brand-primary;
//** Success progress bar color
@progress-bar-success-bg:     @brand-success;
//** Warning progress bar color
@progress-bar-warning-bg:     @brand-warning;
//** Danger progress bar color
@progress-bar-danger-bg:      @brand-danger;
//** Info progress bar color
@progress-bar-info-bg:        @brand-info;


//== List group
//
//##

//** Background color on `.list-group-item`
@list-group-bg:                 #fff;
//** `.list-group-item` border color
@list-group-border:             #ddd;
//** List group border radius
@list-group-border-radius:      @border-radius-base;

//** Background color of single list elements on hover
@list-group-hover-bg:           #f5f5f5;
//** Text color of active list elements
@list-group-active-color:       @component-active-color;
//** Background color of active list elements
@list-group-active-bg:          @component-active-bg;
//** Border color of active list elements
@list-group-active-border:      @list-group-active-bg;
@list-group-active-text-color:  lighten(@list-group-active-bg, 40%);

@list-group-link-color:         #555;
@list-group-link-heading-color: #333;


//== Panels
//
//##

@panel-bg:                    #fff;
@panel-body-padding:          15px;
@panel-border-radius:         @border-radius-base;

//** Border color for elements within panels
@panel-inner-border:          #ddd;
@panel-footer-bg:             #f5f5f5;

@panel-default-text:          @gray-dark;
@panel-default-border:        #ddd;
@panel-default-heading-bg:    #f5f5f5;

@panel-primary-text:          #fff;
@panel-primary-border:        @brand-primary;
@panel-primary-heading-bg:    @brand-primary;

@panel-success-text:          @state-success-text;
@panel-success-border:        @state-success-border;
@panel-success-heading-bg:    @state-success-bg;

@panel-info-text:             @state-info-text;
@panel-info-border:           @state-info-border;
@panel-info-heading-bg:       @state-info-bg;

@panel-warning-text:          @state-warning-text;
@panel-warning-border:        @state-warning-border;
@panel-warning-heading-bg:    @state-warning-bg;

@panel-danger-text:           @state-danger-text;
@panel-danger-border:         @state-danger-border;
@panel-danger-heading-bg:     @state-danger-bg;


//== Thumbnails
//
//##

//** Padding around the thumbnail image
@thumbnail-padding:           4px;
//** Thumbnail background color
@thumbnail-bg:                @body-bg;
//** Thumbnail border color
@thumbnail-border:            #ddd;
//** Thumbnail border radius
@thumbnail-border-radius:     @border-radius-base;

//** Custom text color for thumbnail captions
@thumbnail-caption-color:     @text-color;
//** Padding around the thumbnail caption
@thumbnail-caption-padding:   9px;


//== Wells
//
//##

@well-bg:                     #f5f5f5;
@well-border:                 darken(@well-bg, 7%);


//== Badges
//
//##

@badge-color:                 #fff;
//** Linked badge text color on hover
@badge-link-hover-color:      #fff;
@badge-bg:                    @gray-light;

//** Badge text color in active nav link
@badge-active-color:          @link-color;
//** Badge background color in active nav link
@badge-active-bg:             #fff;

@badge-font-weight:           bold;
@badge-line-height:           1;
@badge-border-radius:         10px;


//== Breadcrumbs
//
//##

@breadcrumb-padding-vertical:   8px;
@breadcrumb-padding-horizontal: 15px;
//** Breadcrumb background color
@breadcrumb-bg:                 #f5f5f5;
//** Breadcrumb text color
@breadcrumb-color:              #ccc;
//** Text color of current page in the breadcrumb
@breadcrumb-active-color:       @gray-light;
//** Textual separator for between breadcrumb elements
@breadcrumb-separator:          "/";


//== Carousel
//
//##

@carousel-text-shadow:                        0 1px 2px rgba(0,0,0,.6);

@carousel-control-color:                      #fff;
@carousel-control-width:                      15%;
@carousel-control-opacity:                    .5;
@carousel-control-font-size:                  20px;

@carousel-indicator-active-bg:                #fff;
@carousel-indicator-border-color:             #fff;

@carousel-caption-color:                      #fff;


//== Close
//
//##

@close-font-weight:           bold;
@close-color:                 #000;
@close-text-shadow:           0 1px 0 #fff;


//== Code
//
//##

@code-color:                  #c7254e;
@code-bg:                     #f9f2f4;

@kbd-color:                   #fff;
@kbd-bg:                      #333;

@pre-bg:                      #f5f5f5;
@pre-color:                   @gray-dark;
@pre-border-color:            #ccc;
@pre-scrollable-max-height:   340px;


//== Type
//
//##

//** Text muted color
@text-muted:                  @gray-light;
//** Abbreviations and acronyms border color
@abbr-border-color:           @gray-light;
//** Headings small color
@headings-small-color:        @gray-light;
//** Blockquote small color
@blockquote-small-color:      @gray-light;
//** Blockquote font size
@blockquote-font-size:        (@font-size-base * 1.25);
//** Blockquote border color
@blockquote-border-color:     @gray-lighter;
//** Page header border color
@page-header-border-color:    @gray-lighter;


//== Miscellaneous
//
//##

//** Horizontal line color.
@hr-border:                   @gray-lighter;

//** Horizontal offset for forms and lists.
@component-offset-horizontal: 180px;
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         https://github.com/t3framework/ 
 *------------------------------------------------------------------------------
*/

//
// USE TO OVERRIDE BOOTSTRAP VARIABLES 
// AND DEFINE THOSE NEWS VARIABLE WHICH WILL BE USED IN T3 CORE
// -----------------------------------------------------------


// 
// T3 GLOBAL STYLES
// --------------------------------------------------

// Module Styles
// -------------------------
// Module General
@t3-module-bg:                  transparent;
@t3-module-color:               inherit;
@t3-module-padding:             0;
@t3-module-border:              1px solid #ddd;

// Module Title
@t3-module-title-bg:            @t3-module-bg;    // inherit from @t3-module-bg
@t3-module-title-color:         @t3-module-color; // inherit from @t3-module-color
@t3-module-title-padding:       @t3-module-padding;

// Module Content
@t3-module-content-bg:          @t3-module-bg; // inherit from @t3-module-bg
@t3-module-content-color:       @t3-module-color; // inherit from @t3-module-color
@t3-module-content-padding:     @t3-module-padding;


// Global Margin& Padding
// -------------------------
@t3-global-margin:              @line-height-computed;
@t3-global-padding:             @line-height-computed;


// Typography
// -------------------------
@t3-font-size-big:              @font-size-base + 1px;
@t3-font-size-bigger:           @font-size-base + 2px;

@t3-font-size-small:            @font-size-base - 1px;
@t3-font-size-smaller:          @font-size-base - 2px;



//
// T3 TEMPLATE STYLES
// --------------------------------------------------
@t3-border-color:               #ddd;



// 
// T3 ADD-ONS
// --------------------------------------------------

// Off-Canvas
// -------------------------

// Off-Canvas Width 
@t3-off-canvas-width:                 250px;

// Off-Canvas Header
@t3-off-canvas-header-background:     @gray-lighter;
@t3-off-canvas-header-text-color:     @text-color;

// Off-Canvas Body
@t3-off-canvas-background:            @body-bg;
@t3-off-canvas-text-color:            @text-color;

@t3-off-canvas-link-color:            @link-color;
@t3-off-canvas-link-hover-color:      @link-hover-color;

@t3-off-canvas-headings-color:        inherit;



// 
// T3 MEGAMENU
// --------------------------------------------------
@t3-mega-dropdown-min-width:          200px;/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
 
//
// Variables
// --------------------------------------------------


// Global values
// --------------------------------------------------

// Grays
// -------------------------

@gray-darker:            #222;
@gray-dark:              #444;
@gray:                   #666;
@gray-light:             #999;
@gray-lighter:           #eee;
@gray-lightest:          #f7f7f7;


// Brand colors
// -------------------------

@brand-primary:         @blue;
@brand-secondary:       @green;
@brand-success:         @green;
@brand-warning:         @orange;
@brand-danger:          @red;
@brand-info:            @cyan;


// Accent colors
// -------------------------

@black:                 #000;
@white:                 #fff;
@blue:                  #07b;
@green:                 #3e9b52;
@cyan:                  #09c;
@red:                   #c00;
@yellow:                #fc0;
@orange:                #f80;
@pink:                  #d60a6c;
@purple:                #8b08ae;


// Scaffolding
// -------------------------

@body-bg:               #fff;
@text-color:            @gray-dark;


// Links
// -------------------------

@link-color:            @brand-primary;
@link-hover-color:      darken(@link-color, 15%);


// Typography
// -------------------------
@font-family-sans-serif:  "Helvetica Neue", Helvetica, Arial, sans-serif;
@font-family-serif:       Georgia, "Times New Romance", serif;
@font-family-monospace:   Consolas, Monaco, "Courier New", monospace;
@font-family-base:        @font-family-sans-serif;

@font-size-base:          14px;
@font-size-large:         ceil(@font-size-base * 1.25); // ~18px
@font-size-small:         ceil(@font-size-base * 0.85); // ~12px

@font-size-h1:            floor(@font-size-base * 3);
@font-size-h2:            floor(@font-size-base * 2.5);
@font-size-h3:            ceil(@font-size-base * 1.7);
@font-size-h4:            ceil(@font-size-base * 1.25);
@font-size-h5:            @font-size-base;
@font-size-h6:            ceil(@font-size-base * 0.85);

@line-height-base:        1.428571429; // 20/14
@line-height-computed:    floor(@font-size-base * @line-height-base); // ~20px

@headings-font-family:    @font-family-base;
@headings-font-weight:    500;
@headings-line-height:    1.1;
@headings-color:          inherit;


// Iconography
// -------------------------
@icon-font-path:          "../../../plugins/system/t3/base-bs3/bootstrap/fonts/";
@icon-font-name:          "glyphicons-halflings-regular";


// Components
// -------------------------
// Based on 14px font-size and 1.428 line-height (~20px to start)
@padding-base-vertical:          6px;
@padding-base-horizontal:        12px;

@padding-large-vertical:         10px;
@padding-large-horizontal:       16px;

@padding-small-vertical:         5px;
@padding-small-horizontal:       10px;

@line-height-large:              1.33;
@line-height-small:              1.5;

@border-radius-base:             0;
@border-radius-large:            0;
@border-radius-small:            0;

@component-active-color:         #fff;
@component-active-bg:            @brand-primary;

@caret-width-base:               4px;
@caret-width-large:              5px;


// Tables
// -------------------------
@table-cell-padding:                 8px;
@table-condensed-cell-padding:       5px;

@table-bg:                           transparent; // overall background-color
@table-bg-accent:                    #f9f9f9; // for striping
@table-bg-hover:                     #f5f5f5;
@table-bg-active:                    @table-bg-hover;

@table-border-color:                 #ddd; // table and cell border


// Buttons
// -------------------------

@btn-font-weight:                normal;

@btn-default-color:              #333;
@btn-default-bg:                 #fff;
@btn-default-border:             #ccc;

@btn-primary-color:              #fff;
@btn-primary-bg:                 @brand-primary;
@btn-primary-border:             darken(@btn-primary-bg, 5%);

@btn-success-color:              #fff;
@btn-success-bg:                 @brand-success;
@btn-success-border:             darken(@btn-success-bg, 5%);

@btn-warning-color:              #fff;
@btn-warning-bg:                 @brand-warning;
@btn-warning-border:             darken(@btn-warning-bg, 5%);

@btn-danger-color:               #fff;
@btn-danger-bg:                  @brand-danger;
@btn-danger-border:              darken(@btn-danger-bg, 5%);

@btn-info-color:                 #fff;
@btn-info-bg:                    @brand-info;
@btn-info-border:                darken(@btn-info-bg, 5%);

// T3 Note: Add "Inverse" style for Button
@btn-inverse-color:              #fff;
@btn-inverse-bg:                 @gray-dark;
@btn-inverse-border:             darken(@btn-inverse-bg, 5%);

@btn-link-disabled-color:        @gray-light;


// Forms
// -------------------------

@input-bg:                       #fff;
@input-bg-disabled:              @gray-lighter;

@input-color:                    @gray;
@input-border:                   #ccc;
@input-border-radius:            @border-radius-base;
@input-border-focus:             #66afe9;

@input-color-placeholder:        @gray-light;

@input-height-base:              (@line-height-computed + (@padding-base-vertical * 2) + 2);
@input-height-large:             (floor(@font-size-large * @line-height-large) + (@padding-large-vertical * 2) + 2);
@input-height-small:             (floor(@font-size-small * @line-height-small) + (@padding-small-vertical * 2) + 2);

@legend-color:                   @gray-dark;
@legend-border-color:            #e5e5e5;

@input-group-addon-bg:           @gray-lighter;
@input-group-addon-border-color: @input-border;


// Dropdowns
// -------------------------

@dropdown-bg:                    @gray-dark;
@dropdown-border:                @gray-dark;
@dropdown-fallback-border:       @gray-dark;
@dropdown-divider-bg:            lighten(@dropdown-bg,5%);

@dropdown-link-color:            @gray-light;
@dropdown-link-hover-color:      #fff;
@dropdown-link-hover-bg:         lighten(@dropdown-bg,5%);

@dropdown-link-active-color:     #fff;
@dropdown-link-active-bg:        darken(@dropdown-bg,5%);

@dropdown-link-disabled-color:   @gray-light;

@dropdown-header-color:          @gray-light;

@dropdown-caret-color:           @dropdown-link-color;


// COMPONENT VARIABLES
// --------------------------------------------------


// Z-index master list
// -------------------------
// Used for a bird's eye view of components dependent on the z-axis
// Try to avoid customizing these :)

@zindex-navbar:            1000;
@zindex-dropdown:          1000;
@zindex-popover:           1010;
@zindex-tooltip:           1030;
@zindex-navbar-fixed:      1030;
@zindex-modal-background:  1040;
@zindex-modal:             1050;

// Media queries breakpoints
// --------------------------------------------------

// Extra small screen / phone
// Note: Deprecated @screen-xs and @screen-phone as of v3.0.1
@screen-xs:                  480px;
@screen-xs-min:              @screen-xs;
@screen-phone:               @screen-xs-min;

// Small screen / tablet
// Note: Deprecated @screen-sm and @screen-tablet as of v3.0.1
@screen-sm:                  768px;
@screen-sm-min:              @screen-sm;
@screen-tablet:              @screen-sm-min;

// Medium screen / desktop
// Note: Deprecated @screen-md and @screen-desktop as of v3.0.1
@screen-md:                  992px;
@screen-md-min:              @screen-md;
@screen-desktop:             @screen-md-min;

// Large screen / wide desktop
// Note: Deprecated @screen-lg and @screen-lg-desktop as of v3.0.1
@screen-lg:                  1200px;
@screen-lg-min:              @screen-lg;
@screen-lg-desktop:          @screen-lg-min;

// So media queries don't overlap when required, provide a maximum
@screen-xs-max:              (@screen-sm-min - 1);
@screen-sm-max:              (@screen-md-min - 1);
@screen-md-max:              (@screen-lg-min - 1);


// Grid system
// --------------------------------------------------

// Number of columns in the grid system
@grid-columns:              12;
// Padding, to be divided by two and applied to the left and right of all columns
@grid-gutter-width:         40px;
// Point at which the navbar stops collapsing
@grid-float-breakpoint:     @screen-sm-max;


// Navbar
// -------------------------

// Basics of a navbar
@navbar-height:                    55px;
@navbar-margin-bottom:             @line-height-computed;
@navbar-border-radius:             @border-radius-base;
@navbar-padding-horizontal:        floor(@grid-gutter-width / 2);
@navbar-padding-vertical:          ((@navbar-height - @line-height-computed) / 2);

@navbar-default-color:             lighten(@navbar-default-bg,50%);
@navbar-default-bg:                @brand-primary;
@navbar-default-border:            darken(@navbar-default-bg,5%);

// Navbar links
@navbar-default-link-color:                lighten(@navbar-default-bg,50%);
@navbar-default-link-hover-color:          #fff;
@navbar-default-link-hover-bg:             transparent;
@navbar-default-link-active-color:         #fff;
@navbar-default-link-active-bg:            transparent;
@navbar-default-link-disabled-color:       #ccc;
@navbar-default-link-disabled-bg:          transparent;

// Navbar brand label
@navbar-default-brand-color:               @navbar-default-link-color;
@navbar-default-brand-hover-color:         darken(@navbar-default-brand-color, 10%);
@navbar-default-brand-hover-bg:            transparent;

// Navbar toggle
@navbar-default-toggle-hover-bg:           @navbar-default-bg;
@navbar-default-toggle-icon-bar-bg:        #fff;
@navbar-default-toggle-border-color:       @navbar-default-bg;


// Inverted navbar
//
// Reset inverted navbar basics
@navbar-inverse-color:                      @gray-light;
@navbar-inverse-bg:                         #222;
@navbar-inverse-border:                     darken(@navbar-inverse-bg, 10%);

// Inverted navbar links
@navbar-inverse-link-color:                 @gray-light;
@navbar-inverse-link-hover-color:           #fff;
@navbar-inverse-link-hover-bg:              transparent;
@navbar-inverse-link-active-color:          @navbar-inverse-link-hover-color;
@navbar-inverse-link-active-bg:             darken(@navbar-inverse-bg, 10%);
@navbar-inverse-link-disabled-color:        #444;
@navbar-inverse-link-disabled-bg:           transparent;

// Inverted navbar brand label
@navbar-inverse-brand-color:                @navbar-inverse-link-color;
@navbar-inverse-brand-hover-color:          #fff;
@navbar-inverse-brand-hover-bg:             transparent;

// Inverted navbar toggle
@navbar-inverse-toggle-hover-bg:            #333;
@navbar-inverse-toggle-icon-bar-bg:         #fff;
@navbar-inverse-toggle-border-color:        #333;


// Navs
// -------------------------

@nav-link-padding:                          10px 15px;
@nav-link-hover-bg:                         @gray-lighter;

@nav-disabled-link-color:                   @gray-light;
@nav-disabled-link-hover-color:             @gray-light;

@nav-open-link-hover-color:                 #fff;
@nav-open-caret-border-color:               #fff;

// Tabs
@nav-tabs-border-color:                     #ddd;

@nav-tabs-link-hover-border-color:          @gray-lighter;

@nav-tabs-active-link-hover-bg:             @body-bg;
@nav-tabs-active-link-hover-color:          @gray;
@nav-tabs-active-link-hover-border-color:   #ddd;

@nav-tabs-justified-link-border-color:            #ddd;
@nav-tabs-justified-active-link-border-color:     @body-bg;

// Pills
@nav-pills-border-radius:                   @border-radius-base;
@nav-pills-active-link-hover-bg:            @component-active-bg;
@nav-pills-active-link-hover-color:         @component-active-color;


// Pagination
// -------------------------

@pagination-bg:                        #fff;
@pagination-border:                    #ddd;

@pagination-hover-bg:                  @gray-lighter;

@pagination-active-bg:                 @brand-primary;
@pagination-active-color:              #fff;

@pagination-disabled-color:            @gray-light;


// Pager
// -------------------------

@pager-border-radius:                  15px;
@pager-disabled-color:                 @gray-light;


// Jumbotron
// -------------------------

@jumbotron-padding:              40px;
@jumbotron-color:                inherit;
@jumbotron-bg:                   @gray-lighter;
@jumbotron-heading-color:        inherit;
@jumbotron-font-size:            ceil(@font-size-base * 1.5);


// Form states and alerts
// -------------------------

@state-success-text:             #468847;
@state-success-bg:               #dff0d8;
@state-success-border:           darken(spin(@state-success-bg, -10), 5%);

@state-info-text:                #3a87ad;
@state-info-bg:                  #d9edf7;
@state-info-border:              darken(spin(@state-info-bg, -10), 7%);

@state-warning-text:             #c09853;
@state-warning-bg:               #fcf8e3;
@state-warning-border:           darken(spin(@state-warning-bg, -10), 5%);

@state-danger-text:              #b94a48;
@state-danger-bg:                #f2dede;
@state-danger-border:            darken(spin(@state-danger-bg, -10), 5%);


// Tooltips
// -------------------------
@tooltip-max-width:           350px;	/* joomla 3.x 400px */
@tooltip-color:               #fff;
@tooltip-bg:                  #000;

@tooltip-arrow-width:         5px;
@tooltip-arrow-color:         @tooltip-bg;


// Popovers
// -------------------------
@popover-bg:                          #fff;
@popover-max-width:                   276px;
@popover-border-color:                rgba(0,0,0,.2);
@popover-fallback-border-color:       #ccc;

@popover-title-bg:                    darken(@popover-bg, 3%);

@popover-arrow-width:                 10px;
@popover-arrow-color:                 #fff;

@popover-arrow-outer-width:           (@popover-arrow-width + 1);
@popover-arrow-outer-color:           rgba(0,0,0,.25);
@popover-arrow-outer-fallback-color:  #999;


// Labels
// -------------------------

@label-default-bg:            @gray-light;
@label-primary-bg:            @brand-primary;
@label-success-bg:            @brand-success;
@label-info-bg:               @brand-info;
@label-warning-bg:            @brand-warning;
@label-danger-bg:             @brand-danger;

@label-color:                 #fff;
@label-link-hover-color:      #fff;


// Modals
// -------------------------
@modal-inner-padding:         20px;

@modal-title-padding:         20px;
@modal-title-line-height:     @line-height-base;

@modal-content-bg:                             #fff;
@modal-content-border-color:                   rgba(0,0,0,.2);
@modal-content-fallback-border-color:          #999;

@modal-backdrop-bg:           #000;
@modal-header-border-color:   #e5e5e5;
@modal-footer-border-color:   @modal-header-border-color;


// Alerts
// -------------------------
@alert-padding:               15px;
@alert-border-radius:         @border-radius-base;
@alert-link-font-weight:      bold;

@alert-success-bg:            @state-success-bg;
@alert-success-text:          @state-success-text;
@alert-success-border:        @state-success-border;

@alert-info-bg:               @state-info-bg;
@alert-info-text:             @state-info-text;
@alert-info-border:           @state-info-border;

@alert-warning-bg:            @state-warning-bg;
@alert-warning-text:          @state-warning-text;
@alert-warning-border:        @state-warning-border;

@alert-danger-bg:             @state-danger-bg;
@alert-danger-text:           @state-danger-text;
@alert-danger-border:         @state-danger-border;


// Progress bars
// -------------------------
@progress-bg:                 #f5f5f5;
@progress-bar-color:          #fff;

@progress-bar-bg:             @brand-primary;
@progress-bar-success-bg:     @brand-success;
@progress-bar-warning-bg:     @brand-warning;
@progress-bar-danger-bg:      @brand-danger;
@progress-bar-info-bg:        @brand-info;


// List group
// -------------------------
@list-group-bg:               #fff;
@list-group-border:           #ddd;
@list-group-border-radius:    @border-radius-base;

@list-group-hover-bg:         #f5f5f5;
@list-group-active-color:     @component-active-color;
@list-group-active-bg:        @component-active-bg;
@list-group-active-border:    @list-group-active-bg;

@list-group-link-color:          #555;
@list-group-link-heading-color:  #333;


// Panels
// -------------------------
@panel-bg:                    #fff;
@panel-inner-border:          #ddd;
@panel-border-radius:         @border-radius-base;
@panel-footer-bg:             #f5f5f5;

@panel-default-text:          @gray-dark;
@panel-default-border:        #ddd;
@panel-default-heading-bg:    #f5f5f5;

@panel-primary-text:          #fff;
@panel-primary-border:        @brand-primary;
@panel-primary-heading-bg:    @brand-primary;

@panel-success-text:          @state-success-text;
@panel-success-border:        @state-success-border;
@panel-success-heading-bg:    @state-success-bg;

@panel-warning-text:          @state-warning-text;
@panel-warning-border:        @state-warning-border;
@panel-warning-heading-bg:    @state-warning-bg;

@panel-danger-text:           @state-danger-text;
@panel-danger-border:         @state-danger-border;
@panel-danger-heading-bg:     @state-danger-bg;

@panel-info-text:             @state-info-text;
@panel-info-border:           @state-info-border;
@panel-info-heading-bg:       @state-info-bg;


// Thumbnails
// -------------------------
@thumbnail-padding:           4px;
@thumbnail-bg:                @body-bg;
@thumbnail-border:            #ddd;
@thumbnail-border-radius:     @border-radius-base;

@thumbnail-caption-color:     @text-color;
@thumbnail-caption-padding:   10px;


// Wells
// -------------------------
@well-bg:                     #f5f5f5;


// Badges
// -------------------------
@badge-color:                 #fff;
@badge-link-hover-color:      #fff;
@badge-bg:                    @gray-light;

@badge-active-color:          @link-color;
@badge-active-bg:             #fff;

@badge-font-weight:           bold;
@badge-line-height:           1;
@badge-border-radius:         @border-radius-base;


// Breadcrumbs
// -------------------------
@breadcrumb-bg:               @gray-lighter;
@breadcrumb-color:            #999;
@breadcrumb-active-color:     @gray-light;
@breadcrumb-separator:        "/";


// Carousel
// ------------------------

@carousel-text-shadow:                        0 1px 2px rgba(0,0,0,.6);

@carousel-control-color:                      #fff;
@carousel-control-width:                      15%;
@carousel-control-opacity:                    .5;
@carousel-control-font-size:                  20px;

@carousel-indicator-active-bg:                #fff;
@carousel-indicator-border-color:             #fff;

@carousel-caption-color:                      #fff;


// Close
// ------------------------
@close-font-weight:           bold;
@close-color:                 #000;
@close-text-shadow:           0 1px 0 #fff;


// Code
// ------------------------
@code-color:                  #c7254e;
@code-bg:                     #f9f2f4;

@pre-bg:                      #f5f5f5;
@pre-color:                   @gray-dark;
@pre-border-color:            #ccc;
@pre-scrollable-max-height:   340px;

// Type
// ------------------------
@text-muted:                  @gray-light;
@abbr-border-color:           @gray-light;
@headings-small-color:        @gray-light;
@blockquote-small-color:      @gray-light;
@blockquote-border-color:     @gray-lighter;
@page-header-border-color:    @gray-lighter;

// Miscellaneous
// -------------------------

// Hr border color
@hr-border:                   @gray-lighter;

// Horizontal forms & lists
@component-offset-horizontal: 180px;


// Container sizes
// --------------------------------------------------

// Small screen / tablet
@container-tablet:             ((720px + @grid-gutter-width));
@container-sm:                 @container-tablet;

// Medium screen / desktop
@container-desktop:            ((940px + @grid-gutter-width));
@container-md:                 @container-desktop;

// Large screen / wide desktop
@container-large-desktop:      ((1140px + @grid-gutter-width));
@container-lg:                 @container-large-desktop;



//
// T3 GLOBAL STYLES
// --------------------------------------------------

// Module Styles
// -------------------------
// Module General
@t3-module-bg:                  transparent;
@t3-module-color:               inherit;
@t3-module-padding:             0;
@t3-module-border:              1px solid #ddd;

// Module Title
@t3-module-title-bg:            @t3-module-bg;      // inherit from @t3-module-bg
@t3-module-title-color:         @t3-module-color;   // inherit from @t3-module-color
@t3-module-title-padding:       @t3-module-padding;

// Module Content
@t3-module-content-bg:          @t3-module-bg;      // inherit from @t3-module-bg
@t3-module-content-color:       @t3-module-color;   // inherit from @t3-module-color
@t3-module-content-padding:     @t3-module-padding;


// Global Margin & Padding
// -------------------------
@t3-global-margin:              @line-height-computed;
@t3-global-padding:             @line-height-computed;


// Typography
// -------------------------
@t3-font-size-big:              @font-size-base + 1px;
@t3-font-size-bigger:           @font-size-base + 2px;

@t3-font-size-small:            @font-size-base - 1px;
@t3-font-size-smaller:          @font-size-base - 2px;



//
// T3 LOGO
// --------------------------------------------------
@t3-logo-image:               "@{t3-image-path}/logo.png";



//
// T3 TEMPLATE STYLES
// --------------------------------------------------
@t3-image-path:                 "../images";
@t3-border-color:               @hr-border;



// Footer Styles
// -------------------------
@t3-footer-background:              @gray-lightest;
@t3-footer-text-color:              @gray;

@t3-footer-module-background:       @t3-footer-background;
@t3-footer-module-text-color:       @t3-footer-text-color;

@t3-footer-module-title-color:      @text-color;



// 
// T3 ADD-ONS
// --------------------------------------------------

// Off-Canvas
// -------------------------

// Off-Canvas Width 
@t3-off-canvas-width:                 250px;

// Off-Canvas Header
@t3-off-canvas-header-background:     @gray-lighter;
@t3-off-canvas-header-text-color:     @text-color;

// Off-Canvas Body
@t3-off-canvas-background:            @body-bg;
@t3-off-canvas-text-color:            @text-color;

@t3-off-canvas-link-color:            @link-color;
@t3-off-canvas-link-hover-color:      @link-hover-color;

@t3-off-canvas-headings-color:        inherit;//
// Mixins
// --------------------------------------------------


// Utilities
// -------------------------

// Clearfix
// Source: http://nicolasgallagher.com/micro-clearfix-hack/
//
// For modern browsers
// 1. The space content is one way to avoid an Opera bug when the
//    contenteditable attribute is included anywhere else in the document.
//    Otherwise it causes space to appear at the top and bottom of elements
//    that are clearfixed.
// 2. The use of `table` rather than `block` is only necessary if using
//    `:before` to contain the top-margins of child elements.
.clearfix() {
  &:before,
  &:after {
    content: " "; // 1
    display: table; // 2
  }
  &:after {
    clear: both;
  }
}

// WebKit-style focus
.tab-focus() {
  // Default
  outline: thin dotted;
  // WebKit
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

// Center-align a block level element
.center-block() {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

// Sizing shortcuts
.size(@width; @height) {
  width: @width;
  height: @height;
}
.square(@size) {
  .size(@size; @size);
}

// Placeholder text
.placeholder(@color: @input-color-placeholder) {
  &::-moz-placeholder           { color: @color;   // Firefox
                                  opacity: 1; } // See https://github.com/twbs/bootstrap/pull/11526
  &:-ms-input-placeholder       { color: @color; } // Internet Explorer 10+
  &::-webkit-input-placeholder  { color: @color; } // Safari and Chrome
}

// Text overflow
// Requires inline-block or block for proper styling
.text-overflow() {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

// CSS image replacement
//
// Heads up! v3 launched with with only `.hide-text()`, but per our pattern for
// mixins being reused as classes with the same name, this doesn't hold up. As
// of v3.0.1 we have added `.text-hide()` and deprecated `.hide-text()`. Note
// that we cannot chain the mixins together in Less, so they are repeated.
//
// Source: https://github.com/h5bp/html5-boilerplate/commit/aa0396eae757

// Deprecated as of v3.0.1 (will be removed in v4)
.hide-text() {
  font: ~"0/0" a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
// New mixin to use as of v3.0.1
.text-hide() {
  .hide-text();
}



// CSS3 PROPERTIES
// --------------------------------------------------

// Single side border-radius
.border-top-radius(@radius) {
  border-top-right-radius: @radius;
   border-top-left-radius: @radius;
}
.border-right-radius(@radius) {
  border-bottom-right-radius: @radius;
     border-top-right-radius: @radius;
}
.border-bottom-radius(@radius) {
  border-bottom-right-radius: @radius;
   border-bottom-left-radius: @radius;
}
.border-left-radius(@radius) {
  border-bottom-left-radius: @radius;
     border-top-left-radius: @radius;
}

// Drop shadows
//
// Note: Deprecated `.box-shadow()` as of v3.1.0 since all of Bootstrap's
//   supported browsers that have box shadow capabilities now support the
//   standard `box-shadow` property.
.box-shadow(@shadow) {
  -webkit-box-shadow: @shadow; // iOS <4.3 & Android <4.1
          box-shadow: @shadow;
}

// Transitions
.transition(@transition) {
  -webkit-transition: @transition;
          transition: @transition;
}
.transition-property(@transition-property) {
  -webkit-transition-property: @transition-property;
          transition-property: @transition-property;
}
.transition-delay(@transition-delay) {
  -webkit-transition-delay: @transition-delay;
          transition-delay: @transition-delay;
}
.transition-duration(@transition-duration) {
  -webkit-transition-duration: @transition-duration;
          transition-duration: @transition-duration;
}
.transition-transform(@transition) {
  -webkit-transition: -webkit-transform @transition;
     -moz-transition: -moz-transform @transition;
       -o-transition: -o-transform @transition;
          transition: transform @transition;
}

// Transformations
.rotate(@degrees) {
  -webkit-transform: rotate(@degrees);
      -ms-transform: rotate(@degrees); // IE9 only
          transform: rotate(@degrees);
}
.scale(@ratio; @ratio-y...) {
  -webkit-transform: scale(@ratio, @ratio-y);
      -ms-transform: scale(@ratio, @ratio-y); // IE9 only
          transform: scale(@ratio, @ratio-y);
}
.translate(@x; @y) {
  -webkit-transform: translate(@x, @y);
      -ms-transform: translate(@x, @y); // IE9 only
          transform: translate(@x, @y);
}
.skew(@x; @y) {
  -webkit-transform: skew(@x, @y);
      -ms-transform: skewX(@x) skewY(@y); // See https://github.com/twbs/bootstrap/issues/4885; IE9+
          transform: skew(@x, @y);
}
.translate3d(@x; @y; @z) {
  -webkit-transform: translate3d(@x, @y, @z);
          transform: translate3d(@x, @y, @z);
}

.rotateX(@degrees) {
  -webkit-transform: rotateX(@degrees);
      -ms-transform: rotateX(@degrees); // IE9 only
          transform: rotateX(@degrees);
}
.rotateY(@degrees) {
  -webkit-transform: rotateY(@degrees);
      -ms-transform: rotateY(@degrees); // IE9 only
          transform: rotateY(@degrees);
}
.perspective(@perspective) {
  -webkit-perspective: @perspective;
     -moz-perspective: @perspective;
          perspective: @perspective;
}
.perspective-origin(@perspective) {
  -webkit-perspective-origin: @perspective;
     -moz-perspective-origin: @perspective;
          perspective-origin: @perspective;
}
.transform-origin(@origin) {
  -webkit-transform-origin: @origin;
     -moz-transform-origin: @origin;
      -ms-transform-origin: @origin; // IE9 only
          transform-origin: @origin;
}

// Animations
.animation(@animation) {
  -webkit-animation: @animation;
          animation: @animation;
}
.animation-name(@name) {
  -webkit-animation-name: @name;
          animation-name: @name;
}
.animation-duration(@duration) {
  -webkit-animation-duration: @duration;
          animation-duration: @duration;
}
.animation-timing-function(@timing-function) {
  -webkit-animation-timing-function: @timing-function;
          animation-timing-function: @timing-function;
}
.animation-delay(@delay) {
  -webkit-animation-delay: @delay;
          animation-delay: @delay;
}
.animation-iteration-count(@iteration-count) {
  -webkit-animation-iteration-count: @iteration-count;
          animation-iteration-count: @iteration-count;
}
.animation-direction(@direction) {
  -webkit-animation-direction: @direction;
          animation-direction: @direction;
}

// Backface visibility
// Prevent browsers from flickering when using CSS 3D transforms.
// Default value is `visible`, but can be changed to `hidden`
.backface-visibility(@visibility){
  -webkit-backface-visibility: @visibility;
     -moz-backface-visibility: @visibility;
          backface-visibility: @visibility;
}

// Box sizing
.box-sizing(@boxmodel) {
  -webkit-box-sizing: @boxmodel;
     -moz-box-sizing: @boxmodel;
          box-sizing: @boxmodel;
}

// User select
// For selecting text on the page
.user-select(@select) {
  -webkit-user-select: @select;
     -moz-user-select: @select;
      -ms-user-select: @select; // IE10+
          user-select: @select;
}

// Resize anything
.resizable(@direction) {
  resize: @direction; // Options: horizontal, vertical, both
  overflow: auto; // Safari fix
}

// CSS3 Content Columns
.content-columns(@column-count; @column-gap: @grid-gutter-width) {
  -webkit-column-count: @column-count;
     -moz-column-count: @column-count;
          column-count: @column-count;
  -webkit-column-gap: @column-gap;
     -moz-column-gap: @column-gap;
          column-gap: @column-gap;
}

// Optional hyphenation
.hyphens(@mode: auto) {
  word-wrap: break-word;
  -webkit-hyphens: @mode;
     -moz-hyphens: @mode;
      -ms-hyphens: @mode; // IE10+
       -o-hyphens: @mode;
          hyphens: @mode;
}

// Opacity
.opacity(@opacity) {
  opacity: @opacity;
  // IE8 filter
  @opacity-ie: (@opacity * 100);
  filter: ~"alpha(opacity=@{opacity-ie})";
}



// GRADIENTS
// --------------------------------------------------

#gradient {

  // Horizontal gradient, from left to right
  //
  // Creates two color stops, start and end, by specifying a color and position for each color stop.
  // Color stops are not available in IE9 and below.
  .horizontal(@start-color: #555; @end-color: #333; @start-percent: 0%; @end-percent: 100%) {
    background-image: -webkit-linear-gradient(left, color-stop(@start-color @start-percent), color-stop(@end-color @end-percent)); // Safari 5.1-6, Chrome 10+
    background-image:  linear-gradient(to right, @start-color @start-percent, @end-color @end-percent); // Standard, IE10, Firefox 16+, Opera 12.10+, Safari 7+, Chrome 26+
    background-repeat: repeat-x;
    filter: e(%("progid:DXImageTransform.Microsoft.gradient(startColorstr='%d', endColorstr='%d', GradientType=1)",argb(@start-color),argb(@end-color))); // IE9 and down
  }

  // Vertical gradient, from top to bottom
  //
  // Creates two color stops, start and end, by specifying a color and position for each color stop.
  // Color stops are not available in IE9 and below.
  .vertical(@start-color: #555; @end-color: #333; @start-percent: 0%; @end-percent: 100%) {
    background-image: -webkit-linear-gradient(top, @start-color @start-percent, @end-color @end-percent);  // Safari 5.1-6, Chrome 10+
    background-image: linear-gradient(to bottom, @start-color @start-percent, @end-color @end-percent); // Standard, IE10, Firefox 16+, Opera 12.10+, Safari 7+, Chrome 26+
    background-repeat: repeat-x;
    filter: e(%("progid:DXImageTransform.Microsoft.gradient(startColorstr='%d', endColorstr='%d', GradientType=0)",argb(@start-color),argb(@end-color))); // IE9 and down
  }

  .directional(@start-color: #555; @end-color: #333; @deg: 45deg) {
    background-repeat: repeat-x;
    background-image: -webkit-linear-gradient(@deg, @start-color, @end-color); // Safari 5.1-6, Chrome 10+
    background-image: linear-gradient(@deg, @start-color, @end-color); // Standard, IE10, Firefox 16+, Opera 12.10+, Safari 7+, Chrome 26+
  }
  .horizontal-three-colors(@start-color: #00b3ee; @mid-color: #7a43b6; @color-stop: 50%; @end-color: #c3325f) {
    background-image: -webkit-linear-gradient(left, @start-color, @mid-color @color-stop, @end-color);
    background-image: linear-gradient(to right, @start-color, @mid-color @color-stop, @end-color);
    background-repeat: no-repeat;
    filter: e(%("progid:DXImageTransform.Microsoft.gradient(startColorstr='%d', endColorstr='%d', GradientType=1)",argb(@start-color),argb(@end-color))); // IE9 and down, gets no color-stop at all for proper fallback
  }
  .vertical-three-colors(@start-color: #00b3ee; @mid-color: #7a43b6; @color-stop: 50%; @end-color: #c3325f) {
    background-image: -webkit-linear-gradient(@start-color, @mid-color @color-stop, @end-color);
    background-image: linear-gradient(@start-color, @mid-color @color-stop, @end-color);
    background-repeat: no-repeat;
    filter: e(%("progid:DXImageTransform.Microsoft.gradient(startColorstr='%d', endColorstr='%d', GradientType=0)",argb(@start-color),argb(@end-color))); // IE9 and down, gets no color-stop at all for proper fallback
  }
  .radial(@inner-color: #555; @outer-color: #333) {
    background-image: -webkit-radial-gradient(circle, @inner-color, @outer-color);
    background-image: radial-gradient(circle, @inner-color, @outer-color);
    background-repeat: no-repeat;
  }
  .striped(@color: rgba(255,255,255,.15); @angle: 45deg) {
    background-image: -webkit-linear-gradient(@angle, @color 25%, transparent 25%, transparent 50%, @color 50%, @color 75%, transparent 75%, transparent);
    background-image: linear-gradient(@angle, @color 25%, transparent 25%, transparent 50%, @color 50%, @color 75%, transparent 75%, transparent);
  }
}

// Reset filters for IE
//
// When you need to remove a gradient background, do not forget to use this to reset
// the IE filter for IE9 and below.
.reset-filter() {
  filter: e(%("progid:DXImageTransform.Microsoft.gradient(enabled = false)"));
}



// Retina images
//
// Short retina mixin for setting background-image and -size

.img-retina(@file-1x; @file-2x; @width-1x; @height-1x) {
  background-image: url("@{file-1x}");

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (   min--moz-device-pixel-ratio: 2),
  only screen and (     -o-min-device-pixel-ratio: 2/1),
  only screen and (        min-device-pixel-ratio: 2),
  only screen and (                min-resolution: 192dpi),
  only screen and (                min-resolution: 2dppx) {
    background-image: url("@{file-2x}");
    background-size: @width-1x @height-1x;
  }
}


// Responsive image
//
// Keep images from scaling beyond the width of their parents.

.img-responsive(@display: block) {
  display: @display;
  max-width: 100%; // Part 1: Set a maximum relative to the parent
  height: auto; // Part 2: Scale the height according to the width, otherwise you get stretching
}


// COMPONENT MIXINS
// --------------------------------------------------

// Horizontal dividers
// -------------------------
// Dividers (basically an hr) within dropdowns and nav lists
.nav-divider(@color: #e5e5e5) {
  height: 1px;
  margin: ((@line-height-computed / 2) - 1) 0;
  overflow: hidden;
  background-color: @color;
}

// Panels
// -------------------------
.panel-variant(@border; @heading-text-color; @heading-bg-color; @heading-border) {
  border-color: @border;

  & > .panel-heading {
    color: @heading-text-color;
    background-color: @heading-bg-color;
    border-color: @heading-border;

    + .panel-collapse .panel-body {
      border-top-color: @border;
    }
  }
  & > .panel-footer {
    + .panel-collapse .panel-body {
      border-bottom-color: @border;
    }
  }
}

// Alerts
// -------------------------
.alert-variant(@background; @border; @text-color) {
  background-color: @background;
  border-color: @border;
  color: @text-color;

  hr {
    border-top-color: darken(@border, 5%);
  }
  .alert-link {
    color: darken(@text-color, 10%);
  }
}

// Tables
// -------------------------
.table-row-variant(@state; @background) {
  // Exact selectors below required to override `.table-striped` and prevent
  // inheritance to nested tables.
  .table > thead > tr,
  .table > tbody > tr,
  .table > tfoot > tr {
    > td.@{state},
    > th.@{state},
    &.@{state} > td,
    &.@{state} > th {
      background-color: @background;
    }
  }

  // Hover states for `.table-hover`
  // Note: this is not available for cells or rows within `thead` or `tfoot`.
  .table-hover > tbody > tr {
    > td.@{state}:hover,
    > th.@{state}:hover,
    &.@{state}:hover > td,
    &.@{state}:hover > th {
      background-color: darken(@background, 5%);
    }
  }
}

// List Groups
// -------------------------
.list-group-item-variant(@state; @background; @color) {
  .list-group-item-@{state} {
    color: @color;
    background-color: @background;

    a& {
      color: @color;

      .list-group-item-heading { color: inherit; }

      &:hover,
      &:focus {
        color: @color;
        background-color: darken(@background, 5%);
      }
      &.active,
      &.active:hover,
      &.active:focus {
        color: #fff;
        background-color: @color;
        border-color: @color;
      }
    }
  }
}

// Button variants
// -------------------------
// Easily pump out default styles, as well as :hover, :focus, :active,
// and disabled options for all buttons
.button-variant(@color; @background; @border) {
  color: @color;
  background-color: @background;
  border-color: @border;

  &:hover,
  &:focus,
  &:active,
  &.active,
  .open .dropdown-toggle& {
    color: @color;
    background-color: darken(@background, 8%);
        border-color: darken(@border, 12%);
  }
  &:active,
  &.active,
  .open .dropdown-toggle& {
    background-image: none;
  }
  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    &,
    &:hover,
    &:focus,
    &:active,
    &.active {
      background-color: @background;
          border-color: @border;
    }
  }

  .badge {
    color: @background;
    background-color: @color;
  }
}

// Button sizes
// -------------------------
.button-size(@padding-vertical; @padding-horizontal; @font-size; @line-height; @border-radius) {
  padding: @padding-vertical @padding-horizontal;
  font-size: @font-size;
  line-height: @line-height;
  border-radius: @border-radius;
}

// Pagination
// -------------------------
.pagination-size(@padding-vertical; @padding-horizontal; @font-size; @border-radius) {
  > li {
    > a,
    > span {
      padding: @padding-vertical @padding-horizontal;
      font-size: @font-size;
    }
    &:first-child {
      > a,
      > span {
        .border-left-radius(@border-radius);
      }
    }
    &:last-child {
      > a,
      > span {
        .border-right-radius(@border-radius);
      }
    }
  }
}

// Labels
// -------------------------
.label-variant(@color) {
  background-color: @color;
  &[href] {
    &:hover,
    &:focus {
      background-color: darken(@color, 10%);
    }
  }
}

// Contextual backgrounds
// -------------------------
.bg-variant(@color) {
  background-color: @color;
  a&:hover {
    background-color: darken(@color, 10%);
  }
}

// Typography
// -------------------------
.text-emphasis-variant(@color) {
  color: @color;
  a&:hover {
    color: darken(@color, 10%);
  }
}

// Navbar vertical align
// -------------------------
// Vertically center elements in the navbar.
// Example: an element has a height of 30px, so write out `.navbar-vertical-align(30px);` to calculate the appropriate top margin.
.navbar-vertical-align(@element-height) {
  margin-top: ((@navbar-height - @element-height) / 2);
  margin-bottom: ((@navbar-height - @element-height) / 2);
}

// Progress bars
// -------------------------
.progress-bar-variant(@color) {
  background-color: @color;
  .progress-striped & {
    #gradient > .striped();
  }
}

// Responsive utilities
// -------------------------
// More easily include all the states for responsive-utilities.less.
.responsive-visibility() {
  display: block !important;
  table&  { display: table; }
  tr&     { display: table-row !important; }
  th&,
  td&     { display: table-cell !important; }
}

.responsive-invisibility() {
  display: none !important;
}


// Grid System
// -----------

// Centered container element
.container-fixed() {
  margin-right: auto;
  margin-left: auto;
  padding-left:  (@grid-gutter-width / 2);
  padding-right: (@grid-gutter-width / 2);
  &:extend(.clearfix all);
}

// Creates a wrapper for a series of columns
.make-row(@gutter: @grid-gutter-width) {
  margin-left:  (@gutter / -2);
  margin-right: (@gutter / -2);
  &:extend(.clearfix all);
}

// Generate the extra small columns
.make-xs-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  float: left;
  width: percentage((@columns / @grid-columns));
  min-height: 1px;
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);
}
.make-xs-column-offset(@columns) {
  @media (min-width: @screen-xs-min) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-xs-column-push(@columns) {
  @media (min-width: @screen-xs-min) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-xs-column-pull(@columns) {
  @media (min-width: @screen-xs-min) {
    right: percentage((@columns / @grid-columns));
  }
}


// Generate the small columns
.make-sm-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  @media (min-width: @screen-sm-min) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}
.make-sm-column-offset(@columns) {
  @media (min-width: @screen-sm-min) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-sm-column-push(@columns) {
  @media (min-width: @screen-sm-min) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-sm-column-pull(@columns) {
  @media (min-width: @screen-sm-min) {
    right: percentage((@columns / @grid-columns));
  }
}


// Generate the medium columns
.make-md-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  @media (min-width: @screen-md-min) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}
.make-md-column-offset(@columns) {
  @media (min-width: @screen-md-min) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-md-column-push(@columns) {
  @media (min-width: @screen-md-min) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-md-column-pull(@columns) {
  @media (min-width: @screen-md-min) {
    right: percentage((@columns / @grid-columns));
  }
}


// Generate the large columns
.make-lg-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  min-height: 1px;
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  @media (min-width: @screen-lg-min) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}
.make-lg-column-offset(@columns) {
  @media (min-width: @screen-lg-min) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-lg-column-push(@columns) {
  @media (min-width: @screen-lg-min) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-lg-column-pull(@columns) {
  @media (min-width: @screen-lg-min) {
    right: percentage((@columns / @grid-columns));
  }
}


// Framework grid generation
//
// Used only by Bootstrap to generate the correct number of grid classes given
// any value of `@grid-columns`.

.make-grid-columns() {
  // Common styles for all sizes of grid columns, widths 1-12
  .col(@index) when (@index = 1) { // initial
    @item: ~".col-xs-@{index}, .col-sm-@{index}, .col-md-@{index}, .col-lg-@{index}";
    .col((@index + 1), @item);
  }
  .col(@index, @list) when (@index =< @grid-columns) { // general; "=<" isn't a typo
    @item: ~".col-xs-@{index}, .col-sm-@{index}, .col-md-@{index}, .col-lg-@{index}";
    .col((@index + 1), ~"@{list}, @{item}");
  }
  .col(@index, @list) when (@index > @grid-columns) { // terminal
    @{list} {
      position: relative;
      // Prevent columns from collapsing when empty
      min-height: 1px;
      // Inner gutter via padding
      padding-left:  (@grid-gutter-width / 2);
      padding-right: (@grid-gutter-width / 2);
    }
  }
  .col(1); // kickstart it
}

.float-grid-columns(@class) {
  .col(@index) when (@index = 1) { // initial
    @item: ~".col-@{class}-@{index}";
    .col((@index + 1), @item);
  }
  .col(@index, @list) when (@index =< @grid-columns) { // general
    @item: ~".col-@{class}-@{index}";
    .col((@index + 1), ~"@{list}, @{item}");
  }
  .col(@index, @list) when (@index > @grid-columns) { // terminal
    @{list} {
      float: left;
    }
  }
  .col(1); // kickstart it
}

.calc-grid-column(@index, @class, @type) when (@type = width) and (@index > 0) {
  .col-@{class}-@{index} {
    width: percentage((@index / @grid-columns));
  }
}
.calc-grid-column(@index, @class, @type) when (@type = push) {
  .col-@{class}-push-@{index} {
    left: percentage((@index / @grid-columns));
  }
}
.calc-grid-column(@index, @class, @type) when (@type = pull) {
  .col-@{class}-pull-@{index} {
    right: percentage((@index / @grid-columns));
  }
}
.calc-grid-column(@index, @class, @type) when (@type = offset) {
  .col-@{class}-offset-@{index} {
    margin-left: percentage((@index / @grid-columns));
  }
}

// Basic looping in LESS
.loop-grid-columns(@index, @class, @type) when (@index >= 0) {
  .calc-grid-column(@index, @class, @type);
  // next iteration
  .loop-grid-columns((@index - 1), @class, @type);
}

// Create grid for specific class
.make-grid(@class) {
  .float-grid-columns(@class);
  .loop-grid-columns(@grid-columns, @class, width);
  .loop-grid-columns(@grid-columns, @class, pull);
  .loop-grid-columns(@grid-columns, @class, push);
  .loop-grid-columns(@grid-columns, @class, offset);
}

// Form validation states
//
// Used in forms.less to generate the form validation CSS for warnings, errors,
// and successes.

.form-control-validation(@text-color: #555; @border-color: #ccc; @background-color: #f5f5f5) {
  // Color the label and help text
  .help-block,
  .control-label,
  .radio,
  .checkbox,
  .radio-inline,
  .checkbox-inline  {
    color: @text-color;
  }
  // Set the border and box shadow on specific inputs to match
  .form-control {
    border-color: @border-color;
    .box-shadow(inset 0 1px 1px rgba(0,0,0,.075)); // Redeclare so transitions work
    &:focus {
      border-color: darken(@border-color, 10%);
      @shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 6px lighten(@border-color, 20%);
      .box-shadow(@shadow);
    }
  }
  // Set validation states also for addons
  .input-group-addon {
    color: @text-color;
    border-color: @border-color;
    background-color: @background-color;
  }
  // Optional feedback icon
  .form-control-feedback {
    color: @text-color;
  }
}

// Form control focus state
//
// Generate a customized focus state and for any input with the specified color,
// which defaults to the `@input-focus-border` variable.
//
// We highly encourage you to not customize the default value, but instead use
// this to tweak colors on an as-needed basis. This aesthetic change is based on
// WebKit's default styles, but applicable to a wider range of browsers. Its
// usability and accessibility should be taken into account with any change.
//
// Example usage: change the default blue border and shadow to white for better
// contrast against a dark gray background.

.form-control-focus(@color: @input-border-focus) {
  @color-rgba: rgba(red(@color), green(@color), blue(@color), .6);
  &:focus {
    border-color: @color;
    outline: 0;
    .box-shadow(~"inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px @{color-rgba}");
  }
}

// Form control sizing
//
// Relative text size, padding, and border-radii changes for form controls. For
// horizontal sizing, wrap controls in the predefined grid classes. `<select>`
// element gets special love because it's special, and that's a fact!

.input-size(@input-height; @padding-vertical; @padding-horizontal; @font-size; @line-height; @border-radius) {
  height: @input-height;
  padding: @padding-vertical @padding-horizontal;
  font-size: @font-size;
  line-height: @line-height;
  border-radius: @border-radius;

  select& {
    height: @input-height;
    line-height: @input-height;
  }

  textarea&,
  select[multiple]& {
    height: auto;
  }
}
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */


// MIXINS
";