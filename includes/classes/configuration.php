<?php

/**
 * @package World of Warcraft Armory
 * @version Release 4.50
 * @revision 482
 * @copyright (c) 2009-2010 Shadez
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 **/

if (!defined('__ARMORY__'))
   die('Direct access to this file is not allowed!');

###############################################
# World of Warcraft Armory configuration file #
###############################################

$ArmoryConfig               = array();
$ArmoryConfig['mysql']      = array();
$ArmoryConfig['settings']   = array();
$ArmoryConfig['multiRealm'] = array();

##############################################################################################
# MySQL Database Configuration
#
#   $ArmoryConfig['mysql']['host_*']
#   $ArmoryConfig['mysql']['user_*']
#   $ArmoryConfig['mysql']['pass_*']
#   $ArmoryConfig['mysql']['name_*']
#   $ArmoryConfig['mysql']['charset_*']
#      Database connection settings for different databases
#      Default: host: localhost
#            user: root
#            pass: 
#            charset: UTF8
#
#   DbExtension
#      The extension PHP uses to connect to MySQL. (MySQL or MySQLi)
#      Default: mysql
##############################################################################################

$ArmoryConfig['mysql']['host_armory']     = 'localhost';
$ArmoryConfig['mysql']['user_armory']     = 'root';
$ArmoryConfig['mysql']['pass_armory']     = '891127';
$ArmoryConfig['mysql']['port_armory']     = 3306;
$ArmoryConfig['mysql']['name_armory']     = 'armory';
$ArmoryConfig['mysql']['charset_armory']  = 'UTF8';

$ArmoryConfig['mysql']['host_realmd']     = 'localhost';
$ArmoryConfig['mysql']['user_realmd']     = 'root';
$ArmoryConfig['mysql']['pass_realmd']     = '891127';
$ArmoryConfig['mysql']['port_realmd']     = 3306;
$ArmoryConfig['mysql']['name_realmd']     = 'auth';
$ArmoryConfig['mysql']['charset_realmd']  = 'UTF8';

$ArmoryConfig['mysql']['DbExtension']     = 'mysqli';

##############################################################################################
# Armory configuration
#
#   useNews
#      News module enabled/disabled
#      Default: false (Disabled)
#               true  (Enabled)
#
#   defaultBGName
#      Battlegroup name (currently doesn't do anything, just cosmetic)
#      Default: Massive Network
#
#   useCache
#      Cache module enabled/disabled
#      Default: false (Disabled)
#               true  (Enabled)
#
#   cache_lifetime
#      Rebuild cache delay (in seconds)
#      Default: 86400 (1 day)
#
#   db_prefix
#      Armory database prefix (without "_"!)
#      Default: armory
#
#   minlevel
#      Players with level below this value wouldn't be displayed in Armory 
#      Default: 10 (Recommended)
#
#   minGmLevelToShow
#      Characters with this GM level and below it will be displayed in Armory
#      This example is for MaNGOS' access levels, Trinity Core has more than 3 GM lvls,
#      so you may need to set this value by more than 3.
#      Default: 3 (Everyone)
#               2 (Everyone except Administrators will be displayed in Armory)
#               1 (Everyone except Administrators and GMs will be displayed in Armory)
#               0 (Only players will be displayed in Armory)
#
#   skipBanned
#      Disable characters loading from banned accounts?
#      Default: false (Recommended)
#               true
#
#   defaultLocale
#      Site default locale
#      Default: zh_cn (Chinese Simplified)
#               en_us (US English)
#               es_es (Spanish)
#				zh_cn (Chinese Simplified)
#               de_de (German)
#               fr_fr (French)
#               ru_ru (Russian)
#
#   maintenance
#      Disable site and redirect users to info page
#      Default: false (Site is not disabled)
#               true  (Site is disabled)
#
#   useDebug
#      Debug log module enabled/disabled
#      Default: false (Disabled)
#               true  (Enabled)
#
#   logLevel
#      Logging level
#      Default: 2 (Full debug)
#               1 (Errors only)
#
#   checkVersionType
#      Armory errors reporting style (wrong database version, config version mismatch, etc.)
#      Default: show (Display all errors and exit script. Recommended)
#               log  (Write errors to log (if enabled) and continue script work)
#
#   useApc
#      Memory cache enabled/disabled (Requires APC to be installed!) (STRONGLY recommended 
#	   as it can significantly reduce load speed and server load)
#      Default: false (Disabled)
#               true (Enabled)
#
#   cachePrefix
#      Cache value prefix
#      Default: armory
#
##############################################################################################

