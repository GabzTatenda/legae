<?php
/**
 * Created by PhpStorm.
 * User: LoardThomas
 * Date: 05/10/2018
 * Time: 11:37
 */

namespace App\Services;
use App\Permission;
use App\userTypes;


class AdminService
{
    public function newUserType($request)
    {
        return userTypes::create(
            [
                'name'=>$request->name
            ]
        );
    }
    public function setPermission($request)
    {
        return PermissionUser::create(
            [
                'name'=>$request->name
            ]
        );
    }
}