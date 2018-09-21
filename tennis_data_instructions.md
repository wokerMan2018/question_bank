## 网球赛事服务data各字段说明

### 普通用户data Json样例:
```
{
    "code": 200,
    "message": "获取用户成功",
    "data": {
        "id": 30,
        "usergroupid": 1,
        "name": "张三",
        "gender": null,
        "profile_photo": null,
        "document_type": 1,
        "document_number": "420281185507154511",
        "phone_number": "15812345678",
        "password": "$2y$10$lRvysBBX.psDXi.ZmeHCp.wMjFLeXvSFirztje0qiFBF.695ejymO",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJsYXQiOjE1Mzc0OTM3NTMsImV4cCI6MTUzODIxMzc1MywianRpIjoxNTM3NDkzNzUzLCJ1c2VyTW9kZWwiOnsiaWQiOjMwLCJ1c2VyZ3JvdXBpZCI6MSwibmFtZSI6Ilx1NWYyMFx1NGUwOSIsImdlbmRlciI6bnVsbCwicHJvZmlsZV9waG90byI6bnVsbCwiZG9jdW1lbnRfdHlwZSI6MSwiZG9jdW1lbnRfbnVtYmVyIjoiNDIwMjgxMTg1NTA3MTU0NTExIiwicGhvbmVfbnVtYmVyIjoiMTU4MTIzNDU2NzgiLCJwYXNzd29yZCI6IiQyeSQxMCRsUnZ5c0JCWC5wc0RYaS5abWVIQ3A",
        "user_description": null,
        "create_time": "2018-09-20 16:49:46",
        "update_time": "2018-09-21 09:35:53"
    }
}
```
| 字段名 | 含义 |
| ------ | ------ | 
| id | 用户ID | 
| usergroupid | 用户组ID | 
| name | 用户名 | 
| gender | 性别 | 
| profile_photo | 头像路径 | 
| document_type | 证件类型 | 
| document_number | 证件号码 | 
| phone_number | 手机号 | 
| password | 密码 | 
| user_description | 用户描述 |
| create_time | 用户创建时间 | 
| update_time | 该条数据更新时间 | 
*************
### 裁判员data Json样例
```
{
    "status": 200,
    "message": "返回裁判员信息",
    "data": {
        "id": 15,
        "uid": 33,
        "usergroupid": 2,
        "status": 0,
        "name": "张三",
        "gender": "男",
        "document_type": 1,
        "document_number": "420281185507154618",
        "phone_number": "15812345678",
        "referee_description": "简介",
        "referee_certificate": "/public/uploads/cert/20180921/04dd1d983500c2e03bc990e9c881ca21.png",
        "create_time": "2018-09-21 15:26:58",
        "update_time": "2018-09-21 15:26:58"
    }
}
```
|字段|含义|
|-----------|---------|
|id|裁判员id|
|uid|裁判员关联的普通用户id|
|usergroupid|用户组id|
|status|审核是否通过|
|name|裁判员姓名|
|gender|性别|
|document_type|证件类型|
|document_number|证件号码|
|phone_number|手机号码|
|referee_description|裁判员个人简介|
|referee_certificate|资质证书图片保存路径|
*********
### 机构data json样例
```
{
    "status": 200,
    "message": "返回机构信息",
    "data": {
        "id": 1,
        "usergroupid": 3,
        "name": "网球俱乐部001",
        "uid": 33,
        "status": 0,
        "head_name": "张三",
        "head_phone": "15812345678",
        "logo": "/public/uploads/cert/20180921/6a96154403361f423bab2b3280fc09f8.png",
        "description": "网球机构",
        "organization_certificate": "/public/uploads/cert/20180921/542b3774f1449e5f70a1893052dae3fe.png",
        "create_time": "2018-09-21 16:35:01",
        "update_time": "2018-09-21 16:35:01"
    }
}
```
| 字段名 | 含义 |
| ------ | ------ | 
| id | 用户ID | 
| usergroupid | 用户组ID | 
| uid | 机构关联的普通用户id | 
| status | 审核状态 | 
| head_name | 负责人姓名 | 
| head_phone | 负责人手机号 | 
| logo | 机构logo地址 | 
| description | 机构简介 | 
| organization_certificate | 机构资质证书 | 
| create_time | 用户创建时间 | 
| update_time | 该条数据更新时间 | 


