# 智简魔方财务系统（魔方财务）SSL模块使用教程

## 一. 导入数据表

因为魔方财务系统默认数据库不包含SSL相关的表（具体可见 `public/install/thinkcmf.sql` 中创建 `shd_certssl_product`、`shd_certssl_download`、`shd_certssl_orderinfo` 等表后立即又删除），
我们需要先恢复这部分数据表。

1. 在宝塔复制数据库密码

2. 宝塔点开PhpMyAdmin
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/0.png?raw=true" style="width:50%"/>

3. 通过面板访问
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/1.png?raw=true" style="width:50%"/>

4. 在PhpMyAdmin登录界面，粘贴输入密码
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/2.png?raw=true" style="width:50%"/>

5. 选择魔方财务系统安装的数据库
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/3.png?raw=true" style="width:50%"/>

6. 点击导入
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/4.png?raw=true" style="width:50%"/>

7. 本插件解压后，根目录下存在一个 `请手工导入此SQL到您数据库.sql`，在 PhpMyAdmin 导入界面中，选择此文件
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/4.png?raw=true" style="width:50%"/>


## 二. 上传插件

在导入完成数据库后，您需要上传本插件到魔方财务的服务器上。

1. 将 `public/plugins/gateways/ssl` 上传到魔方财务的服务器的 `public/plugins/gateways/ssl` 目录下

2. 将 `public/plugins/servers/ssl` 上传到魔方财务的服务器的 `public/plugins/servers/ssl` 目录下

## 三. 配置插件

接下来，您需要进入后台配置插件

1. 进入后台“设置”->“商品设置”->“通用接口”->“接口”->“创建接口”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/17.png?raw=true" style="width:50%"/>
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/18.png?raw=true" style="width:50%"/>
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/19.png?raw=true" style="width:50%"/>
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/20.png?raw=true" style="width:50%"/>
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/21.png?raw=true" style="width:50%"/>
