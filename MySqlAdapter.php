<?php

class MySqlAdapter implements DatabaseAdapterInterface
{

    #[\Override] public function connect(string $string)
    {
        echo 'im connecting to mysql';
    }
}