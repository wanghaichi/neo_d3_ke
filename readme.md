# 软件项目Git历史版本信息知识库系统的设计与实现

## 依赖
- php >= 7.1
- laravel 5.6
- java1.8 （for neo4j）
- neo4j
- NeoEloquent
- [neo4jd3](https://github.com/eisman/neo4jd3)

## 安装
1. 安装neo4j数据库
2. 解压 graph.db.zip，用解压后的数据库替换你的本地数据库
3. 克隆项目，在根目录执行： `composer install` 。（需要提前安装composer）
4. `mv .env.example .env` 根据你的本地数据库配置，修改相关参数。
5. `php artisan key:generate`
6. `cd public`
7. `php -S 0.0.0.0:1024`
8. 浏览 127.0.0.1:1024
