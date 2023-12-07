<?php

namespace bushart\LaravelTimezone;
use Carbon\Carbon;
use DateTimeZone;

class Timezone
{

    public function getTimezones($CurrentTimezone = 'UTC',$hour = 1)
    {
        $timezones = DateTimeZone::listIdentifiers();
        $listOfTimeZones = [];
        foreach ($timezones as $timezone) {
            $now = Carbon::now($CurrentTimezone);
            $now->setTimezone($timezone);
            if ($now->hour == $hour) {
                $tz = new DateTimeZone($timezone);
                $offset = $tz->getOffset(new \DateTime('now', new DateTimeZone('UTC')));
                $hours = abs(intdiv($offset, 3600));
                $minutes = abs(intdiv($offset % 3600, 60));
                $sign = $offset < 0 ? '-' : '+';
                $listOfTimeZones[] = sprintf('GMT%s%02d:%02d', $sign, $hours, $minutes);
            }
        }
        $now->setTimezone('Europe/London');

        return $listOfTimeZones;
    }
}