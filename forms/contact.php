<?php

$receiving_email_address = 'B.moyo@g7cargo.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = 'Request for Quote';

// Collecting additional form fields
$contact->add_message($_POST['name'], 'Name');
$contact->add_message($_POST['company_name'], 'Company Name');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['telephone'], 'Telephone');
$contact->add_message($_POST['collect_from_city'], 'Collect From City');
$contact->add_message($_POST['collect_from_country'], 'Collect From Country');
$contact->add_message($_POST['deliver_to_city'], 'Deliver To City');
$contact->add_message($_POST['deliver_to_country'], 'Deliver To Country');
$contact->add_message($_POST['method'], 'Shipping Method');
$contact->add_message($_POST['total_packages'], 'Total Packages');
$contact->add_message($_POST['package_1'], 'Package 1 Dimensions');
$contact->add_message($_POST['commodity'], 'Commodity');
$contact->add_message($_POST['other_details'], 'Other Details');

echo $contact->send();
?>
