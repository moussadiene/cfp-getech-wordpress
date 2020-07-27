=== hubsine Social Share ===
Contributors: Hubsine, themesdefrance
Donate link: https://hubsine.com/donation/
Tags: social, twitter, facebook, whatsapp, social media, share, sharing, googleplus, pinterest, linkedin, social share, Cocorico Social
Requires at least: 3.8
Tested up to: 4.9.6
Stable tag: 2.1.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hubsine Social Share is a simple social sharing plugin for WordPress from Cocorico Social plugin. 

== Description ==

= English =

Hubsine Social Share lets you add social share buttons before and after your content. The following networks are supported :

* Facebook
* Twitter
* Google+
* Whatsapp (new)
* LinkedIn
* Viadeo
* Pinterest
* Email

Hubsine Social Share lets you :

* Choose the share buttons to display
* Define the order in which display the buttons
* Choose the post types where the buttons will show up
* Select a style :
 * Fill out the content width
 * Auto width
 * Big first button (try it, it rocks !)
* (new) Show the share count number
* Specify a button format :
 * Text & icons
 * Icons only
 * Text only

**SHORTCODES**

2 shortcodes are available to include share buttons anywhere in posts, pages and custom post types :

*[cocosocial networks="COMMA_SEPARATED_NETWORKS"]*

COMMA_SEPARATED_NETWORKS : Choose the following networks facebook, twitter, googleplus, linkedin, viadeo, pinterest and email.

*[cocosocial_button network="ONE_NETWORK" format="FORMAT"]*

ONE_NETWORK : Any network from facebook, twitter, googleplus, linkedin, viadeo, pinterest or email.

FORMAT : Choose from icon_text, icon_only, text_only or big_first.

**FILTERS**

Many filters are available to let you customize the look and feel of the buttons :

*Note : LOCATION can be equal to top, bottom or shortcode*
*ICON : If you update the icons, you have to adapt the style

* coco_social_before_div_LOCATION
* coco_social_before_ul_LOCATION
* coco_social_before_first_li_LOCATION
* coco_social_after_last_li_LOCATION
* coco_social_after_ul_LOCATION
* coco_social_after_div_LOCATION
* coco_social_email_body
* coco_social_share_label (buttons title attribute)
* coco_social_big_first_share_label
* coco_social_cat_hashtags
* coco_social_tag_hashtags
* coco_social_icon (new) *ICON

**Need something else ? Contact us.**

