# 北邮天枢2019 TSCTF线下邀请赛 Web1

## 题目详情

- **TSCTF 线下 Web1**

## 考点

- 一大堆
- cache/attack/下有个shell assert($_POST[6])
- 后台添加子站点处可直接写shell
- 前台可以直接任意下载文件
- 比赛时主办方不允许更改后台管理员密码，但该CMS允许关闭一系列功能增大攻击/checker难度，所以索性checker就不检验后台密码了。。。。
- etc.

## 环境重点
- PHP+MySQL HXCMS
- 本来想用Alpine Linux的，后来为保持原比赛时环境，采用的phusion/baseimage
- 真正比赛时用的是虚拟机
- PHP版本必须为7.0
- 供选手登录的账户信息写在Dockerfile的ENV username和ENV password下，root用户密码为ENV rootpassword，MySQL的root密码为ENV mysqlrootpassword
- 开放root用户登录ssh
- data.sql在/var/www/html/下

## 启动

    docker-compose up -d
    Web Server is 80 port at http://127.0.0.1:9654/
    Openssh Server is 22 port at tsctf@127.0.0.1:9655

## 版权

该题目复现环境尚未取得主办方及出题人相关授权，如果侵权，请联系本人删除（tiaonmmn@live.cn）
