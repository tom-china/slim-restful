<?php
use lib\Config;
// DB Config
Config::write('db.host', 'localhost');
Config::write('db.port', '3306');
Config::write('db.basename', 'slimtut');
Config::write('db.user', 'root');
Config::write('db.password', 'xxg111063053');
// Project Config
Config::write('path', 'http://localhost/slimMVC');