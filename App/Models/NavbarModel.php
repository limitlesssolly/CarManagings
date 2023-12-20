<?php
require_once("Model.php");

class MenuModel extends Model {
    private $menu_id;
    private $menu_name;
    private $menu_status;
    private $menu_link;
    private $parent_id; 
    public function __construct($db) {
        $this->db = $this->connect();
    }

    public function getID() {
        return $this->menu_id;
    }

    public function setID($ID) {
        $this->menu_id = $ID;
    }

    public function getForeignID() {
        return $this->parent_id; 
    }

    public function setForeignID($parent_id) {
        $this->parent_id = $parent_id; 
    }

    public function getMenuItemName() {
        return $this->menu_name;
    }

    public function setMenuItemName($itemname) {
        $this->menu_name = $itemname;
    }

    public function getMenuItemStatus() {
        return $this->menu_status;
    }

    public function setMenuItemStatus($itemstatus) {
        $this->menu_status = $itemstatus;
    }

    public function getMenuItemLink() {
        return $this->menu_status;
    }

    public function setMenuItemLink($itemlink) {
        $this->menu_link = $itemlink;
    }

    public function getMenuItems() {
        $query = "SELECT * FROM menu_items WHERE status = 'enable' ORDER BY parent_id, id";
        $result = $this->db->query($query);
    
        $items = array();
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    
        return $items;
    }
    

    public function getMenuItemsByParentId($parentId) {
        $query = "SELECT * FROM menu_items WHERE parent_id = ? AND status = 'enable' ORDER BY id";
        $stmt = $this->db->getConn()->prepare($query);
        $stmt->bind_param('i', $parentId);
        $stmt->execute();

        $items = array();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }

        return $items;
    }
}
?>








