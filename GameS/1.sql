CREATE TABLE goods (
    id VARCHAR(255) PRIMARY KEY,
    name TEXT,
    Date_of_issue TEXT,
    price TEXT,
    img TEXT,
    img_1 TEXT,
    img_2 TEXT,
    img_3 TEXT,
    id_catalog TEXT
);

CREATE TABLE details (
    id VARCHAR(255) PRIMARY KEY,
    overview TEXT,
    plot TEXT,
    version TEXT,
    CPU TEXT,
    memory TEXT,
    RAM TEXT,
    video_card TEXT,
    id_catalogs TEXT
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login TEXT,
    password TEXT,
    email TEXT,
    name TEXT,
    surname TEXT,
    city TEXT,
    day TEXT,
    month TEXT,
    year TEXT
);

CREATE TABLE topics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id TEXT,
    topic_title TEXT,
    topic_content TEXT,
    date_created TEXT
);

CREATE TABLE last_views (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic_id TEXT,
    user_id TEXT,
    date_viewed TEXT
);