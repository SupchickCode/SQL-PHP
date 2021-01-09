<?php

require_once('connection.php');

// 1) Для каждой горы показать список групп, осуществлявших восхождение, 
// в хронологическом порядке.  
$for_each_mountain_show_team = 'SELECT climbing.team_id, team_climbers.id, team_climbers.team_name FROM climbing 
                  join team_climbers on climbing.team_id = team_climbers.id ORDER BY start_at, end_at';


// 2 )Добавление новой вершины, с указанием названия вершины, высоты и страны
// местоположения.
$add_new_mountain = "INSERT INTO `mountain` (`id`, `name`, `high`, `country`, `district`) VALUES (NULL, '?', '0', '?', '?')";


// 4) Показать список альпинистов, осуществлявших восхождение в указанный
// интервал дат.
$show_all_climbers_in_interval_time = "SELECT climbing.team_id, climbing.start_at, climber.team_id, climber.firstname FROM climbing 
                    join climber on climbing.team_id = climber.team_id 
                    WHERE climbing.start_at BETWEEN '2021-01-01' AND '2021-01-10'";


// 5) Добавление нового альпиниста в состав указанной группы.
$sql_add_new_climber_to_team = "INSERT INTO `climber` (`id`, `firstname`, `addres`, `team_id`) VALUES (NULL, '?', '?', '?', )";



// 6) Показать информацию о количестве восхождений каждого альпиниста на
// каждую гору.
$count_all_climbing_for_each_climber = "SELECT climbing.team_id, climber.team_id, climber.firstname FROM climbing 
                                        join climber on climbing.team_id = climber.team_id";


// 7) Показать список восхождений (групп), которые осуществлялись в указанный
// период времени.
$show_all_team_in_interval_time = "SELECT climbing.team_id, climbing.start_at, team_climbers.id FROM climbing 
                    join team_climbers on climbing.team_id = team_climbers.id 
                    WHERE climbing.start_at = '2021-01-05'";


// 8) Добавление новой группы, указав ее название, вершину, время начала
// восхождения.
$add_new_climbing = "INSERT INTO `climbing` (`id`, `mountain_id`, `team_id`, `start_at`, `end_at`) 
                    VALUES (NULL, '?', '?', '0000-00-00', '0000-00-00')";

