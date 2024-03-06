<?php

class FirebaseAdapter implements DatabaseAdapterInterface
{

    #[\Override] public function connect(string $string)
    {
        echo 'firebase';
    }
}