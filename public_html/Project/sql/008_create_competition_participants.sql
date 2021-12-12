CREATE TABLE IF NOT EXISTS CompetitionParticipants(
    id int AUTO_INCREMENT PRIMARY KEY,
    comp_id int,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    UNIQUE KEY (comp_id, user_id),
    FOREIGN KEY (comp_id) REFERENCES Competitions(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
)