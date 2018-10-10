<?php

class WorkHoursReport
{
  public static function fetchByProjectId(int $projectId){
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sqp = 'SELECT DATE(start_date) AS date,
    SUM(hours) AS hours
    FROM Work, Tasks
    WHERE'
  }
}
