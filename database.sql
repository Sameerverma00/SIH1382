CREATE TABLE user_data(
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL UNIQUE,
    Confirm_password VARCHAR(255) NOT NULL
);
