<?php
/**
 * Created by PhpStorm.
 * User: proteux3
 * Date: 12/15/16
 * Time: 7:57 AM
 */

namespace App\Repositories;


use App\User;

class UserRegistry
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserRegistry constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Activate users for the application
     *
     * @param $token
     * @internal param $user
     */
    public function activateUser($token)
    {
        $user = $this->user->where('verify_token', $token)->first();

        if ($user)
        {
            $user->update([
                    'verified'=>1,
                    'verify_token'=>''
                ]);

            return $user;
        }
            return false;

    }
}