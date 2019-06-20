<?php

    use acm\acm;
    use acm\Objects\Schema;

    // Define AC
    $acm = new acm(__DIR__, 'Analytics Manager');

    // Define Schemas
    $DatabaseSchema = new Schema();
    $DatabaseSchema->setDefinition('Host', 'localhost');
    $DatabaseSchema->setDefinition('Port', '3306');
    $DatabaseSchema->setDefinition('Username', 'root');
    $DatabaseSchema->setDefinition('Password', '');
    $acm->defineSchema('Database', $DatabaseSchema);

    // Process Command Line
    $acm->processCommandLine();