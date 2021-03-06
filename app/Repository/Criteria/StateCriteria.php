<?php

namespace App\Repository\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class StateCriteria.
 *
 * @package namespace App\Repository\Criteria;
 */
class StateCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param \App\Models\BaseModel $model
     * @param RepositoryInterface   $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $stateCode = request('state', null);
        
        if (null === $stateCode) {
            return $model;
        }
        
        $stateCodeArr = explode(',', $stateCode);
        
        return $model->state($stateCodeArr);
    }
}
