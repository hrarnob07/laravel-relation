<?php


namespace App\Repositories\RepositoryInterfaces;


interface BranchRepositoryInterface extends BaseRepositoryInterface
{

    function branchAssociation(array $data);
}
