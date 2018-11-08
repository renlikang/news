set autocommit=0;
create database admin charset=utf8;
use admin;

CREATE TABLE admin (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT '管理者ID',
  username VARCHAR(64) NOT NULL COMMENT '用户名',
  password VARCHAR(255) NOT NULL COMMENT '密码',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT '1:启用 0:禁用',
  cTime TIMESTAMP not null  DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  uTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  deleteFlag tinyint(1) not null DEFAULT 0 COMMENT '删除标识:0正常，1删除',
  PRIMARY KEY (id),
  UNIQUE KEY username(username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT '后台用户登录表';