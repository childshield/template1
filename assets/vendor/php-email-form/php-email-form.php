<?php
  class PHP_Email_Form
{
    // property declaration
    public $ajax = true;
    public $to, $from_name, $from_email, $subject, $message;
    

    // method declaration
    public function sendEmail()
    {
        $header = 'From:' . $this->from_email;
        $this->message = $this->from_name . " wrote the following on AI4Food Web:" . "\n\n" . $this->message;  
        $success = mail($this->to, $this->subject, $this->message, $header);
        return $success;
    }
}
?>
