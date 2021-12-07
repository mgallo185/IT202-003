CREATE TABLE IF NOT EXISTS PointsHistory
(
  id         int auto_increment primary key,
    user_id    int,
    point_change  int,
     reason int,
     SELECT SUM(point_change) AS  totalPoints FROM Users;
    created   timestamp default current_timestamp,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
   



)

