<?php
class Messages extends Controller {
  public function __construct() {
  }

  public function send() {
    // Check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process Form
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      // Init data
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'website' => trim($_POST['website']),
        'phone' => trim($_POST['phone']),
        'message' => trim($_POST['message'])
      ];

      // Send Message
      $mail_to = 'The21stKuruno@yahoo.com';
      $headers = "From: " . $data['email'];
      $txt = "You have received an email from " . $data['name'] . ".\n\n" . "Message: " . $data['message'] . "\n\n" . "Website: " . $data['website'] . "\n" . "Phone: " . $data['phone'];


      mail($mail_to, $headers, $txt);
      flash('send_success', 'Thank you. Your message sent successfully!');
      header('Location: ' . URLROOT);

    } else {
      $data = [
        'name' => '',
        'email' => '',
        'website' => '',
        'phone' => '',
        'message' => '',
      ];

      // Load View
      $this->view('pages/index', $data);
    }
  }
}