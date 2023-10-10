<?php 
const host = 'localhost';
const database = 'banhang';
const user = 'root';
const password = '';

$conn = new mysqli(host, user, password, database);
mysqli_set_charset($conn, 'utf8');