<?php

class App
{
    public function run(DatabaseAdapterInterface $adapter)
    {
        $adapter->connect('cao');
    }
}