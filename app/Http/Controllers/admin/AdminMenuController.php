<?php

namespace App\Http\Controllers\admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    private Menu $menu;
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
    public function index()
    {
        $menus = $this->menu->latest()->paginate(5);
        return view('admin.pages.menus.index', compact('menus'));
    }
    public function create()
    {
        $optionSelect = $this->getMenu($parentId = '');
        return view('admin.pages.menus.addmenu', compact('optionSelect'));
    }

    public function store(Request $request)
    {
        $this->menu->create(array(
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ));
        return redirect()->route('menu.index');
    }

    public function edit($id)
    {
        $menu = $this->menu->find($id);
        $optionSelect = $this->getmenu($menu->parent_id);
        return view('admin.pages.menus.editmenu', compact('menu', 'optionSelect'));
    }

    public function update($id, Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        return redirect()->route('menu.index');
    }

    public function delete($id)
    {
        $this->menu->find($id)->delete();
        return redirect()->route('menu.index');
    }

    public function getMenu($parentId)
    {
        $data = $this->menu->all();
        $recusive = new Recusive($data);
        $optionSelect = $recusive->Recusive($parentId);
        return $optionSelect;
    }
}
