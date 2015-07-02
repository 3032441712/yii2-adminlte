Yii2-Adminlte
==========

后台用户与密码:
Login: `admin`
Password: `qwe1234`

安装和启动项目:
---------------------------------

需要先安装PHP的包管理管理工具,没有安装的可以到这里下载:
getcomposer.org

1. git clone https://github.com/3032441712/yii2-adminlte/tree/person.
2. Run command: `cd /my/path/to/person/` and go to main application directory.
3. Run command: `composer install`,初始化项目的类包.
4. Run command: `php requirements.php` and check the requirements.
5. Run command: `php init` to initialize the application with a specific environment.
6. 创建一个数据库,并修改配置文件 `common/config/main-local.php` accordingly.
7. Run command: `yii migrate` 初始化数据库:
   - m140608_201405_user_init : user table
   - m140608_201406_rbac_init : rabc 4 tables of auth_assignment, auth_item, auth_item_child, auth_rule. same to yiisoft/yii2/rbac/migrations/schema-mysql.sql
8. This will create tables needed for the application to work.

common/config/main-local.php rbac权限管理的配置项
'modules' => [
    'admin' => [
        'layout' => 'left-menu',
        'class' => 'mdm\admin\Module',
    ]
],

Usage
-----
- Use the URL `http://127.0.0.1` point to `person/frontend/web/` to access application frontend.
- Use the URL `http://127.0.0.1` point to `person/backend/web/` to access application backend.
- Use the URL `http://127.0.0.1` point to `person/backend/web/admin` to access application rbac manger.


Rbac 权限管理
-------------
- Run command: `yii migrate --migrationPath=@console/migrations/rbac` 添加权限
- To check weather show on top menu or side bar, add `'visible' => Yii::$app->user->can('readPost'),` in top-menu.php or sidebar-menu.php.
- To check could run action. add `if(!Yii::$app->user->can('createPost')) throw new HttpException(401, 'No Auth');` in actionIndex, actionCreate, actionUpdate in XXXController.php file.

Notes:
------

使用默认的用户  `admin` 和密码 `qwe1234` 登录后台

Themes:
-------
- 应用后台使用的模板为  "AdminLTE". 更多关于该模板的信息 [here](http://www.bootstrapstage.com/admin-lte/).
- Application frontend with default Yii2 advanced frontend page.


Preview:
-------
![Yii2-Adminlte](tests/yii2-adminlte-preview.jpg)


项目相关的文档:
-------
- [Yii2-Gii](https://github.com/funson86/yii2-gii) : Gii for Yii2-Adminlte
- [Yii2-Setting](https://github.com/funson86/yii2-Setting) : Common Setting for Yii2
- [Yii2-Blog](https://github.com/funson86/yii2-blog) : A Blog extension for Yii2
- [Yii2-Cms](https://github.com/funson86/yii2-cms) : A Cms extension for Yii2

