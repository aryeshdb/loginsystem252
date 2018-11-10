 <?php

/* 
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// include_once 'psl-config.php';   // Needed because functions.php is not included

// $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// if ($mysqli->connect_error) {
//     header("Location: ../error.php?err=Unable to connect to MySQL");
//     exit();}


$dsn = "pgsql:"
    . "host=ec2-54-247-98-162.eu-west-1.compute.amazonaws.com;"
    . "dbname=dcic4f9mr3sape;"
    . "user=mucwkeemtqmshi;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=a187e3e6d0db7861ca7eea4e214d0583c844cb78fb78638015553e8ee2ddc902";

$mysqli = new PDO($dsn);
if ($mysqli->connect_error) {
    header("Location: ../error.php?err=Unable to connect to MySQL");
    exit();
}

?>