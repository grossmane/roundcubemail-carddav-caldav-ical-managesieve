<?php

$config = array();

$config['imap_conn_options'] = array(
  'ssl'         => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true,
  ),
);

$config['managesieve_conn_options'] = [
  'ssl' => [
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true,
  ],
];

$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

$config['plugins'] = array('carddav', 'managesieve', 'calendar');
