<?php

namespace App\CustomClasses;

use Image;
use DB;
use  Illuminate\Support\Facades\Auth;
use App\Role;

class Helper
{

    public static function imageUpload($file, $customName, $path)
    {
        $imageName = $customName . "." . $file->getClientOriginalExtension();
        if ($file->isValid()) {
            $file->move($path, $imageName);
            return $imageName;
        }
        return false;
    }

    public static function dateFormat($date)
    {
        return date("d-m-Y h:i:s A", strtotime($date));
    }

    public static function dateFormatDay($date)
    {
        return date("D", strtotime($date));
    }
    
    public static function dateFormatMonthYear($date)
    {
        return date("Y-F", strtotime($date));
    }

   
    public static function dateMonthYear($date)
    {
        return date("d-m-Y", strtotime($date));
    }


    public static function urlGroupCheck($id, $input)
    {

        $found = 0;
        $length=0;
        $mergedRoute = [];
        $role = Role::where('id', $id)->first();
        if ($role) {
            $decodedRoutes = json_decode($role->routes, true);
            if (!empty($decodedRoutes)) {
                foreach ($decodedRoutes as $val) {
                    $mergedRoute[] = $val;
                }
            }
        }
        if (count($mergedRoute) > 0) {
            $mergedRoute = array_unique($mergedRoute);
            foreach ($input as $routes) {
                $routes = json_decode($routes);
                $length = count($routes);
                foreach ($routes as $route) {
                    if (in_array($route, $mergedRoute)) {
                        ++$found;
                    }
                }
            }
        }
        if ($found == $length) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function timeSummation($times)
    {
        $seconds = 0;
        foreach ($times as $time) {
            list($g, $i, $s) = explode(':', $time);
            $seconds += $g * 3600;
            $seconds += $i * 60;
            $seconds += $s;
        }
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        if ($hours < 10) {
            $hours = '0' . $hours;
        }
        if ($minutes < 10) {
            $minutes = '0' . $minutes;
        }
        if ($seconds < 10) {
            $seconds = '0' . $seconds;
        }
        return "{$hours}:{$minutes}:{$seconds}";
    }

    public static function timeDiff($time1, $time2)
    {
        $time1 = date_create("1/1/1980 $time1");
        $time2 = date_create("1/1/1980 $time2");
        if ($time1 == false || $time2 == false) {
            return "00:00:00";
        } else {
            $diff = date_diff($time2, $time1);
            $date = $diff->h . ':' . $diff->i . ':' . $diff->s;
            return date("H:i:s", strtotime($date));
        }

    }

    //only time
    public static function onlyTime($date)
    {
        return date("h:i A", strtotime($date));
    }

    public static function dateTime()
    {
        return date('Y-m-d H:i:s');
    }
  public static function timeToSecond($time)
    {
        $parsed = date_parse($time);
        return $seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];
    }
public static function stringDate($date)
    {
        return date("d M Y", strtotime($date));
    }

    public static function onlydmY($date)
    {
        return date("d-m-Y", strtotime($date));
    }

    public static function secondsToTime($seconds)
    {
        $hours = floor($seconds / 3600);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;
        $hours = ($hours < 9) ? '0' . $hours : $hours;
        $minutes = ($minutes < 9) ? '0' . $minutes : $minutes;
        $seconds = ($seconds < 9) ? '0' . $seconds : $seconds;
        return "$hours:$minutes:$seconds";
    }

 public static function createDateRangeArray($strDateFrom, $strDateTo)
    {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.
        // could test validity of dates here but I'm already doing
        // that in the main script
        $aryRange = array();
        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));
        if ($iDateTo >= $iDateFrom) {
            array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
            while ($iDateFrom < $iDateTo) {
                $iDateFrom += 86400; // add 24 hours
                array_push($aryRange, date('Y-m-d', $iDateFrom));
            }
        }
        return $aryRange;
    }



}
