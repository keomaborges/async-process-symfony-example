<?php

namespace App;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\TerminateEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class EventSubscriber implements EventSubscriberInterface
{
    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::TERMINATE => 'onTerminate'
        ];
    }

    /**
     * @param TerminateEvent $event
     */
    public function onTerminate(TerminateEvent $event)
    {
        $response = $event->getResponse();
        if ($response instanceof AsyncResponse) {
            sleep(5); //adding some drama

            $file = fopen('file-'.uniqid().'.txt', 'w') or die('Unable to create file.');
            for ($i = 0; $i < 5000; $i++) {
                fwrite($file, $response->getParam() . ' - ' .$i);
            }
            fclose($file);
        }

        /*
         * This method will be called for every since response returned from any controller.
         * So, it's limited to only responses of the type AsyncResponse.
         */
    }
}