<?php

class Worker
{
  public $id;
  public $start_date; //'YYYY-MM-DD'
  public $end_date; //'YYYY-MM-DD'

  public function __construct($row) {
    $this->id = $row['id'];

      $this->start_date = $row['start_date'];
      $this->end_date = $row['end_date'];

      //TODO: Where should this be calculates? $this->hours = 0;
  }

  public static function getWorkByTask(int $taskId) {
    // 1. Connect to the database
    // 2. Run query
    // 3. Read the results
    // 4. For each row, make new work object
    // 5. Return array of work objects
    return [];
  }
}
