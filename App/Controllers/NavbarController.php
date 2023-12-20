<?php
require_once("Controller.php");
require_once("../App/Models/NavbarModel.php");

class MenuController extends Controller
{
    private $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel(new DBh());
    }

    public function displayMenu()
    {
        $topLevelMenu = $this->menuModel->getMenuItems();
        return $this->buildMenu($topLevelMenu);
    }

    public function displaySubMenu($parentId)
    {
        $subMenuItems = $this->menuModel->getMenuItemsByParentId($parentId);
        return $this->buildMenu($subMenuItems, $parentId);
    }
    private function buildSubMenu($menuItems, $parentId)
    {
        $html = '';
        foreach ($menuItems as $menuItem) {
            if ($menuItem['parent_id'] == $parentId) {
                $menuLink = $menuItem['menu_link'];
                $menuTitle = $menuItem['title'];
                $menuId = $menuItem['id']; 

                $html .= "<a class='nav-link dropbtn' href='$menuLink'>$menuTitle</a>";
            }
        }

        return $html;
    }

    private function buildMenu($menuItems, $parentId = NULL)
    {
        $html = '';

        foreach ($menuItems as $menuItem) {
            if ($menuItem['parent_id'] == $parentId) {
                $menuLink = $menuItem['menu_link'];
                $menuTitle = $menuItem['title'];
                $menuId = $menuItem['id'];

                $subMenu = $this->buildSubMenu($menuItems, $menuId);

                if (!empty($subMenu)) {
                    $html .= '<li class="nav-item me-3 me-lg-0">';
                    $html .= '<div class="dropdown">';
                    $html .= "<a class='nav-link dropbtn' href='$menuLink'>";
                    $html .= "$menuTitle";
                    $html .= "</a>";
                    $html .= '<div class="dropdown-content">';
                    $html .= "$subMenu" ;
                    $html .= "</div>";
                    $html .= "</li>";
                } else {
                    $html .= '<li class="nav-item me-3 me-lg-0">';
                    $html .= "<a class='nav-link' href='$menuLink'>$menuTitle</a>";
                    $html .= "</li>";
                }
            }
        }

        return $html;
    }

}




$controller = new MenuController();

if (isset($_GET['parent_id'])) {
    $parentId = $_GET['parent_id'];
    $menuItems = $controller->displaySubMenu($parentId);
} else {
    $menuItems = $controller->displayMenu();
}

include("partials/navbar.php");
?>
