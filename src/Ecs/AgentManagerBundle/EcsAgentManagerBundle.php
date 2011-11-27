<?php

namespace Ecs\AgentManagerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EcsAgentManagerBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
