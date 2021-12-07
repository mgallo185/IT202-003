CREATE TABLE IF NOT EXISTS Competitions
(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(240) not null, 
    duration int default 3,
    expires TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    starting_reward int DEFAULT 1,
    current_reward int DEFAULT (starting_reward),
    join_fee int default 1,
    min_participants int DEFAULT 3,
    current_participants int default 0,
    paid_out tinyint(1) DEFAULT 0,
    min_score int DEFAULT 1,
    first_place int default 70,
    second_place int default 20,
    third_place int default 10,
    cost_to_create int default (starting_reward + 1),


    payout_option int,
    did_calc TINYINT(1) DEFAULT 0,
    creator_id int,

    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    
    FOREIGN KEY (payout_option) REFERENCES PayoutOptions(id),
    FOREIGN KEY(creator_id) REFERENCES Users(id),
    
    check (min_score >= 1),
    check (starting_reward >= 1),
    check (current_reward >= starting_reward),
    check (min_participants >= 3),
    check (current_participants >= 0),
    check(join_fee >= 0)
    check (first_place + second_place + third_place = 100)

)