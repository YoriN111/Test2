
<?php

class PostgresAdapter implements DatabaseAdapterInterface
{
    public function connect(string $string)
    {
        echo 'postgres';
    }
}