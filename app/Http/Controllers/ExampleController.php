<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataMasterController;
use DB;
use Response;

use Session;
// include 'Soap/nusoap.php';
use nusoap_client;

// use SoapClient;


class ExampleController extends Controller
{
    public function treem()
    {
        $menu = array(
                1 => array('text' => 'Item #1', 'parentID' => null),
                2 => array('text' => 'Item #2', 'parentID' => 5),
                3 => array('text' => 'Item #3', 'parentID' => 2),
                4 => array('text' => 'Item #4', 'parentID' => 2),
                5 => array('text' => 'Item #5', 'parentID' => null),
                6 => array('text' => 'Item #6', 'parentID' => 5),
                7 => array('text' => 'Item #7', 'parentID' => 3),
                8 => array('text' => 'Item #8', 'parentID' => 5),
                9 => array('text' => 'Item #9', 'parentID' => 1),
                10 => array('text' => 'Item #10', 'parentID' => 7),
        );

        $addedAsChildren = array();

        foreach ($menu as $id => &$menuItem) { // note that we use a reference so we don't duplicate the array
            if (!empty($menuItem['parentID'])) {
                $addedAsChildren[] = $id; // it should be removed from root, but we'll do that later

                if (!isset($menu[$menuItem['parentID']]['children'])) {
                    $menu[$menuItem['parentID']]['children'] = array($id => &$menuItem); // & means we use the REFERENCE
                } else {
                    $menu[$menuItem['parentID']]['children'][$id] = &$menuItem; // & means we use the REFERENCE
                }
            }

            unset($menuItem['parentID']); // we don't need parentID any more
        }

        unset($menuItem); // unset the reference

        foreach ($addedAsChildren as $itemID) {
            unset($menu[$itemID]); // remove it from root so it's only in the ['children'] subarray
        }

        return response()->json($menu);
    }

    function makeTree($menu) {
        $tree = '<ul>';
        
        foreach ($menu as $id => $menuItem) {
            $tree .= '<li>' . $menuItem['text'];
            
            if (!empty($menuItem['children'])) {
                $tree .= makeTree($menuItem['children']);
            }
            
            $tree .= '</li>';
        }
        
        return $tree . '</ul>';
    }
}