$ArmoryConfig['settings']['useNews']          = true;
$ArmoryConfig['settings']['defaultBGName']    = '安吉魔兽世界';
$ArmoryConfig['settings']['useCache']         = false;
$ArmoryConfig['settings']['cache_lifetime']   = 86400;
$ArmoryConfig['settings']['db_prefix']        = 'armory';
$ArmoryConfig['settings']['minlevel']         = 10;
$ArmoryConfig['settings']['minGmLevelToShow'] = 3;
$ArmoryConfig['settings']['skipBanned']       = false;
$ArmoryConfig['settings']['defaultLocale']    = 'zh_cn';
$ArmoryConfig['settings']['maintenance']      = false;
$ArmoryConfig['settings']['useDebug']         = true;
$ArmoryConfig['settings']['logLevel']         = 2;
$ArmoryConfig['settings']['checkVersionType'] = 'show';
$ArmoryConfig['settings']['useApc']           = true;
$ArmoryConfig['settings']['cachePrefix']      = 'armory';

##############################################################################################
# Multirealms configuration
#
#   id
#      Realm id. Must be unique. Also, this value must be the same with X ($ArmoryConfig['multiRealm'][X]).
#
#   name
#      Realm name. Must be unique.
#
#   type
#      Server type (SERVER_MANGOS or SERVER_TRINITY, WITHOUT apostrophes - this is a constant!).
#
#   host_*
#      MySQL server host for characters/world database.
#      Default: localhost
#
#   user_*
#      MySQL username for characters/world database.
#      Default: root
#
#   pass_*
#      Password for MySQL user.
#
#   name_*
#      Database name for characters/world database.
#
#   charset_*
#      MySQL database charset.
#      Default: UTF8 (Recommended)
#
##############################################################################################

$ArmoryConfig['multiRealm'][1]['id']                 = 1;
$ArmoryConfig['multiRealm'][1]['name']               = '洛萨';
$ArmoryConfig['multiRealm'][1]['type']               = SERVER_TRINITY;
$ArmoryConfig['multiRealm'][1]['host_characters']    = 'localhost';
$ArmoryConfig['multiRealm'][1]['user_characters']    = 'trinity';
$ArmoryConfig['multiRealm'][1]['pass_characters']    = 'trinity';
$ArmoryConfig['multiRealm'][1]['port_characters']    = 3306;
$ArmoryConfig['multiRealm'][1]['name_characters']    = 'characters';
$ArmoryConfig['multiRealm'][1]['charset_characters'] = 'UTF8';
$ArmoryConfig['multiRealm'][1]['host_world']         = 'localhost';
$ArmoryConfig['multiRealm'][1]['user_world']         = 'trinity';
$ArmoryConfig['multiRealm'][1]['pass_world']         = 'trinity';
$ArmoryConfig['multiRealm'][1]['port_world']         = 3306;
$ArmoryConfig['multiRealm'][1]['name_world']         = 'world';
$ArmoryConfig['multiRealm'][1]['charset_world']      = 'UTF8';

/*
$ArmoryConfig['multiRealm'][2]['id']                 = 2;
$ArmoryConfig['multiRealm'][2]['name']               = 'Armory Realm 2';
$ArmoryConfig['multiRealm'][2]['type']               = SERVER_TRINITY;
$ArmoryConfig['multiRealm'][2]['host_characters']    = 'localhost';
$ArmoryConfig['multiRealm'][2]['user_characters']    = 'root';
$ArmoryConfig['multiRealm'][2]['pass_characters']    = '';
$ArmoryConfig['multiRealm'][2]['port_characters']    = 3306;
$ArmoryConfig['multiRealm'][2]['name_characters']    = 'characters_trinity';
$ArmoryConfig['multiRealm'][2]['charset_characters'] = 'UTF8';
$ArmoryConfig['multiRealm'][2]['host_world']         = 'localhost';
$ArmoryConfig['multiRealm'][2]['user_world']         = 'root';
$ArmoryConfig['multiRealm'][2]['pass_world']         = '';
$ArmoryConfig['multiRealm'][2]['port_world']         = 3306;
$ArmoryConfig['multiRealm'][2]['name_world']         = 'trinity_world';
$ArmoryConfig['multiRealm'][2]['charset_world']      = 'UTF8';
*/

##############################################################################################
#
# Do NOT edit any config settings below unless you know exactly what you are doing!
#
##############################################################################################

$ArmoryConfig['settings']['configVersion'] = 4;

?>
