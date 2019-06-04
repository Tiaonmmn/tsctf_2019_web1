<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'userid' => 'smallint unsigned',
    'site' => 'tinyint',
    'username' => 'varchar',
    'password' => 'varchar',
    'salt' => 'char',
    'roleid' => 'int',
    'lastloginip' => 'varchar',
    'lastlogintime' => 'bigint unsigned',
    'loginip' => 'varchar',
    'logintime' => 'bigint',
    'email' => 'varchar',
    'realname' => 'varchar',
    'usermenu' => 'text',
  ),
  'fields' => 
  array (
    0 => 'userid',
    1 => 'site',
    2 => 'username',
    3 => 'password',
    4 => 'salt',
    5 => 'roleid',
    6 => 'lastloginip',
    7 => 'lastlogintime',
    8 => 'loginip',
    9 => 'logintime',
    10 => 'email',
    11 => 'realname',
    12 => 'usermenu',
  ),
  'primary_key' => 'userid',
);