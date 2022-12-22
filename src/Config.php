<?php
namespace src;

class Config {
    const BASE_DIR = '/cadastro-de-cliente/public';

    const DB_DRIVER = 'pgsql';
    const DB_HOST = 'localhost';
    const DB_PORT = '5432';
    const DB_DATABASE = 'estruturado';
    CONST DB_USER = 'postgres';
    const DB_PASS = 'admin';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}