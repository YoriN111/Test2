<?php

class TestAdatpted implements DatabaseAdapterInterface
{
    public function connect(string $string)
    {
     echo "test interface fixed for the second time";
    }
}