[Hubsine](https://www.hubsine.com/).

**Translators**

A huge thank you to our translators :

* WP Translations Team - [Contribute here](https://www.transifex.com/projects/p/hubsine-cocorico-social/)
* Borisa Djuraskovic - [sr_RS](http://www.webhostinghub.com/)

= Français =

Hubsine Social Share permet d'ajouter des boutons de partage au début et à la fin de vos contenus. Vous pourrez afficher les boutons de partage suivants :

* Facebook
* Twitter
* Google+
* Whatsapp (new)
* LinkedIn
* Viadeo
* Pinterest
* Email

Il est possible de :

* Choisir les boutons à afficher
* Définir un ordre dans lequel afficher les boutons
* Choisir les types de contenu sur lesquels les boutons s'afficheront
* Choisir un style d'affichage :
 * Toute la largeur du contenu
 * Largeur automatique
 * Premier bouton en avant (essayez ça vaut le coup)
* (nouveau) Afficher les compteurs de partage
* Spécifier un format pour les boutons :
 * Texte & icônes
 * Icônes seules
 * Texte seul

**SHORTCODES**

2 shortcodes sont disponibles pour inclure des boutons de partage dans n'importe quel article, page ou types de contenu personnalisés :

*[cocosocial reseaux="RESEAUX_SEPARES_PAR_DES_VIRGULES"]*

RESEAUX_SEPARES_PAR_DES_VIRGULES : Choisissez parmi les réseaux disponibles facebook, twitter, googleplus, linkedin, viadeo, pinterest et email.

*[bouton_cocosocial reseau="UN_RESEAU" format="FORMAT"]*

UN_RESEAU : Entrez un réseau parmi les suivant facebook, twitter, googleplus, linkedin, viadeo, pinterest ou email.

FORMAT : Choisissez entre texte_icone, icone_seule, texte_seul or gros_bouton.

**FILTERS**

Des filtres sont disponibles pour vous permettre de personnaliser l'apparence des boutons :

*Note : LOCATION peut être égal à top, bottom ou shortcode pour cibler une localisation précise*
*ICON : Si vous mettez à jour les icvons, vous devrez adatpé le style css. 

* coco_social_before_div_LOCATION
* coco_social_before_ul_LOCATION
* coco_social_before_first_li_LOCATION
* coco_social_after_last_li_LOCATION
* coco_social_after_ul_LOCATION
* coco_social_after_div_LOCATION
* coco_social_email_body
* coco_social_share_label (attribut titre des boutons)
* coco_social_big_first_share_label
* coco_social_cat_hashtags
* coco_social_tag_hashtags
* coco_social_icon (new) *ICON

**Besoin d'autre chose ? Contactez-nous.**

[Hubsine](https://www.hubsine.com/).

== Installation ==

= English =

1. Upload the `hubsine-cocorico-social` folder to the `/wp-content/plugins/` directory
1. Activate the Hubsine Social Share through the 'Plugins' menu in WordPress
1. Configure the plugin by going to the `Hubsine Social Share` menu that appears in the Settings admin menu

= Français =

1. Envoyez le dossier `hubsine-cocorico-social` dans le dossier `/wp-content/plugins/`
1. Activez Hubsine Social Share sur la page des plugins de WordPress
1. Configurez le plugin en allant dans le menu `Hubsine Social Share` placé dans le menu Réglages

== Frequently Asked Questions ==

= Do you have a question ? =

= English =

= XXX button is missing, can you add it please ? =
Send us your button request here (contact at hubsine dot com) and we'll see if we can make it happen :)

= Other questions ? =
Don't wait and drop us an email contact at hubsine dot com

= Français =

= Il manque le bouton XXX, pourvez-vous l'ajouter ? =
Envoyez-nous votre demande de bouton à contact arobase hubsine point com et nous verrons si nous pouvons l'ajouter :)

= D'autres questions ? =
N'attendez plus et envoyez-nous un email à contact arobase hubsine point com

== Screenshots ==

1. Showcase - Aperçu des boutons
2. Tab General - Onglet Général
3. Tab Networks - Onglet Réseaux
4. Tab Other - Onglet Autre

== Changelog ==

= 2.1.2.1 =
- update : change Facebook Graph API version from 2.8 to 2.10

= 2.1.3 =
- Update : change Facebook Graph API version from 2.8 to 2.9
- Update : Facebook "share" field is deprecated. New field is "engagement". See https://developers.facebook.com/docs/graph-api/changelog/version2.9#gapi-changes

= 2.1.2 =
- Add : share with Whatsapp. Whatsapp share button is avaible only on tablette, smartphone or mobile.
- Add : Add new filter for social button icon : coco_social_icon_
- Update : update icon fonts

= 2.1 =
- update : Remove twitter counter beacuse Twitter API (for count share) not exist now
- Update : Move APIs setting placement
- Update : Using Facebook API is now optional.
- Update : Update translation 
- Add : Button fullwidth option on mobile

= 2.0 ==
- Fix : Fixe Social share count facebook and twitter
- Update : update facebook and twitter count

= 1.2.1 =
- Fix : Translation loading
- Fix : Better checking for archive location

= 1.2.0 =
- New : Share buttons can be displayed on blog and archives pages
- New : Disable share buttons on individual posts/pages, etc.
- Update : Cocorico Framework 1.1.1
- Fix : No more target="_blank" on buttons

= 1.1.9.3 =
- Fix : Cocorico Framework bug

= 1.1.9.1 =
- Fix : Popup sharing is now working in all browsers

= 1.1.9 =
- Update : Cocorico Framework 1.1

= 1.1.8 =
- New : Counters refresh rated added
- New : Shares buttons now open popups instead of new tabs
- New : Serbian translation added thanks to [Borisa Djuraskovic](http://www.webhostinghub.com/)
- Fix : Some CSS fixes

= 1.1.7 =
- Update : Better counters errors handling
- Update : Better Facebook and Viadeo count retrieval

= 1.1.6 =
- New : Share counters are now included
- New : 2 new filters to show/hide Twitter hashtags from categories and tags
- Update : CSS optimization

= 1.1.5 =
- Update : Shortcodes are now internationalized thanks to Remi Corson http://www.remicorson.com/how-to-create-translation-ready-shortcodes/
- Update : CSS fixes to get proper rendering

= 1.1.4 =
- New : Shortcode to display share buttons anywhere in the loop [cocosocial]. See docs for more info.
- New : Shortcode to display a single button anywhere in posts, pages and any custom post type [cocosocial_button]. See docs for more info.
- New : Several filters were added to let you take full control. See docs for more info.
- Fix : admin/functions.php was missing so Hubsine Social Share admin didn't show up.

= 1.1.3 =
- SVN issue ! This version really bring back 3 files !

= 1.1.2 =
- SVN issue ! This version bring back 3 files !

= 1.1.1 =
- New : Choose the post types where to display the buttons
- New : Big first button mode added
- New : Footer admin link to Hubsine Social Share review page (be nice and give us 5* :))

= 1.1.0 =
- New : Pinterest, Viadeo and Email buttons added
- New : Choose between content fitted width and auto width
- Update : CSS optimizations when more than 4 buttons are displayed
- Update : Buttons will only show up on posts (for now)

= 1.0.3 =
- Fix : Cocorico compatibility when used with a theme from Hubsine

= 1.0.2 =
- Update version number

= 1.0.1 =
- Bug fixes and enhancements
- Quotes are working in Twitter and LinkedIn buttons
- Bottom message fix
- Secure Cocorico loading
- Twitter Hagtags are now generated from post categories and tags
- Translation updated
- readme.txt updated
- Plugin cover image added

= 1.0.0 =
 - Initial release
