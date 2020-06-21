<?php


namespace App\Repositories\RepositoryInterfaces;


interface UserRepositoryInterface extends  BaseRepositoryInterface
{
    function registerUser(array $data );
    function generateAuthToken( $user );
}
