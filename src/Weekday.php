<?php
    class Weekday
    {
      private $year;
      private $month;
      private $century;
      private $date;
      private $leapyear;

        function __construct()
        {
            $this->year = 0;
            $this->month = array("01"=>0, "02"=>3, "03"=>3, "04"=>6, "05"=>1, "06"=>4, "07"=>6, "08"=>2, "09"=>5, "10"=>0, "11"=>3, "12"=>5);
            $this->century = array(1700=>4, 1800=>2, 1900=>0, 2000=>6, 2100=>4, 2200=>2, 2300=>0);
            $this->date = array("Sunday"=>0, "Monday"=>1, "Tuesday"=>2, "Wednesday"=>3, "Thursday"=>4, "Friday"=>5, "Saturday"=>6);
            $this->leapyear = 0;
        }

        function determineWeekday($input)
        {
            $monthCode = $this->determineMonth(substr($input,0,2));
            $centuryCode = $this->determineCentury(substr($input,6,2));
            $yearCode = $this->determineYearCode(substr($input,6,4));
            $day = substr($input,3,2);

            $weekday = ($yearCode + $monthCode + $centuryCode + $day - $this->leapyear) % 7;
            return array_search($weekday, $this->date);
        }

        function determineMonth($input)
        {
            $key = $input;
            return $this->month[$key];
        }

        function determineCentury($input)
        {
            $key = substr($input,0,2) . 0 . 0;
            return $this->century[$key];
        }

        function determineYearCode($input)
        {
            $yearNum = substr($input,2,2);
            return ($yearNum + ($yearNum / 4)) % 7;
        }

        function determineLeapYear($input)
        {
            if ($input % 4 == 0 && $input % 100 !== 0 || $input % 400 == 0) {
                return 1;
            } else {
                return 0;
            }
        }

    }
?>
