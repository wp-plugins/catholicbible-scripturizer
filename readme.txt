=== CatholicBible Scripturizer ===
Contributors: wcpinho
Donate link: http://www.bibliacatolica.com.br
Tags: bible, catholic, church, Jesus, Cristo, Pope, Vatican
Requires at least: 3.0.1
Tested up to: 4.4.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

CatholicBible Scripturizer will convert Bible references in your posts and comments into hyperlinks to online Bibles.

== Description ==

CatholicBible Scripturizer will convert Bible references in your posts and comments into hyperlinks to online Bibles.

For example, it will change John 3:16 into something like
<a href="http://www.bibliacatolica.com.br/biblia-ave-maria/sao-joao/3/">John 3:16</a>

Online Bibles currently supported are:

* <a href="http://www.bibliacatolica.com.br/biblia-ave-maria/genesis/1/">Bíblia Ave Maria</a>


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `wp-catholic-bible.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How Scripturizer Recognizes Scripture References =

1. Scripturizer will recognize Scripture references that conform to somewhat loose conventions:
 - [Book] [Chapter]
 - [Book] [Chapter]:[Verse]
 - [Book] [Chapter]:[Verse]-[verse]
2. Where [Book] can be a full name or an abbreviation, with prefix as applicable. Note that prefixes can be in several formats:
 - 1, 2, 3
 - I, II, II
 - First, Second, Third
 - 1st, 2nd, 3rd
3. Scripturizer will recognize most common book abbreviations.
 - NOTE: All abbreviated references to Judges should include the letter 'g' in order to differentiate between Judges and Jude.
4. Scripturizer can also recognize translation acronyms following Scripture references:
 - [Reference] [Translation]
 - [Reference] ([Translation])

== Screenshots ==

N/A

== Changelog ==

= 1.0 =
* Original release.

== Upgrade Notice ==

N/A