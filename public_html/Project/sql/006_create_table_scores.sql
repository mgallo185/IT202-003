CREATE TABLE IF NOT EXISTS 'Scores'
(
     `id`         int auto_increment not null,
    `user_id`    int,
    `score`  int;
    `created`    timestamp default current_timestamp,
)