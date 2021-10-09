CREATE TABLE `usuario` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(100) NOT NULL COLLATE 'utf8_bin',
`usuario` VARCHAR(50) NOT NULL COLLATE 'utf8_bin',
`email` VARCHAR(100) NOT NULL COLLATE 'utf8_bin',
`senha` VARCHAR(255) NOT NULL COLLATE 'utf8_bin',
`timecreatead` TIMESTAMP NOT NULL DEFAULT unix_timestamp(),
PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_bin'
ENGINE=InnoDB
;