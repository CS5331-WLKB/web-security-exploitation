<?php
/**
 * These are the database login details
 */  
define("HOST", "localhost");     // The host you want to connect to.
define("USER", "cs5331");    // The database username. 
define("PASSWORD", "v29AcujVSDKWadxe");        // The database password. 
define("DATABASE", "cs5331");    // The database name.
define("TABLE", "table17");    // The database name.

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
 
define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
