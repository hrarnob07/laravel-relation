<?php


namespace App\Repositories;


use App\Models\Branch;
use App\Models\User;
use App\Repositories\RepositoryInterfaces\BranchRepositoryInterface;

class BranchRepository extends BaseRepository implements BranchRepositoryInterface
{
        public function __construct(Branch $model)
        {
            parent::__construct($model);
        }

    function branchAssociation(array $data)
    {
        try{
            $user = User::find($data['user_id']);
            if($user && $user->user == "client"){
                $branch = $this->model->find($data["branch_id"]);
                if($branch)
                {
                     $user->branches()->attach($branch);
                      return true;
                }
                else
                {
                    throw new \Exception("Branch doest not exist.");
                }
            }
            else
            {
                throw new \Exception("User role is not client.");
            }
        }catch (\Throwable $throwable){
            throw new \Exception($throwable->getMessage());
        }
    }
}
