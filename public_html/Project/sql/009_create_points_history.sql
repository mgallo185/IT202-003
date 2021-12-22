
CREATE TABLE IF NOT EXISTS PointsHistory
(
  id   int auto_increment primary key,
    user_id    int,
    point_change  int,
     reason varchar(15) not null COMMENT 'The type of points that occurred',

    created   timestamp default current_timestamp,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id)

)
