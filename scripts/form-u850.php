<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'About Form Υποβολή',
	'heading' => 'Νέα υποβολή φόρμας',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Επιλεγμένο',
		'checkbox_unchecked' => 'Μη επιλεγμένο',
		'submitted_from' => 'Υποβολή της φόρμας από την τοποθεσία Web: %s',
		'submitted_by' => 'Διεύθυνση IP επισκέπτη: %s',
		'too_many_submissions' => 'Πάρα πολλές πρόσφατες υποβολές από αυτό το IP',
		'failed_to_send_email' => 'Η αποστολή email απέτυχε',
		'invalid_reCAPTCHA_private_key' => 'Μη έγκυρο ιδιωτικό κλειδί reCAPTCHA.',
		'invalid_field_type' => 'Άγνωστος τύπος πεδίου \'%s\'.',
		'invalid_form_config' => 'Η διαμόρφωση του πεδίου \'%s\' δεν είναι έγκυρη.',
		'unknown_method' => 'Άγνωστη μέθοδος αιτήματος διακομιστή'
	),
	'email' => array(
		'from' => 'kostasmokas2003@gmail.com',
		'to' => 'kostasmokas2003@gmail.com'
	),
	'fields' => array(
		'custom_U851' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Όνομα',
			'required' => true,
			'errors' => array(
				'required' => 'Το πεδίο \'Όνομα\' είναι απαιτούμενο.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Το πεδίο \'Email\' είναι απαιτούμενο.',
				'format' => 'Το πεδίο \'Email\' περιέχει μη έγκυρη διεύθυνση email.'
			)
		),
		'custom_U858' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Μήνυμα',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
