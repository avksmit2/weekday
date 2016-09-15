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
            $this->month = array("January"=>0, "February"=>3, "March"=>3, "April"=>6, "May"=>1, "June"=>4, "July"=>6, "August"=>2, "September"=>5, "October"=>0, "November"=>3, "December"=>5);
            $this->century = array(1700=>4, 1800=>2, 1900=>0, 2000=>6, 2100=>4, 2200=>2, 2300=>0);
            $this->date = array("Sunday"=>0, "Monday"=>1, "Tuesday"=>2, "Wednesday"=>3, "Thursday"=>4, "Friday"=>5, "Saturday"=>6);
            $this->leapyear = false;

        }

        function determineWeekday($input)
        {
            return array_search($input, $this->date);
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
    }

?>
