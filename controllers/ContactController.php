<?php
require_once('../models/Model.php');

class ContactController extends Model {
    public function submitMessage($name, $email, $message) {
        $stmt = $this->db->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, $message]);
    }
}
