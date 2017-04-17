<?php

class CDBConfig
{

    public $default = array(
        'datasource' => 'mysql',
        'persistent' => false,
        'host' => '127.0.0.1',
        'login' => 'root',
        'password' => '',
        'database' => 'e-frp',
    );
    public $localhost = array(
        'datasource' => 'mysql',
        'persistent' => false,
        'host' => '127.0.0.1',
        'login' => 'root',
        'password' => '',
        'database' => 'e-frp',
    );

    public function __construct()
    {
        if (strpos(env('HTTP_HOST'), 'production') !== false) {
            //$this->default = $this->production;
        } elseif (strpos(env('HTTP_HOST'), 'development') !== false) {
            //$this->default = $this->development;
        } else {
            $this->default = $this->localhost;
        }
    }

    public function getConnectionString()
    {
        if ($this->default['datasource'] == 'mysql') {
            return "{$this->default['datasource']}:host={$this->default['host']};dbname={$this->default['database']}";
        }
    }

    public function getUsername()
    {
        return $this->default['login'];
    }

    public function getPassword()
    {
        return $this->default['password'];
    }

}
