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

      $this->hours = 0;
  }
}
