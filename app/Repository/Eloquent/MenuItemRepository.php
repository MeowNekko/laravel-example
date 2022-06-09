<?php

namespace App\Repository\Eloquent;

use App\Models\MenuItem;
use App\Repository\MenuItemRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class MenuItemRepository
 * @package App\Repository\Eloquent
 */
class MenuItemRepository extends BaseRepository implements MenuItemRepositoryInterface
{

    /**
     * MenuItemRepository constructor.
     * @param MenuItem $model
     * @param Collection $collection
     */
    public function __construct(
        MenuItem $model,
        Collection $collection
    ) {
        parent::__construct(
            $model,
            $collection
        );
    }
}
