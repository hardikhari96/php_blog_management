CREATE TABLE `blog` (
  `blog_no` int PRIMARY KEY AUTO_INCREMENT,
  `created_at` timestamp,
  `blog_user` varchar(255) NOT NULL,
  `blog_img` varchar(255)
);

CREATE TABLE `users` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `user_name` varchar(255) UNIQUE,
  `user_email` varchar(255) UNIQUE,
  `user_password` varchar(255) NOT NULL,
  `user_full_name` varchar(255) NOT NULL
);

CREATE TABLE `admin` (
  `admin_no` int PRIMARY KEY AUTO_INCREMENT,
  `admin_name` varchar(255),
  `admin_username` varchar(255) UNIQUE,
  `admin_email` varchar(255) UNIQUE,
  `admin_password` varchar(255) NOT NULL,
  `admin_permit` int DEFAULT 3
);

CREATE TABLE `superadmin` (
  `su_id` int PRIMARY KEY AUTO_INCREMENT,
  `su_email` varchar(255) UNIQUE,
  `su_username` varchar(255) UNIQUE,
  `su_password` varchar(255) NOT NULL
);

ALTER TABLE `blog` ADD FOREIGN KEY (`blog_user`) REFERENCES `users` (`user_name`);
