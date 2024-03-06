<?php

class MongodbAdapter implements DatabaseAdapterInterface
{

    #[\Override] public function connect(string $string)
    {
        echo 'mongo-db-adapter';
    }
}