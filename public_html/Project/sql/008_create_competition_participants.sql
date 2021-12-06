CREATE TABLE IF NOT EXISTS CompetitionParticipants
(
    id int AUTO_INCREMENT PRIMARY KEY
    comp_id int,
    user_id int,
    created timestamp default current_timestamp,
    UNIQUE KEY(user_id, comp_id),
     modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES Users(id),
    FOREIGN KEY(comp_id) REFERENCES Competitions(id)


)