<?php

require "vendor/autoload.php";

$config = array(
    'endpoint' => array(
        'localhost' => array(
            'host' => 'repositorio.colmex.mx',
            'port' => 8983,
            'path' => '/',
            'core' => 'hydra-indexer',
            // For Solr Cloud you need to provide a collection instead of core:
            // 'collection' => 'techproducts',
        )
    )
);


$select = array(
    'query'         => "degree_program_sim:\"Doctor en Literatura Hispánica\"",
    'start'         => 0,
    'rows'          => 20,
    'fields'        => array('title_tesim',
                            // 'date_created_tesim',
                            // 'creator_conacyt_tesim',
                            // 'contributor_conacyt_tesim',
                            // 'subject_conacyt_tesim',
                            // 'pub_conacyt_tesim',
                            // 'type_conacyt_tesim',
                            // 'subject_tesim',
                            // 'subject_person_tesim',
                            // 'subject_family_tesim',
                            // 'subject_work_tesim',
                            // 'license_tesim',
                            // 'rights_statement_tesim',
                            // "human_readable_type_tesim",
                            // 'language_tesim',
                            // 'visibility_ssi',
                            'member_ids_ssim'
                            )
);

$client = $client = new Solarium\Client($config);

// get a select query instance based on the config
$query = $client->createSelect($select);

// this executes the query and returns the result
$resultset = $client->select($query);

echo "Numero de coincidencias: ".$resultset->getNumFound();

krumo($resultset->getDocuments());