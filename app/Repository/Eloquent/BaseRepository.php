<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class BaseRepository
 * @package App\Repository\Eloquent
 */
class BaseRepository implements EloquentRepositoryInterface
{

    /**
     * @var Model
     */
    protected $model;
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * BaseRepository constructor.
     * @param Model $model
     * @param Collection $collection
     */
    public function __construct(
        Model $model,
        Collection $collection
    ) {
        $this->model = $model;
        $this->collection = $collection;
    }

    /**
     * @return Collection|null
     */
    public function all($withoutRelations = false): ?Collection
    {
        if ($withoutRelations) {
            return $this->model->withoutRelations()->all();
        } else {
            return $this->model->all();
        }
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes): Model
    {
        return $this->model->withoutRelations()->update($attributes);
    }

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
