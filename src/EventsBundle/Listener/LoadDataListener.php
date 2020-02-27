<?php
/*
namespace EventsBundle\Listener;

use AncaRebeca\FullCalendarBundle\Event\CalendarEvent;
use AncaRebeca\FullCalendarBundle\Model\Event;
use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use AncaRebeca\FullCalendarBundle\Event\CalendarEvent as MyCustomEvent;
use Doctrine\ORM\EntityManagerInterface;
use EventsBundle\Entity\Evenement;

class LoadDataListener
{       /**
 * @var EntityManagerInterface
 */
    /*
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */
    /*
    public function loadData(CalendarEvent $calendarEvent)
    {
        //You may want do a custom query to populate the events
        $repository = $this->em->getRepository('EventsBundle:Evenement');
        $events = $repository->findAll();

        // format("Y-m-d\TH:i:sP")

        // You may want to add an Event into the Calendar view.

        foreach ($events as $event) {
            $eventEntity = new Event($event->getTitre(), $event->getDate());
            $eventEntity->setEndDate($event->getDatefin());
            //optional calendar event settings
            $eventEntity->setId($event->getIdevenement());
            $eventEntity->setAllDay(false); // default is false, set to true if this is an all day event
            $eventEntity->setColor('#FF0000'); //set the background color of the event's label
            $eventEntity->setTextColor('#FFFFFF'); //set the foreground color of the event's label
            //$eventEntity->setUrl('http://www.google.com'); // url to send user to when event label is clicked
            $eventEntity->setClassName('my-custom-class'); // a custom class you may want to apply to event labels

            //dump($eventEntity);

            //finally, add the event to the CalendarEvent for displaying on the calendar
            $calendarEvent->addEvent($eventEntity);
            //die();
        }
    }
}

*/
namespace AppBundle\Listener;

use AncaRebeca\FullCalendarBundle\Event\CalendarEvent;
use AncaRebeca\FullCalendarBundle\Model\FullCalendarEvent;
use AncaRebeca\FullCalendarBundle\Event\CalendarEvent as MyCustomEvent;

class LoadDataListener
{
    /**
     * @param CalendarEvent $calendarEvent
     *
     * @return FullCalendarEvent[]
     */
public
function loadData(CalendarEvent $calendarEvent)
{
    $startDate = $calendarEvent->getStart();
    $endDate = $calendarEvent->getEnd();
    $filters = $calendarEvent->getFilters();

    //You may want do a custom query to populate the events

    $calendarEvent->addEvent(new MyCustomEvent('Event Title 1', new \DateTime()));
    $calendarEvent->addEvent(new MyCustomEvent('Event Title 2', new \DateTime()));
}
}