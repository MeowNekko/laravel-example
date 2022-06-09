<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class UserRepository
 * @package App\Repository\Eloquent
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * UserRepository constructor.
     * @param User $model
     * @param Collection $collection
     */
    public function __construct(
        User $model,
        Collection $collection
    ) {
        parent::__construct(
            $model,
            $collection
        );
    }
}
