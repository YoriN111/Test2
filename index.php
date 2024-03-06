<?php

$app = new App();

$app->run(new MySqlAdapter());
$app->run(new PostgresAdapter());
$app->run(new MongodbAdapter());
$app->run(new FirebaseAdapter());
$app->run(new CassandraAdapter());