<?php
    require_once __DIR__. "/../src/Weekday.php";

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_determineWeekday_dayOfWeek()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = "09/15/2016";

            // Act
            $result = $test_weekday->determineWeekday($input);

            // Assert
            $this->assertEquals("Thursday", $result);
        }

        function test_determineWeekday_month()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = "01";

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

        function test_determineWeekday_yearCode()
        {
            // Assemble
            $test_weekday = new Weekday();
            $input = 1897;

            // Act
            $result = $test_weekday->determineYearCode($input);

            // Assert
            $this->assertEquals(2, $result);
        }

        // function test_determineWeekday_weekday()
        // {
        //     // Assemble
        //     $test_weekday = new Weekday();
        //     $input = "03/14/1987";
        //
        //     // Act
        //     $result = $test_weekday->determineWeekday($input);
        //
        //     // Assert
        //     $this->assertEquals("Saturday", $result);
        // }
    }



?>
