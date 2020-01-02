<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_codingandcommunity';
$CFG->dbuser    = 'moodle_codingandcommunity';
$CFG->dbpass    = 'mKTEI9eCbJgwc0et';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 22,
  'dbsocket' => '5432',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://192.168.30.128/moodle';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
