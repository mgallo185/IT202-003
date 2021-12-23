ALTER table Competitions ADD COLUMN cost_to_create int
default(starting_reward +1)
