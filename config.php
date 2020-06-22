<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('POSTGRESQL');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-54-247-89-181.eu-west-1.compute.amazonaws.com');
$CFG->dbname    = getenv('d2b8kumutcctgd');
$CFG->dbuser    = getenv('qqhhlutqdnyvqt');
$CFG->dbpass    = getenv('d9d6628dfb03c5d291cc4aa3ba0d5818bbaa43e21ab36d6e13d0dc3e332c7c92');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

//$CFG->wwwroot   = getenv('WWWROOT');
//$CFG->dataroot  = getenv('DATAROOT');
//$CFG->admin     = 'admin';

$CFG->wwwroot   = 'https://thuto.herokuapp.com/';
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
