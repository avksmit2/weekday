<?php
    require_once __DIR__. "/../src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_determineWeekday_dayOfWeek()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = 0;

            // Act
            $result = $test_weekday->determineWeekday($input);

            // Assert
            $this->assertEquals("Sunday", $result);
        }

        function test_determineWeekday_month()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = "January";

            // Act
            $result = $test_weekday->determineMonth($input);

            // Assert
            $this->assertEquals(0, $result);
        }

        function test_determineWeekday_century()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = 2016;

            // Act
            $result = $test_weekday->determineCentury($input);

            // Assert
            $this->assertEquals(6, $result);
        }

        function test_determineWeekday_leapYear()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = 1992;

            // Act
            $result = $test_weekday->determineLeapYear($input);

            // Assert
            $this->assertEquals(true, $result);
        }
    }



?>
