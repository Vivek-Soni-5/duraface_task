<?php
require_once('../models/Model.php');

class PageController extends Model {
    public function getPage($slug) {
        $stmt = $this->db->prepare("SELECT * FROM pages WHERE slug = ?");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
