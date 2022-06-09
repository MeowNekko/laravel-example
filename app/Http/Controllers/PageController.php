<?php

namespace App\Http\Controllers;

use App\Repository\MenuItemRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    private MenuItemRepositoryInterface $menuItemRepository;

    /**
     * @param MenuItemRepositoryInterface $menuItemRepository
     */
    public function __construct(
        MenuItemRepositoryInterface $menuItemRepository
    ) {
        $this->menuItemRepository = $menuItemRepository;
    }

    /**
     * @param string $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Routing\Redirector
     */
    function index(string $id)
    {
        $menuItem = $this->menuItemRepository->find($id);
        if (!$this->checkPageByAuth($menuItem)) {
            return redirect('/account/login');
        }
        if (empty($menuItem) || !View::exists($menuItem['template'])) {
            return redirect('/404');
        }

        return view($menuItem['template']);
    }

    /**
     * @param \App\Models\MenuItem $menuItem
     * @return bool
     */
    function checkPageByAuth(\App\Models\MenuItem $menuItem): bool
    {
        return !Auth::check() && $menuItem['auth'] ? false : true;
    }
}
