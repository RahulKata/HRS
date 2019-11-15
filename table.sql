CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
);

ALTER TABLE `users`
    ADD PRIMARY KEY (`id`)
    ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `users`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;

    