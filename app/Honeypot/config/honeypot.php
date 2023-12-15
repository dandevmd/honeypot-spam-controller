<?php

return [
  'field_name' => 'honeypot_name',
  'fill_time' => 'fill_time',
  'time_limit' => 3,
  'enabled' => env('HONEYPOT_ENABLED', true),
  'visible' => env('HONEYPOT_VISIBLE', 'hidden'),
];