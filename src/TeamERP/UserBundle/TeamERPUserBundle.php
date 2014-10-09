<?php

namespace TeamERP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TeamERPUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';        
    }
}
