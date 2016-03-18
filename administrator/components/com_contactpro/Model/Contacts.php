<?php

namespace Weble\ContactPro\Admin\Model;

use FOF30\Model\DataModel;
use FOF30\Container\Container as Container;

class Contacts extends DataModel
{
    public function __construct(Container $container, array $config = array())
    {
        parent::__construct($container, $config);
        
        $this->hasMany('requests', 'Requests', $this->getKeyName(), 'contact_id');
    }
}