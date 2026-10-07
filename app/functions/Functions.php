<?php
class Functions extends Controller
{
   private $formData;
   private $data = [];
   private $pageModel;
   protected $db;
   public function __construct()
   {
      $this->pageModel = $this->model('Common');

      $this->formData = filteration($_POST);

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         if (isset($this->formData['sendEnquiry'])) {
            $this->inquiry();
         } elseif (isset($this->formData['sendMessage'])) {
            $this->contact();
         }
      }
   }

   // === INQUIRY ===
   public function inquiry()
   {
       $query = 'INSERT INTO inquiry (invoice, name, email, phone, category, message) VALUES (:invoice, :name, :email, :phone, :category, :message)';
      $this->data = [
         ':invoice' => 'FE' . random_num(5),
         ':name' => $this->formData['name'],
         ':email' => $this->formData['email'],
         ':phone' => $this->formData['phone'],
         ':category' => $this->formData['category'],
         ':message' => $this->formData['message'],
      ];

      // Your code goes here to process the inquiry form submission.
      if ($this->pageModel->insert($query, $this->data)) {
         $this->getEnquiry();
         // Your code goes here to display the success message after sending the inquiry.
         alert('message', 'Your Enquiry was sent!');
      } else {
         // Your code goes here to display any error messages if the form submission fails.
         alert('error', 'Failed to send your Enquiry!');
      }
   }

   // === SEND INQUIRY MAIL ===
   public function getEnquiry()
   {

      $ip = getVisitorIpAddress();

      $_date = date("Y-m-d h:i:sA");
      $_cip = $ip;
      $_name = $this->formData['name'];
      $_email = $this->formData['email'];
      $_phone = $this->formData['phone'];
      $_category = $this->formData['category'];
      $_message = $this->formData['message'];

      // SENDS MESSAGE TO TELEGRAM BOT
      $apiToken = TELE_API_TOKEN;
      $data = [
         'chat_id' => TELE_CHAT_ID,
         'text' => "---YOU HAVE AN INQUIRY---" . PHP_EOL . "Date: $_date" . PHP_EOL . "Client IP: $_cip" . PHP_EOL . "Name: $_name" . PHP_EOL . "Email: $_email" . PHP_EOL . "Phone: $_phone" . PHP_EOL . "Category: $_category" . PHP_EOL . "Message: $_message" . PHP_EOL . "-------------------------------------------" . PHP_EOL,
      ];

      $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
      $response;

      // SEND MAIL
      $toEmail = MY_EMAIL;
      $subject = 'CONGRATS';
      $body = "<h4>---YOU HAVE AN INQUIRY---</h4>
      <p class='m-0'>Date: $_date</p>
      <p class='m-0'>Client IP: $_cip</p>
      <p class='m-0'>Name: $_name</p>
      <p class='m-0'>Email: $_email</p>
      <p class='m-0'>Phone: $_phone</p>
      <p class='m-0'>Category: $_category</p>
      <p>Message: $_message</p>
      <h4>-----------------------------------</h4>";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

      // mail($toEmail, $subject, $body, $headers);
      // $this->sendEnquiryMail();
   }

   // === CONTACT ===
   public function contact()
   {

      $query = 'INSERT INTO contact (invoice, name, email, subject, message) VALUES (:invoice, :name, :email, :subject, :message)';
      $this->data = [
         ':invoice' => 'FE' . random_num(5),
         ':name' => $this->formData['name'],
         ':email' => $this->formData['email'],
         ':subject' => $this->formData['subject'],
         ':message' => $this->formData['message'],
      ];

      // Your code goes here to process the inquiry form submission.
      if ($this->pageModel->insert($query, $this->data)) {
         $this->getMessage();
         // Your code goes here to display the success message after sending the inquiry.
         alert('message', 'Your Message was sent!');
      } else {
         // Your code goes here to display any error messages if the form submission fails.
         alert('error', 'Failed to send your Message!');
      }
   }

   // === SEND CONTACT MAIL ===
   public function getMessage()
   {

      $ip = getVisitorIpAddress();

      $_date = date("Y-m-d h:i:sA");
      $_cip = $ip;
      $_name = $this->formData['name'];
      $_email = $this->formData['email'];
      $_subject = $this->formData['subject'];
      $_message = $this->formData['message'];

      // SENDS MESSAGE TO TELEGRAM BOT
      $apiToken = TELE_API_TOKEN;
      $data = [
         'chat_id' => TELE_CHAT_ID,
         'text' => "----YOU HAVE A MESSAGE----" . PHP_EOL . "Date: $_date" . PHP_EOL . PHP_EOL . "Client IP: $_cip" . PHP_EOL . "Name: $_name" . PHP_EOL . "Email: $_email" . PHP_EOL . "Subject: $_subject" . PHP_EOL . "Message: $_message" . PHP_EOL . "-------------------------------------------" . PHP_EOL,
      ];

      $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
      $response;

      // SEND MAIL
      $toEmail = MY_EMAIL;
      $subject = $_subject;
      $body = "<h4>----YOU HAVE A MESSAGE----</h4>
      <p class='m-0'>Date: $_date</p>
      <p class='m-0'>Client IP: $_cip</p>
      <p class='m-0'>Email: $_email</p>
      <p class='m-0'>Name: $_name</p>
      <p class='m-0'>Subject: $_subject</p>
      <p>Message: $_message</p>
      <h4>-----------------------------------</h4>";
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

      // mail($toEmail, $subject, $body, $headers);
      // $this->sendContactdMail();
   }
}
