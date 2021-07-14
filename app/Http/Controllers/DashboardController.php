<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index()
    {
        $children = auth()->user()->children()->get();
//        $a = $this->buildTree(auth()->user()->children()->get(),auth()->user()->id);
        $nestable = User::nestable(\auth()->user()->children()->get());
dd($nestable);
//        return view('dashboard.index',compact('children'));
    }

    public function invite()
    {
        return view('dashboard.invite');
    }

    public function buildTree($elements,$parentId)
    {
        $branch = array();
        foreach ($elements as $element) {
            if ($element->parent_id == $parentId) {
                $children = $this->buildTree($elements, $element->id);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element->id] = $element;
                unset($elements[$element->id]);
            }
        }
        return $branch;
    }

}
