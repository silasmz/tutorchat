<?php
/**
 * DokuWiki Bootstrap3 Template: Global include
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

define('DOKU_INC_COMPAT', tpl_incdir() . 'compat/');

include(DOKU_INC_COMPAT . 'inc/functions.php');

// Load compatibility class for pre Greebo releases
if (! file_exists(DOKU_INC . '/inc/Menu/PageMenu.php')) {

    include(template('compat/inc/Menu/MenuInterface.php'));
    include(template('compat/inc/Menu/AbstractMenu.php'));
    include(template('compat/inc/Menu/Item/AbstractItem.php'));

    include(template('compat/inc/Menu/UserMenu.php'));
    include(template('compat/inc/Menu/MobileMenu.php'));
    include(template('compat/inc/Menu/PageMenu.php'));
    include(template('compat/inc/Menu/SiteMenu.php'));
    include(template('compat/inc/Menu/DetailMenu.php'));

    include(template('compat/inc/Menu/Item/ImgBackto.php'));
    include(template('compat/inc/Menu/Item/Top.php'));
    include(template('compat/inc/Menu/Item/Edit.php'));
    include(template('compat/inc/Menu/Item/Profile.php'));
    include(template('compat/inc/Menu/Item/Revisions.php'));
    include(template('compat/inc/Menu/Item/Backlink.php'));
    include(template('compat/inc/Menu/Item/Back.php'));
    include(template('compat/inc/Menu/Item/Login.php'));
    include(template('compat/inc/Menu/Item/Index.php'));
    include(template('compat/inc/Menu/Item/Register.php'));
    include(template('compat/inc/Menu/Item/MediaManager.php'));
    include(template('compat/inc/Menu/Item/Subscribe.php'));
    include(template('compat/inc/Menu/Item/Recent.php'));
    include(template('compat/inc/Menu/Item/Media.php'));
    include(template('compat/inc/Menu/Item/Resendpwd.php'));
    include(template('compat/inc/Menu/Item/Admin.php'));
    include(template('compat/inc/Menu/Item/Revert.php'));

}

require_once template('Template.php');

// Load PHP Simple HTML DOM class
include_once template('inc/simple_html_dom.php');

// Load custom menus
include(template('inc/Menu/PageMenu.php'));
include(template('inc/Menu/Item/Discussion.php'));

global $TEMPLATE;

$TEMPLATE = \dokuwiki\template\bootstrap3\Template::getInstance();

if (! defined('MAX_FILE_SIZE')) {

    if ($pagesize = $TEMPLATE->getConf('domParserMaxPageSize')) {
        define('MAX_FILE_SIZE', $pagesize);
    }

}

