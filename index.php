<?php

$app = new App();

$app->run(new MySqlAdapter());
$app->run(new PostgresAdapter());