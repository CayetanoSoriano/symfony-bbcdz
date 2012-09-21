<?php

namespace candgo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class candgoUserBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
