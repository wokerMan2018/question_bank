## 网球赛事服务data各字段说明

### Json样例:
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

