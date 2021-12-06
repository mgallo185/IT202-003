CREATE TABLE IF NOT EXISTS Competitions(
    -- Remember to refer to your proposal for your exact columns
    id int AUTO_INCREMENT PRIMARY KEY,
    title varchar(240) not null,
    duration int default 3,
    min_participants int DEFAULT 3,
    current_participants int default 0,
    join_fee int default 1,
    payout_option int,
    starting_reward int DEFAULT 1,
    current_reward int DEFAULT (starting_reward),
    paid_out tinyint(1) DEFAULT 0,
    did_calc TINYINT(1) DEFAULT 0,
    creator_id int,
    min_score int DEFAULT 1,

    first_place int default 70,
    second_place int default 20,
    third_place int default 10,


    expires TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    /* FOREIGN KEY (payout_option) REFERENCES BGD_Payout_Options(id),
    */ FOREIGN KEY(creator_id) REFERENCES Users(id),
    check (min_score >= 1),
    check (starting_reward >= 1),
    check (current_reward >= starting_reward),
    check (min_participants >= 3),
    check (current_participants >= 0),
    check(join_fee >= 0),
    check (first_place + second_place + third_place = 100)
)