<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'ddanialaakhmetov2308@gmail.com',
    'to' => 'ddanialaakhmetov2308@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Имя',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Имя\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Почта',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Почта\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Сообщение',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Сообщение\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>