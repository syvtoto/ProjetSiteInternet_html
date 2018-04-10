<?php
const DATABASE_HOST = "localhost";
const DATABASE_NAME = 'soireejeux';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = 'root';

$pdo = new PDO('mysql:host='.DATABASE_HOST.'; dbname='.DATABASE_NAME,
    DATABASE_USER, DATABASE_PASSWORD);

