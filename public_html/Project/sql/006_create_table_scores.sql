CREATE TABLE IF NOT EXISTS GamerScores
(
     id         int auto_increment primary key,
    user_id    int,
    recordScore  int,
    created   timestamp default current_timestamp,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check (recordScore > 0)

)