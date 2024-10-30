=== Javascript Nofollow Links ===
Contributors: masterleep
Tags: comments, seo, nofollow, javascript
Requires at least: 2.7
Tested up to: 2.7.1
Stable tag: trunk

This plugin changes comment authors’ links from nofollowed anchor tags to javascript based links.

== Description ==

This plugin is for bloggers who are concerned about the SEO impact of allowing comment author links
on their posts. While WordPress by default applies the nofollow attribute to such links, which was
thought to preserve link juice for the original site, recently Google announced a change in the PageRank
algorithm. The impact is that nofollow links now leak link juice.

Google says not to worry about this for blog comments, but it is not clear how exactly they compensate
for this effect, or if their compensation method works perfectly for all blogs. One way to work around
the change in nofollow behavior is to replace HTML anchor tags with a different HTML element and add
the link functionality with Javascript. If search engines do not realize that the new element acts
as a link, then the original behavior of nofollow will return.

This plugin replaces the standard anchor tag for comment author links with a bold tag and adds
javascript behavior on the new tag to allow it to be clicked.

It also contains code for Thesis theme users to remove the redundant link on comment avatars.

Note: this plugin uses the Prototype library, which adds 38K to the page.  The library is delivered
using the Google content delivery network, which optimizes geographic delivery and has excellent
compression and caching settings.

== Installation ==

1. Upload `javascript-nofollow-links.zip` to the `/wp-content/plugins/` directory and unzip.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Ensure that the file `wp-content/plugins/javascript-nofollow-links/jnl.js` is accessible by web browsers.
   Normally it is unless you've applied some additional security to your web browser configuration.
1. You may need to add some css to your theme so that the new link elements appear as expected. For example:

    b.url
    {
      color: #YOUR_LINK_COLOR;
      cursor: pointer;
    }

    b.url:hover
    {
      text-decoration: underline;
    }


== Frequently Asked Questions ==

= Why do my comment links look funny? Your plugin is broken. =

You probably need to add some css to your theme so that the b.url element is recognized as a link.
Please see the instructions under Installation.

= Why do my comment links not work? Your plugin is broken. =

Your web server is probably not allowing access to the file `wp-content/plugins/javascript-nofollow-links/jnl.js`.
Please see the instructions under Installation.

= Is this cloaking, a practice Google frowns upon? =

I don't think so.  Cloaking refers to serving different content to search engine robots than humans
see.  This plugin serves exactly the same content to all visitors.

= I'm still worried about Google getting mad. =

I am sorry to hear that.

== Changelog ==

= 1.1 =
* Changed to apply click behavior using Prototype rather than onclick handlers.

= 1.0 =
* Initial version.
