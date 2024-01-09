CREATE DATABASE IF NOT EXISTS db_wiki;

USE db_wiki;

CREATE TABLE IF NOT EXISTS role (
    roleName VARCHAR(50) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS appUser (
    userId VARCHAR(50) PRIMARY KEY,
    username VARCHAR(50),
    pw VARCHAR(50) ,
    email VARCHAR(50) ,
    userImg VARCHAR(50),
    created_at DATE    
);

CREATE TABLE IF NOT EXISTS roleOfUser (
    userId VARCHAR(50),
    roleName VARCHAR(50),
    PRIMARY KEY (userId, roleName),
    FOREIGN KEY (userId) REFERENCES appUser(userId),
    FOREIGN KEY (roleName) REFERENCES role(roleName)
);

CREATE TABLE IF NOT EXISTS category (
    categoryId VARCHAR(50) PRIMARY KEY,
    categoryName VARCHAR(50) NOT NULL,
    categoryDesc VARCHAR(50),
    created_at DATE
);

CREATE TABLE IF NOT EXISTS wiki (
    wikiId VARCHAR(50) PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(50) NOT NULL,
    wikiImg VARCHAR(50),
    userId VARCHAR(50),
    categoryId VARCHAR(50),
    created_at DATE,
    FOREIGN KEY (userId) REFERENCES appUser(userId),
    FOREIGN KEY (categoryId) REFERENCES category(categoryId)
);

CREATE TABLE IF NOT EXISTS tag (
    tagId VARCHAR(50) PRIMARY KEY,
    tagName VARCHAR(50) NOT NULL,
    created_at DATE
);

CREATE TABLE IF NOT EXISTS tagsOfWiki (
    wikiId VARCHAR(50),
    tagId VARCHAR(50),
    PRIMARY KEY (wikiId, tagId),
    FOREIGN KEY (wikiId) REFERENCES wiki(wikiId),
    FOREIGN KEY (tagId) REFERENCES tag(tagId)
);
