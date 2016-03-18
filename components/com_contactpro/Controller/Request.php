<?php

namespace Weble\ContactPro\Site\Controller;

use FOF30\Controller\DataController;

class Request extends DataController
{
    public function onAfterApplySave(&$data)
    {

        $mailer = \JFactory::getMailer();
        $config = $this->container->platform->getConfig();

        $sender = array(
            $data['email'],
            $data['firstname']." ".$data['lastname']
        );

        $mailer->setSender($sender);

        $contact = $this->getModel('Contacts')->tmpInstance();

        $recipient = $contact->find($data['contact_id']);

        $mailer->addRecipient($recipient->email);

        $body   = strip_tags($data['message']);
        $mailer->setSubject($data['subject']);
        $mailer->setBody($body);

        $send = $mailer->Send();

    }
}
