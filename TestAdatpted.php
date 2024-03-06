<?php

class TestAdatpted implements DatabaseAdapterInterface
{
    public function connect(string $string)
    {
     echo "test interface fixed";
    }
}