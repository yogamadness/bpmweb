<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataMasterController;
use DB;
use Response;
use Session;

class ExampleController extends Controller
{
    public function treem()
    {
        /*$menu = array(
            1 => array('menu_name' => 'Item #1', 'parent_menu' => null),
            2 => array('menu_name' => 'Item #2', 'parent_menu' => 5),
            3 => array('menu_name' => 'Item #3', 'parent_menu' => 2),
            4 => array('menu_name' => 'Item #4', 'parent_menu' => 2),
            5 => array('menu_name' => 'Item #5', 'parent_menu' => null),
            6 => array('menu_name' => 'Item #6', 'parent_menu' => 5),
            7 => array('menu_name' => 'Item #7', 'parent_menu' => 3),
            8 => array('menu_name' => 'Item #8', 'parent_menu' => 5),
            9 => array('menu_name' => 'Item #9', 'parent_menu' => 1),
           10 => array('menu_name' => 'Item #10', 'parent_menu' => 7),
        );*/

        $menu = [];
        foreach (Session::get('menus') as $key => $value) {
            $menu[] = $value;
        }
        // dd($menu);

        $addedAsChildren = array();

        foreach ($menu as $id => &$menuItem) { // note that we use a reference so we don't duplicate the array
            if (!empty($menuItem['parent_menu'])) {
                $addedAsChildren[] = $id;
                
                if (!isset($menu[$menuItem['parent_menu']]['children'])) {
                    $menu[$menuItem['parent_menu']]['children'] = array($id => &$menuItem);
                } else {
                    $menu[$menuItem['parent_menu']]['children'][$id] = &$menuItem;
                }
            }

            unset($menuItem['parent_menu']); // we don't need this any more
        }

        unset($menuItem); // unset the reference

        foreach ($addedAsChildren as $itemID) {
            unset($menu[$itemID]); // remove it from root so it's only in the ['children'] subarray
        }
        
        // return $this->makeTree($menu);
        $trees = $this->makeTree($menu);
        return view('master-content/treem')->with('trees', $trees);
    }

    function makeTree($menu) {
        $tree = '<ul>';
        
        foreach ($menu as $id => $menuItem) {
            $tree .= '<li>' . $menuItem['menu_name'];
            
            if (!empty($menuItem['children'])) {
                $tree .= $this->makeTree($menuItem['children']);
            }
            
            $tree .= '</li>';
        }
        
        return $tree . '</ul>';
    }
}
