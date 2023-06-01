# 智简魔方财务系统（魔方财务）SSL模块使用教程

## 一. 导入数据表

因为魔方财务系统默认数据库不包含SSL相关的表（具体可见 `public/install/thinkcmf.sql` 中创建 `shd_certssl_product`、`shd_certssl_download`、`shd_certssl_orderinfo` 等表后立即又删除），
我们需要先恢复这部分数据表。

### 1. 在宝塔复制数据库密码

### 2. 宝塔点开PhpMyAdmin
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/0.png?raw=true" style="width: 614px"/>

### 3. 通过面板访问
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/1.png?raw=true" style="width: 484px"/>

### 4. 在PhpMyAdmin登录界面，粘贴输入密码
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/2.png?raw=true" style="width: 468px"/>

### 5. 选择魔方财务系统安装的数据库
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/3.png?raw=true" style="width: 503px"/>

### 6. 点击导入。本插件解压后，根目录下存在一个 `请手工导入此SQL到您数据库.sql`，在 PhpMyAdmin 导入界面中，选择此文件
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/4.png?raw=true" style="width: 552px"/>


## 二. 上传插件

在导入完成数据库后，您需要上传本插件到魔方财务的服务器上。

将 `public/plugins/servers/ssl` 上传到魔方财务的服务器的 `public/plugins/servers/ssl` 目录下。

## 三. 配置插件

接下来，您需要进入后台配置插件

### 1. 进入后台“设置”->“商品设置”->“通用接口”->“接口”->“创建接口”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/17.png?raw=true" style="width: 862px"/>

### 2. 在创建接口的界面，名称输入“SSL”，“服务器模块“选择”SSL”，用户名和密码填写您在我们SSL控制台的“合作”->“API & Keys”创建的API密钥。其它项可以随便输入
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/18.png?raw=true" style="width: 787px"/>

### 3. 在“接口分组”中，创建一个名为“SSL分组”的分组，并将前面创建的“SSL”接口添加进已选接口
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/19.png?raw=true" style="width: 861px"/>

<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/20.png?raw=true" style="width: 859px"/>

### 4. 导航设置
#### - 进入“设置”->“站务设置”->“导航管理”->“所有导航”->“默认菜单（系统-多语言）（当前会员中心导航）”右侧“修改”
  <img src="https://github.com/quantumca/repo-docs-pictures/blob/master/28.png?raw=true" style="width: 1103px"/>

#### - 滑到菜单底部，点击加号，在弹出新增页面中，页面类型选择“产品管理”，名称输入“SSL证书”，勾选“高级”，此时页面会多出“模板”的可选项，选择`service_ssl.tpl`，点击确定创建
<img width="1192" alt="image" src="https://github.com/quantumca/idcsmart/assets/6964962/12b3f938-ac9d-47a4-9f79-45eafe6de6eb">

### 5. 后台“设置”->“商品设置”->“商品管理”->“新增商品”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/21.png?raw=true" style="width: 823px"/>

### 6. 名字输入您要配置的SSL产品，例如“XXX DV SSL证书”，类型、商品组选择“ssl证书”。会员中心导航选择“SSL证书”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/22.png?raw=true" style="width: 1491px"/>

### 7. 在完善商品基本信息后，进入“定价”->“周期”，将除去1年后所有周期全部关闭（禁用）；价格默认设置为 0
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/23.png?raw=true" style="width: 1421px"/>

### 8. 在“自动开通”中，开通方式选择“自动化接口”，接口分组选择“SSL分组（SSL）”，此时会出来我们模块额外多出的选项，您可以开启“支持普通域名”+“支持通配符”+“支持IPv4“，IPv6暂不支持。然后发货产品选择您所需要售卖的品牌下的产品，开通方式选择“付款后自动”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/24.png?raw=true" style="width: 1201px"/>

### 9. 在“产品配置”中，“添加配置项”，
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/25.png?raw=true" style="width: 761px"/>

- 配置项名称规则为 `域名类型|中文名称`，例如 `standard|普通域名` 或者 `wildcard|通配符`。
  - 域名类型可选 `standard` / `wildcard` / `ipv4` / `ipv6`，
- 配置项类型选择“数量（应用价格）”
- 数量阶梯输入1
- 子项名称只转入1条，
  - 名称和配置项名称规则一样
  - 最小值0，最大值500
  - 初装费0
  - 价格设置成您想售卖的价格，比如普通域名200，通配符2000.

<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/26.png?raw=true" style="width: 1103px"/>
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/27.png?raw=true" style="width: 1083px"/>

## 四. 测试下单

### 1. 选购
在会员前台控制台中，产品管理中，点击“订购产品”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/31.png?raw=true" style="width: 971px"/>

### 2. 配置
选择所需购买的普通域名和通配符数量
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/32.png?raw=true" style="width: 1005px"/>

### 3. 结账
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/33.png?raw=true" style="width: 993px"/>

### 4. 输入域名，提交
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/34.png?raw=true" style="width: 1189px"/>

### 5. 点击“域名验证”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/35.png?raw=true" style="width: 1185px"/>

### 6. 验证
根据提示的DNS和文件验证信息，完成域名验证后，点击“立即检查”
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/36.png?raw=true" style="width: 1188px"/>

### 7. 检查
CA收到通知会立即对您的域名进行验证，如果是多域名可能会花费较长一些时间。大概30秒～2分钟。
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/37.png?raw=true" style="width: 461px"/>

### 8. 下载证书
CA签发证书后，您就可以下载证书
<img src="https://github.com/quantumca/repo-docs-pictures/blob/master/38.png?raw=true" style="width: 1185px"/>
