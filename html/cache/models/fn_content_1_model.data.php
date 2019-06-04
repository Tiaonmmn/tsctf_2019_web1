<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'id' => 'int unsigned',
    'catid' => 'smallint unsigned',
    'modelid' => 'smallint',
    'title' => 'varchar',
    'thumb' => 'varchar',
    'keywords' => 'char',
    'description' => 'text',
    'url' => 'char',
    'listorder' => 'tinyint unsigned',
    'status' => 'tinyint unsigned',
    'hits' => 'smallint unsigned',
    'sysadd' => 'tinyint',
    'userid' => 'smallint',
    'username' => 'char',
    'inputtime' => 'bigint unsigned',
    'updatetime' => 'bigint unsigned',
  ),
  'fields' => 
  array (
    0 => 'id',
    1 => 'catid',
    2 => 'modelid',
    3 => 'title',
    4 => 'thumb',
    5 => 'keywords',
    6 => 'description',
    7 => 'url',
    8 => 'listorder',
    9 => 'status',
    10 => 'hits',
    11 => 'sysadd',
    12 => 'userid',
    13 => 'username',
    14 => 'inputtime',
    15 => 'updatetime',
  ),
  'primary_key' => 'id',
);