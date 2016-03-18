<?php

namespace Weble\ContactPro\Admin\Model;

use FOF30\Model\DataModel;
use FOF30\Container\Container as Container;

class Requests extends DataModel
{
    public function __construct(Container $container, array $config = array())
    {
        parent::__construct($container, $config);

        $this->belongsTo('contact', 'Contacts', 'contact_id', 'contactpro_contact_id');
    }
}