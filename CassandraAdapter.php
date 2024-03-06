<?php

class CassandraAdapter implements DatabaseAdapterInterface
{

    #[\Override] public function connect(string $string)
    {
        echo 'cassandra';
    }
}