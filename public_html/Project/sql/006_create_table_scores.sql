CREATE TABLE IF NOT EXISTS GamerScores
(
     id         int auto_increment primary key,
    user_id    int,
    scoreState  int,
    created   timestamp default current_timestamp,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    check (scoreState > 0)

)