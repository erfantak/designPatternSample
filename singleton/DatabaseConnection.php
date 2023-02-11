<?php


namespace singleton;


class DatabaseConnection
{
    public static ?DatabaseConnection $instance = null;

    private function __construct(){}

    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance == null)
            return new DatabaseConnection();

        return self::$instance;
    }

    public function query()
    {
        echo 'query';
    }
}