<?php
/**
*
* help_faq [English]
*
* @package language
* @version $Id: help_faq.php,v 1.42 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help_EN = array(
	array(
		0 => '--',
		1 => 'Login and Registration Issues'
	),
	array(
		0 => 'Why can’t I login?',
		1 => 'There are several reasons why this could occur. First, ensure your username and password are correct. If they are, contact the board owner to make sure you haven’t been banned. It is also possible the website owner has a configuration error on their end, and they would need to fix it.'
	),
	array(
		0 => 'Why do I need to register at all?',
		1 => 'You may not have to, it is up to the administrator of the board as to whether you need to register in order to post messages. However; registration will give you access to additional features not available to guest users such as definable avatar images, private messaging, emailing of fellow users, usergroup subscription, etc. It only takes a few moments to register so it is recommended you do so.'
	),
	array(
		0 => 'Why do I get logged off automatically?',
		1 => 'If you do not check the <em>Log me in automatically</em> box when you login, the board will only keep you logged in for a preset time. This prevents misuse of your account by anyone else. To stay logged in, check the box during login. This is not recommended if you access the board from a shared computer, e.g. library, internet cafe, university computer lab, etc. If you do not see this checkbox, it means the board administrator has disabled this feature.'
	),
	array(
		0 => 'How do I prevent my username appearing in the online user listings?',
		1 => 'Within your User Control Panel, under “Board preferences”, you will find the option <em>Hide your online status</em>. Enable this option with <samp>Yes</samp> and you will only appear to the administrators, moderators and yourself. You will be counted as a hidden user.'
	),
	array(
		0 => 'I’ve lost my password!',
		1 => 'Don’t panic! While your password cannot be retrieved, it can easily be reset. Visit the login page and click <em>I’ve forgotten my password</em>. Follow the instructions and you should be able to log in again shortly.'
	),
	array(
		0 => 'I registered but cannot login!',
		1 => 'First, check your username and password. If they are correct, then one of two things may have happened. If COPPA support is enabled and you specified being under 13 years old during registration, you will have to follow the instructions you received. Some boards will also require new registrations to be activated, either by yourself or by an administrator before you can logon; this information was present during registration. If you were sent an e-mail, follow the instructions. If you did not receive an e-mail, you may have provided an incorrect e-mail address or the e-mail may have been picked up by a spam filer. If you are sure the e-mail address you provided is correct, try contacting an administrator.'
	),
	array(
		0 => 'I registered in the past but cannot login any more?!',
		1 => 'Attempt to locate the e-mail sent to you when you first registered, check your username and password and try again. It is possible an administrator has deactivated or deleted your account for some reason. Also, many boards periodically remove users who have not posted for a long time to reduce the size of the database. If this has happened, try registering again and being more involved in discussions.'
	),
	array(
		0 => 'What is COPPA?',
		1 => 'COPPA, or the Child Online Privacy and Protection Act of 1998, is a law in the United States requiring websites which can potentially collect information from minors under the age of 13 to have written parental consent or some other method of legal guardian acknowledgment, allowing the collection of personally identifiable information from a minor under the age of 13. If you are unsure if this applies to you as someone trying to register or to the website you are trying to register on, contact legal counsel for assistance. Please note that the phpBB Group cannot provide legal advice and is not a point of contact for legal concerns of any kind, except as outlined below.',
	),
	array(
		0 => 'Why can’t I register?',
		1 => 'It is possible the website owner has banned your IP address or disallowed the username you are attempting to register. The website owner could have also disabled registration to prevent new visitors from signing up. Contact a board administrator for assistance.',
	),
	array(
		0 => 'What does the “Delete all board cookies” do?',
		1 => '“Delete all board cookies” deletes the cookies created by phpBB which keep you authenticated and logged into the board. It also provides functions such as read tracking if they have been enabled by the board owner. If you are having login or logout problems, deleting board cookies may help.',
	),
	array(
		0 => '--',
		1 => 'User Preferences and settings'
	),
	array(
		0 => 'How do I change my settings?',
		1 => 'If you are a registered user, all your settings are stored in the board database. To alter them, visit your User Control Panel; a link can usually be found at the top of board pages. This system will allow you to change all your settings and preferences.'
	),
	array(
		0 => 'The times are not correct!',
		1 => 'It is possible the time displayed is from a timezone different from the one you are in. If this is the case, visit your User Control Panel and change your timezone to match your particular area, e.g. London, Paris, New York, Sydney, etc. Please note that changing the timezone, like most settings, can only be done by registered users. If you are not registered, this is a good time to do so.'
	),
	array(
		0 => 'I changed the timezone and the time is still wrong!',
		1 => 'If you are sure you have set the timezone and Summer Time/DST correctly and the time is still incorrect, then the time stored on the server clock is incorrect. Please notify an administrator to correct the problem.'
	),
	array(
		0 => 'My language is not in the list!',
		1 => 'Either the administrator has not installed your language or nobody has translated this board into your language. Try asking the board administrator if they can install the language pack you need. If the language pack does not exist, feel free to create a new translation. More information can be found at the phpBB website (see link at the bottom of board pages).'
	),
	array(
		0 => 'How do I show an image below my username?',
		1 => 'There are two images that may appear below a username when viewing posts. Depending on the used style, the first may be an image associated with your rank, generally in the form of stars, blocks or dots, indicating how many posts you have made or your status on the board. The second, usually a larger image, is known as an avatar and is generally unique or personal to each user. It is up to the board administrator to enable avatars and to choose the way in which avatars can be made available. If you are unable to use avatars, contact a board administrator and ask them for their reasons.'
	),
	array(
		0 => 'What is my rank and how do I change it?',
		1 => 'Ranks, which appear below your username, indicate the number of posts you have made or identify certain users, e.g. moderators and administrators. In general, you cannot directly change the wording of any board ranks as they are set by the board administrator. Please do not abuse the board by posting unnecessarily just to increase your rank. Most boards will not tolerate this and the moderator or administrator will simply lower your post count.'
	),
	array(
		0 => 'When I click the e-mail link for a user it asks me to login?',
		1 => 'Only registered users can send e-mail to other users via the built-in e-mail form, and only if the administrator has enabled this feature. This is to prevent malicious use of the e-mail system by anonymous users.'
	),
	array(
		0 => '--',
		1 => 'Posting Issues'
	),
	array(
		0 => 'How do I post a topic in a forum?',
		1 => 'To post a new topic in a forum, click the relevant button on either the forum or topic screens. You may need to register before you can post a message. A list of your permissions in each forum is available at the bottom of the forum and topic screens. Example: You can post new topics, You can vote in polls, etc.'
	),
	array(
		0 => 'How do I edit or delete a post?',
		1 => 'Unless you are a board administrator or moderator, you can only edit or delete your own posts. You can edit a post by clicking the edit button for the relevant post, sometimes for only a limited time after the post was made. If someone has already replied to the post, you will find a small piece of text output below the post when you return to the topic which lists the number of times you edited it along with the date and time. This will only appear if someone has made a reply; it will not appear if a moderator or administrator edited the post, though they may leave a note as to why they’ve edited the post at their own digression. Please note that normal users cannot delete a post once someone has replied.'
	),
	array(
		0 => 'How do I add a signature to my post?',
		1 => 'To add a signature to a post you must first create one via your User Control Panel. Once created, you can check the <em>Add signature</em> box on the posting form to add your signature. You can also add a signature by default to all your posts by checking the appropriate radio button in your profile. If you do so, you can still prevent a signature being added to individual posts by un-checking the add signature box within the posting form.'
	),
	array(
		0 => 'How do I create a poll?',
		1 => 'When posting a new topic or editing the first post of a topic, click the “Poll creation” tab below the main posting form; if you cannot see this, you do not have appropriate permissions to create polls. Enter a title and at least two options in the appropriate fields, making sure each option is on a separate line in the textarea. You can also set the number of options users may select during voting under “Options per user”, a time limit in days for the poll (0 for infinite duration) and lastly the option to allow users to amend their votes.'
	),
	array(
		0 => 'Why can’t I add more poll options?',
		1 => 'The limit for poll options is set by the board administrator. If you feel you need to add more options to your poll then the allowed amount, contact the board administrator.'
	),
	array(
		0 => 'How do I edit or delete a poll?',
		1 => 'As with posts, polls can only be edited by the original poster, a moderator or an administrator. To edit a poll, click to edit the first post in the topic; this always has the poll associated with it. If no one has cast a vote, users can delete the poll or edit any poll option. However, if members have already placed votes, only moderators or administrators can edit or delete it. This prevents the poll’s options from being changed mid-way through a poll.'
	),
	array(
		0 => 'Why can’t I access a forum?',
		1 => 'Some forums may be limited to certain users or groups. To view, read, post or perform another action you may need special permissions. Contact a moderator or board administrator to grant you access.'
	),
	array(
		0 => 'Why can’t I add attachments?',
		1 => 'Attachment permissions are granted on a per forum, per group, or per user basis. The board administrator may not have allowed attachments to be added for the specific forum you are posting in, or perhaps only certain groups can post attachments. Contact the board administrator if you are unsure about why you are unable to add attachments.'
	),
	array(
		0 => 'Why did I receive a warning?',
		1 => 'Each board administrator has their own set of rules for their site. If you have broken a rule, you may issued a warning. Please note that this is the board administrator’s decision, and the phpBB Group has nothing to do with the warnings on the given site. Contact the board administrator if you are unsure about why you were issued a warning.'
	),
	array(
		0 => 'How can I report posts to a moderator?',
		1 => 'If the board administrator has allowed it, you should see a button for reporting posts next to the post you wish to report. Clicking this will walk you through the steps necessary to report the post.'
	),
	array(
		0 => 'What is the “Save” button for in topic posting?',
		1 => 'This allows you to save passages to be completed and submitted at a later date. To reload a saved passage, visit the User Control Panel.'
	),
	array(
		0 => 'Why does my post need to be approved?',
		1 => 'The board administrator may have decided that posts in the forum you are posting to require review before submission. It is also possible that the administrator has placed you in a group of users whose posts require review before submission. Please contact the board administrator for further details.'
	),
	array(
		0 => 'How do I bump my topic?',
		1 => 'By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping may be disabled or the time allowance between bumps has not yet been reached. It is also possible to bump the topic simply by replying to it, however, be sure to follow the board rules when doing so.'
	),
	array(
		0 => '--',
		1 => 'Formatting and Topic Types'
	),
	array(
		0 => 'What is BBCode?',
		1 => 'BBCode is a special implementation of HTML, offering great formatting control on particular objects in a post. The use of BBCode is granted by the administrator, but it can also be disabled on a per post basis from the posting form. BBCode itself is similar in style to HTML, but tags are enclosed in square brackets [ and ] rather than &lt; and &gt;. For more information on BBCode see the guide which can be accessed from the posting page.'
	),
	array(
		0 => 'Can I use HTML?',
		1 => 'No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can be applied using BBCode instead.'
	),
	array(
		0 => 'What are Smilies?',
		1 => 'Smilies, or Emoticons, are small images which can be used to express a feeling using a short code, e.g. :) denotes happy, while :( denotes sad. The full list of emoticons can be seen in the posting form. Try not to overuse smilies, however, as they can quickly render a post unreadable and a moderator may edit them out or remove the post altogether. The board administrator may also have set a limit to the number of smilies you may use within a post.'
	),
	array(
		0 => 'Can I post images?',
		1 => 'Yes, images can be shown in your posts. If the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.'
	),
	array(
		0 => 'What are global announcements?',
		1 => 'Global announcements contain important information and you should read them whenever possible. They will appear at the top of every forum and within your User Control Panel. Global announcement permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are announcements?',
		1 => 'Announcements often contain important information for the forum you are currently reading and you should read them whenever possible. Announcements appear at the top of every page in the forum to which they are posted. As with global announcements, announcement permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are sticky topics?',
		1 => 'Sticky topics within the forum appear below announcements and only on the first page. They are often quite important so you should read them whenever possible. As with announcements and global announcements, sticky topic permissions are granted by the board administrator.'
	),
	array(
		0 => 'What are locked topics?',
		1 => 'Locked topics are topics where users can no longer reply and any poll it contained was automatically ended. Topics may be locked for many reasons and were set this way by either the forum moderator or board administrator. You may also be able to lock your own topics depending on the permissions you are granted by the board administrator.'
	),
	array(
		0 => 'What are topic icons?',
		1 => 'Topic icons are author chosen images associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the board administrator.'
	),
	array(
		0 => '--',
		1 => 'User Levels and Groups'
	),
	array(
		0 => 'What are Administrators?',
		1 => 'Administrators are members assigned with the highest level of control over the entire board. These members can control all facets of board operation, including setting permissions, banning users, creating usergroups or moderators, etc., dependent upon the board founder and what permissions he or she has given the other administrators. They may also have full moderator capabilities in all forums, depending on the settings put forth by the board founder.'
	),
	array(
		0 => 'What are Moderators?',
		1 => 'Moderators are individuals (or groups of individuals) who look after the forums from day to day. They have the authority to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally, moderators are present to prevent users from going off-topic or posting abusive or offensive material.'
	),
	array(
		0 => 'What are usergroups?',
		1 => 'Usergroups are groups of users that divide the community into manageable sections board administrators can work with. Each user can belong to several groups and each group can be assigned individual permissions. This provides an easy way for administrators to change permissions for many users at once, such as changing moderator permissions or granting users access to a private forum.'
	),
	array(
		0 => 'Where are the usergroups and how do I join one?',
		1 => 'You can view all usergroups via the “Usergroups” link within your User Control Panel. If you would like to join one, proceed by clicking the appropriate button. Not all groups have open access, however. Some may require approval to join, some may be closed and some may even have hidden memberships. If the group is open, you can join it by clicking the appropriate button. If a group requires approval to join you may request to join by clicking the appropriate button. The user group leader will need to approve your request and may ask why you want to join the group. Please do not harass a group leader if they reject your request; they will have their reasons.'
	),
	array(
		0 => 'How do I become a usergroup leader?',
		1 => 'A usergroup leader is usually assigned when usergroups are initially created by a board administrator. If you are interested in creating a usergroup, your first point of contact should be an administrator; try sending a private message.',
	),
	array(
		0 => 'Why do some usergroups appear in a different colour?',
		1 => 'It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a “Default usergroup”?',
		1 => 'If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is “The team” link?',
		1 => 'This page provides you with a list of board staff, including board administrators and moderators and other details such as the forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'Private Messaging'
	),
	array(
		0 => 'I cannot send private messages!',
		1 => 'There are three reasons for this; you are not registered and/or not logged on, the board administrator has disabled private messaging for the entire board, or the board administrator has prevented you from sending messages. Contact a board administrator for more information.'
	),
	array(
		0 => 'I keep getting unwanted private messages!',
		1 => 'You can block a user from sending you private messages by using message rules within your User Control Panel. If you are receiving abusive private messages from a particular user, inform a board administrator; they have the power to prevent a user from sending private messages.'
	),
	array(
		0 => 'I have received a spamming or abusive e-mail from someone on this board!',
		1 => 'We are sorry to hear that. The e-mail form feature of this board includes safeguards to try and track users who send such posts, so e-mail the board administrator with a full copy of the e-mail you received. It is very important that this includes the headers that contain the details of the user that sent the e-mail. The board administrator can then take action.'
	),
	array(
		0 => '--',
		1 => 'Friends and Foes'
	),
	array(
		0 => 'What are my Friends and Foes lists?',
		1 => 'You can use these lists to organise other members of the board. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list, any posts they make will be hidden by default.'
	),
	array(
		0 => 'How can I add / remove users to my Friends or Foes list?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your Friend or Foe list. Alternatively, from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Searching the Forums'
	),
	array(
		0 => 'How can I search a forum or forums?',
		1 => 'Enter a search term in the search box located on the index, forum or topic pages. Advanced search can be accessed by clicking the “Advance Search” link which is available on all pages on the forum. How to access the search may depend on the style used.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.'
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use “Advanced search” and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => 'Visit to the “Members” page and click the “Find a member” link.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the “Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.'
	),
	array(
		0 => '--',
		1 => 'Topic Subscriptions and Bookmarks'
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t alerted when there’s an update, but you can come back to the topic later. Subscribing, however, will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'How do I subscribe to specific forums or topics?',
		1 => 'To subscribe to a specific forum, click the “Subscribe forum” link upon entering the forum. To subscribe to a topic, reply to the topic with the subscribe checkbox checked or click the “Subscribe topic” link within the topic itself.'
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, go to your User Control Panel and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Attachments'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => 'Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'How do I find all my attachments?',
		1 => 'To find your list of attachments that you have uploaded, go to your User Control Panel and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 Issues'
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => 'This software (in its unmodified form) is produced, released and is copyright <a href="http://www.phpbb.com/">phpBB Group</a>. It is made available under the GNU General Public License and may be freely distributed. See the link for more details.'
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => 'This software was written by and licensed through phpBB Group. If you believe a feature needs to be added, please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the group uses SourceForge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => 'Any of the administrators listed on the “The team” page should be an appropriate point of contact for your complaints. If this still gets no response then you should contact the owner of the domain (do a <a href="http://www.google.com/search?q=whois">whois lookup</a>) or, if this is running on a free service (e.g. Yahoo!, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that the phpBB Group has <strong>absolutely no jurisdiction</strong> and cannot in any way be held liable over how, where or by whom this board is used. Do not contact the phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter <strong>not directly related</strong> to the phpBB.com website or the discrete software of phpBB itself. If you do e-mail phpBB Group <strong>about any third party</strong> use of this software then you should expect a terse response or no response at all.'
	)
);



$help[] = array("--","Logga á og Limaskaps Trupulleikar");
$help[] = array("Hví kann eg ikki logga á?", "Er tú skrásett/ur? Tað veit denn, tú má vera skrásett/ur fyri at logga á. Er tú blivin bannað/ur frá hesum forumið? (Eini boð vera skrivaði um tú er) Um so er, burdi tú sett teg í samband við vevmeistarin ella ein administrator fyri at finna út av hví. Um tú er skrásett/ur og tú ikki er blivin bannað/ur, men kann framvegis ikki logga á, so kannað og dupult kannað títt brúkara navn og loyniorð. Sum oftast er hetta trupulleikin; um ikki, so set teg í samband við ein administrator - tað kann henda seg, at instillingarnar í  foruminum eru skeivar.");
$help[] = array("Hví skal eg skráseta meg?", "Tað er ikki sikkurt at tú noyðist - tað er upp til administratorin av foruminum at avgerða, um tú noyðist at verða skrásett/ur fyri at skriva innlegg. Tó, so gevur skráseting tær atgongd til  møguleikar, ið ikki eru til staðar tá tú bert er vitjandi, so sum mynd til vangamyndina, privat boð, senda teldupost til aðrar skrásettar brúkarar, melda teg til brúkarabólkar, osv. Tað tekur bert nakrar fáar minuttir at skráseta seg og tað verður viðmælt at tú ger tað.");
$help[] = array("Hví blívi eg loggað/ur av automatiskt?", "Um tú ikki setur flugubein í feltið <i>Logga meg á sjálvirkandi framyvir</i>, vil tú bara vera loggað/ur á í eitt ávíst tíðarskeið í senn. Hetta er fyri at hindra, at nakar skal misbrúka tína konto. Fyri ikki at vera loggað/ur av automatiskt, skal tú seta flugubein í kassan, tá tú loggar inn. Hetta verur ikki viðmælt, um tú brúkar eina teldu sum tú deilir við onnur, t.d. á bókasavni, internet kafé, handilskúla, osv.");
$help[] = array("Hvussu kann eg fyribyrgja at mítt brúkaranavn kemur í listan yvir brúkarar ið eru online?", "Í tíni vangamynd finnur tú ein møguleika sum eitur <i>Goym tín online status</i>; um tú setur flugubein í her, so vera tað einans administratorar og tú sjálv/ur ið síggja tín online status. Tú er tá ein goymdur brúkari.");
$help[] = array("Eg havi mist mítt loyniorð burtur!", "Ikki fara í panikk! Títt loyniorð kann tú ikki fáa aftur, men tú kann fáa eitt nýtt. Fyri at fáa tað skal tú fara login síðuna og trýsta á Eg havi gloymt mítt loyniorð. Fylg síðani vegleiðingini á skerminum, og tú burdi veri online aftur uppá null komma niks.");
$help[] = array("Eg eri skrásett/ur, men kann ikki logga á!", "Kannað fyrst um tú hevur skriva rætt brúkaranavn og loyniorð. Um tey eru í lagið, so er eitt av hesum tveimum tingunum hent: um SVBPO (Skipan fyri at Verja Børns Privatsemi Online) support er tendra og tú trýsti á <u>Eg eru minni enn 13 ára gamal/gomul</u> tá tú skrásetti teg, má tú fylgja teimum upplýsingunum, ið blivu sendir til tín við telduposti. Um hetta ikki er tilfeldið, so manglar tín konto kanska at blíva tendra. Summi forum krevja at kontoðir blíva tendraðar, antin av tær sjálvum, ella av einum administratori, áðrenn tú kann logga á. Tá tú skrásetti teg stóð tað um tað var neyðugt at tendra kontoðina. Um tú fekk eitt teldubræv, so fylg vegleiðingunum ið har standa; um tú ikki fekk eitt teldubræv, so kannað um teldupost adressan tú hevur upplýst er røtt. Um tú er vís/ur í at teldupost adressan tú hevur upplýst er røtt, so set teg í samband við ein administrator.");
$help[] = array("Eg havi skrásett meg fyri eini tíð síðani, men kann ikki logga á longur!", "Tær mest sannlíku grundirnar fyri hesum eru: tú hevur skriva galið brúkaranavn ella loyniorð (kannað teldubrævið tú fekk sendandi tá tú skrásetti teg), ella at administratorurin av einari ella aðrari grund hevur sletta tína konto. Um tann seinna grundin er tilfeldið, er tað kanska tí at tú eingi innlegg gjørdi? Tað er vanligt fyri forum, at við jøvnum millum bilum at sletta brúkarar, ið eingi innlegg hava gjørt, fyri at minka um støddina á dátustovninum. Royn og skráset teg einaferð enn, og blív aktivur í kjakinum.");


$help[] = array("--","Brúkara Innstillingar");
$help[] = array("Hvussu kann eg broyta mínar innstillingar?", "Allir tínir innstillingar (um tú er skrásett/ur) vera goymdir í einum dátustovani. Fyri at broyta teir, trýst á <u>Vangamynd</u> leinkjuna í valmyndini ovast á síðuni.");
$help[] = array("Tíðirnar eru ikki rættar!", "Tíðirnar eru púra rættar; tó, tað sum tú sær er helst tíðir frá einari aðrari tíðarsonu enn tí, tú er í. Um hetta er føri, burdi tú broytt innstillingina í vangamyndini fyri tíðarsonu til tað sonu sum tú er í. Vinarliga legg til merkis, at tað at broyta tíðarsonu, eins og at broyta flestu aðrar innstillingar, krevur at tú er skrásett/ur. So um tú ikki er tað, er hetta eitt gott høvi at blíva tað!");
$help[] = array("Eg havi broytt tíðarsonuna, men tíðin er framvegis ikki røtt!", "Um tú er púra vís/ur í, at tú hevur broytt tíðarsonuna til tað røttu og tíðin framvegis ikki er røtt, er tannmest sannlíka grundin hon, at hetta forumið ikki ger mun á summar og vetrar tíð. So um summari kann tíðin vera ein tíma við síðuna av einari rættari klokku.");
//$help[] = array("My language is not in the list!", "The most likely reasons for this are either the administrator did not install your language or someone has not translated this board into your language. Try asking the board administrator if they can install the language pack you need or if it does not exist, please feel free to create a new translation. More information can be found at the phpBB Group website (see link at bottom of pages)");
$help[] = array("Hvussu kann eg hava eina mynd undir mínum brúkaranavnið?", "Tað kunnu vera tvær myndir undir einum brúkaranavni, tá ein hyggar at innleggum. Tann fyrsta er ein mynd ið vísir tína støðu. Hetta er vanligvís nakrar stjørnur ella kassar, ið vísa hvussu nógv innlegg tú hevur gjørt, ella hvønn status tú hevur í foruminum. Undir hesum kann vera ein størri mynd, ið á Enskum verur nevnd ein Avatar (á Føroyskum: guddómur klæddur í hold). Myndin er vanligvís einskila fyri hvønn brúkaran. Tað er upp til administratorin av foruminum at loyva, um myndir kunnu vera nýttar.");
$help[] = array("Hvussu kann eg broyta mín status?", "Vanligvís kann tú ikki broyta nakran status (tín status verur vístur beint undir brúkaranavninum í innleggum, og í vangamyndini). Flestu forum brúka status fyri at vísa á hvussu nógv innlegg tú hevur gjørt, og til at eyðmerkja serligar brúkarar. Til dømis, administratorar og moderatorar hava ein serligan status. Vinarliga lat vera við at misbrúka hetta forum við at skriva fult av onki sigandi innleggum, einans fyri at broyta tín status - tá fer tú allar helst at uppliva, at ein administratorur ella moderatorur minkar um hvussu nógv innlegg tú hevur gjørt.");
$help[] = array("Tá eg trýsti á eina teldupost lenkju hjá einum brúkara veri eg biðin um at logga á.", "Tíðanverri, einans skrásettir brúkarar kunnu senda teldupost ígjøgnum tann innbygda teldupost formin (um administratorurin hevur loyvt hesi hending). Hetta er fyri at fyribyrgja óreint brúk af teldupost skipanini av einum vitjandi.");


$help[] = array("--","Innleggs Trupulleikar");
$help[] = array("Hvussu geri eg eitt nýtt evni í einum rúmi?", "Nemt - trýst á tann viðkomandi knøttin (Nýtt Evni) tá tú er í einum rúmi, ella tá tú hyggur at einum evni. Tað kann vera at tað er neyðugt at vera skrásett/ur fyri at skriva nýggj evni. Hentleikarnar, ið eru tøkir fyri tær, eru vístir niðast á rúm-síðuni og evni-síðuni (í <i>Tú kann skriva nýggj evni, Tú kann atkvøða  í atkvøðugreiðslum, osv.</i> listanum).");
$help[] = array("Hvussu kann eg broyta ella sletta eitt innlegg?", "Uttan so at tú er administrator ella moderator, kann tú einans broyta og sletta tíni egnu innlegg. Tú kann broyta eitt innlegg (summar tíðir einans eitt ávíst tíðarbil aftan á at tað var skriva) við at trýsta á <i>broyt</i> knøttin á tí viðkomandi innlegginum. Um onkur longu hevur svarað til títt innlegg, vil tú finna ein lítlan tekst stubba, næsta ferð tú hyggar at tínum innleggi aftur, ið sigur frá hvussu ofta tú hevur broytt í tí. Hesin tekstur vil einans vera har, um onkur hevur svara til títt innlegg; hann vil ikki vísa seg, um ein administratorur ella ein moderatorur hevur broytt títt inlegg (teir burdu skriva eini boð, har teir siga at teir hava broytt tað og hví). Vinarliga legg til merkis, at vanligir brúkarar kunnu ikki sletta eitt innlegg, tá onkur hevur svara til tað.");
$help[] = array("Hvussu kann eg knýta mína undirskrift til mítt innlegg?", "Fyri at knýta eina undirskrift til eitt innlegg, má tú fyrst gera eina; hetta verur gjørt um tína vangamynd. Tá hon er gjørd, kann tú seta flugubein í <i>Knýt undirskriftina til</i> kassan, tá tú ger eitt nýtt innlegg. Tú kann eisini knýta undirskriftina til øll innlegg automatiskt, við at seta flugubein í <i>Brúka altíð undirskriftina</i> kassan í vangamyndini. Tá kann tú tó framvegis forða fyri, at undirskriftin verur knýtt í einstøk innlegg, við at koyra flugubeinið úr kassanum, tá tú skrivar eitt innlegg.");
$help[] = array("Hvussu kann eg gera eina atkvøðugreiðslu?", "At gerða eina atkvøðugreiðslu er lætt! Tá tú skrivar eitt nýtt evni (ella broytir í tí fyrsta innlegginum í einum evni, um tú hevur loyvi til tað) burdi tú sæð ein <i>Ger eina atkvøðugreiðslu</i> form beint undir innleggs innihalds kassanum. Um tú ikki sær hann, so hevur tú allar helst ikki rættindi til at gera atkvøðugreiðslur. Tú eigur at skriva eina yvirskrift til atkvøðugreiðsluna, og gera minst tveir valmøguleikar. Fyri at gera ein valmøguleika, skriva ein møguleika í feltið <i>Valmøguleiki</i>og trýst á <i>Nyggjan valmøguleika</i>. Tú kann eisini seta tíðarmark á, hvussu leingi atkvøðugreiðslan skal verða. 0 merkir, at hon aldrin steðgar. Tað er eitt mark fyri, hvussu nógvar valmøguleikar tú kann gera. Hetta mark er sett av administratorum.");
$help[] = array("Hvussu kann eg broyta ella sletta eina atkvøðugreiðslu?", "Líka sum við innleggum, kunnu atkvøðugreiðslur blíva broyttar av tí sum hevur gjørt tær, einum administratori, ella einum moderatori. Fyri at broyta eina atkvøðugreiðslu trýstur tú á tað fyrsta innleggi í einum evni (atkvøðugreiðslunan verur altíð knýtt til tað fyrsta innleggi). Um eingin hevur atkvøtt enn, so kann ein vanligur brúkari (tann sum hevur gjørt hana) broyta ella sletta hana. Tó, um onkur hevur atkvøtt, kunnu einans administratorar og moderatorar broyta ella sletta hana; hetta er fyri at hindra, at fólk snýta, við at broyta valmøguleikarnar hálvan vegin ígjøgnum eina atkvøðugreiðslu.");
$help[] = array("Hví kann eg ikki koma inn í eitt ávíst rúm?", "Summi rúm kunnu vera avmarkað til serligar brúkarar ella brúkarabólkar. Fyri at hyggja at, lesa, skriva, osv. má tú hava serlig rættindi, ið tú einans kann fáa frá einum administratori ella einum moderatori, so tú burdi sett teg í samband við teir.");
$help[] = array("Hví kann eg ikki atkvøða í atkvøðugreiðslum?", "Einans skrásettir brúkarar kunnu greiða atkvøðu í atkvøðugreiðslum. Hetta er fyri at hindra svindil við úrslitinum. Um tú er skrásett/ur og framvegis ikki kann greiða atkvøðu, er tað allarhelst, tí at tú ikki hevur tey røttu rættindini.");


$help[] = array("--","Útsjónd og Sløg av Evnum");
$help[] = array("Hvat er BBkota?", "BBkota er ein serlig tillaging til HTML. Um tú kann brúka BBkotu, verur avgjørt av administratorinum. Tú kann eisini ógilda hana frá innleggi til innlegg, tá tú skrivar innlegg. BBkotan sjálv líkist nógv HTML: spjaldrini (á Enskum: tags) vera gird við [ og ] ístaðin fyri < og >, og tað gevur betri tamarhald á hvat og hvussu okkurt verur víst. Fyri fleiri upplýsingar um BBkotu les vegleiðingina, ið kann fáast atgongd til um síðuna, har tú skrivar innlegg.");
$help[] = array("Kann eg brúka HTML?", "Tað veldst um administratorurin loyvir tí; hann hevur fullkomi vald á tí. Um hann loyvir tí, so er tað sikkurt bert nøkur fá spjøldur ið rigga. Hetta er av trygdarávum, fyri at hindra fólki at misnýta spjøldrini, so at uppsetingin av síðuni kemur út av lagi, ella aðrir trupulleikar taka seg upp.");
$help[] = array("Hvat eru Íkorn?", "Íkorn (á Enskum: Smileys, Emoticons), eru lítlar myndir, ið kunnu brúkast til at vísa kenslur við, við at skriva ein lítlan tekst stubba, t.d. :) merkir glaður, :( merkir keddur. Listin yvir íkorn kann vera sæddur á síðini, har tú skriva innlegg. Royn ikki at yvirbrúka íkorn; tey kunnu skjótt gera, at eitt innlegg verur ólesiligt og moderatorarnir kunnu gera av at sletta tey, ella alt innleggi sum tað er.");
$help[] = array("Kann eg skoyta myndir uppí innleggini?", "Myndir kunnu saktans vera skoyttar uppí tíni innlegg. Tó, sum er er ikki møguleiki at senda upp (á Enskum: upload) myndir til hetta forum. Tú má tí gera eina leinkju til eina mynd, ið er á einum alment atkomuligum web-hotelli, t.d. www.min-sida.fo/mynd.jpg. Tú kann ikki gera leinkjur til eina mynd, ið liggur á tínari egnu teldu (uttan so at tað er ein alment atkomuligur servari) ei heldur til myndir ið liggja á síðum s.s. Hotmail ella Yahoo postkassum, síðum vardar við loyniorði, osv. Fyri at vísa myndir skal tú brúka BBkotu spjaldrið [img] ella tað í HTML (um tað er loyvt).");
$help[] = array("Hvat er ein Kunngerð?", "Kunngerðir eru ofta umráðandi upplýsingar, og tú burdi lisið tær skjótast til ber. Kunngerðir eru at finna ovast á hvørjari síðu, har ið tær eru skrivaðar. Um tú kann skriva kunngerðir veldst um loyvini, ið skulu til. Hesi loyvi vera avgjørd av administratorinum.");
$help[] = array("Hvat eru Klistrut evni?", "Klistrut evni eru at finna ovast, beint undir kunngerðum (um kunngerð er) í vel-rúm síðuni og bara á tí fyrstu síðuni. Tey eru sum regul sera umráðandi, so tú burdi lisið tey, so skjótt tú kann. Líka sum við  kunngerðum, ger administratorurin av hvørji loyvi skulu til fyri at skriva klistrut evni í teimum ymisku rúminum.");
$help[] = array("Hvat eru Læst evni?", "Læst evni eru gjørd soleiðis av einum administratori, ella einnum moderatori. Tú kann ikki gera innlegg til eitt læst evni, og um nøkur atkvøðugreiðslu hoyrdi til evni, er hon enda av sær sjálvum. Evni kunnu vera læst av nógvum grundum.");


$help[] = array("--","Brúkara Status og Bólkar");
$help[] = array("Hvat eru Administratorar?", "Administratorar eru fólk, ið hava tann hægsta myndaleikan yvir øllum í hesum forumið. Hesi fólk kunnu avgerða allar síður av hvussu forumið virkar, s.s. geva loyvir, bannað brúkarar, upprætta brúkarabólkar og moderatorar, osv. Ein administratorur hevur eisini allar myndileikarnar sum ein moderatorur hevur - í øllum rúmunum.");
$help[] = array("Hvat eru Moderatorar?", "Moderatorar eru einstaklingar (ella bólkar av einstaklingum) hvørs arbeiði er at ansa eftir rúmunum frá degi til dags. Teir hava mynduleika til at broyta ella sletta innlegg og læsa, opna, flyta og klúgva evni í teimum rúmum teir eru settir at ansa. Vanligvís eru moderatorar til, fyri at hindra fólki í at fara av evninum (á Enskum: off topic) ella skriva grov ella ágangandi innlegg.");
$help[] = array("Hvat eru Brúkarabólkar?", "At gera brúkarabólkar er ein máti, ið administratorurin kann bólka brúkarar uppá. Hvør brúkari kann hoyra til fleiri bólkar (hetta er annarlagis í flestu øðrum forumum) og hvør bólkurin kann so fáa ymiskar mynduleikar. Hetta ger tað lættari hjá administratorinum at gera fleiri fólk til moderatorar í rúmum, ella at geva teimum atgongd til privat rúm, osv.");
$help[] = array("Hvussu kann eg blíva limur í einum Brúkarabólki?", "Fyri at blíva limur í einum brúkarabólki skal tú trýsta á leinkjuna <i>Brúkarabólkar</i> í valmyndini ovast á síðuni, og tú kann tá síggja teir bólkarnar ið eru. Ikki allir bólkar hava fríða atgongd - summir kunnu vera læstir og aðrir kunnu enntá hava goymdan limaskap. Um bólkurin er opin, kann tú biðja um at blíva limur, við at trýsta á tann hóskandi knøttin. Moderatorurin í bólkinum má góðkenna tína umsøkn; teir kunnu spyrja hví tú ynskir at blíva limur. Vinarliga ikki plága moderatorin, um hann ikki gevur tær limaskap - hann hevur sínar grundir.");
$help[] = array("Hvussu kann eg blíva Moderatorur í einum Brúkarabólki?", "Brúkarabólkar vera upprættaðir av administratorinum, ið eisini avgerð hvør skal vera moderatorur í bólkinum. Um tú er áhugað/ur í at gera ein nýggjan brúkarabólk, burdi tú fyrst sett teg í samband við administratorin, so royn at senda honum eini privat boð.");


$help[] = array("--","Privat Boð");
$help[] = array("Eg kann ikki senda Privat Boð!", "Tað eru tríggjar møguligar grundir fyri hesum; tú er ikki skrásett/ur ella ikki loggað/ur á, administratorurin hevur gjørt privat boð óvirkin, ella administratorurin hevur forða tær einsæris at senda privat boð. Um tað er tann triðja, burdi tú prøva at spurgt administratorin hví.");
$help[] = array("Eg blívi við at fáa óynskt privat boð!", "I framtíðini fara vit at gera ein skúgva til viks lista (á Enskum: ignore list) til privat boð skipanina. Tó, sum er, um tú framhaldandi fær óynskt privat boð frá onkrum, so sig tað við administratorin - hann hevur mynduleikan at forða einum og hvørjum brúkara at senda privat boð yvurhøvur.");
$help[] = array("Eg havi fingið ein grovan ella hóttandi teldupost frá onkrum í hesum forumið!", "Tað eru vit keddir av at hoyra. Teldupost skipanin í hesum forumið inniheldur eina trygdarskipan, ið kann finna fram til brúkarar ið senda sovornan teldupost. Tú burdi sent ein teldupost til administratorin, við einum avritið av teldupostinum tú hevur fingið. Tað er sera umráðandi at fáa teksthøvdi við (tað inniheldur upplýsingar um tann ið sendi teldupostin).");
?>