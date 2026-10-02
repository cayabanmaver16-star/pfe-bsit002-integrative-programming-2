# Employee Management API – Design Document
Aljen Paul S. Domingo · BSIT 3B · PFEBSIT 002 Lab 3

## 1. API Title
Employee Management API

## 2. Base URL
http://127.0.0.1:8000/api/v1

## 3. Resources
- employees
- departments

## 4. Endpoints
| Method | Endpoint | Purpose | Success code |
| --- | --- | --- | --- |
| GET | /employees | View all employees | 200 |
| GET | /employees/{id} | View one employee | 200 |
| POST | /employees | Add an employee | 201 |
| PUT | /employees/{id} | Update employee information | 200 |
| DELETE | /employees/{id} | Delete an employee | 200 |
| GET | /employees?search=juan | Search employee by name | 200 |
| GET | /employees?department=IT | Filter employee by department | 200 |

## 5. Sample Request Body (POST /employees)
```json
{
    "first_name": "Juan",
    "last_name": "Dela Cruz",
    "email": "juan@example.com",
    "department": "IT",
    "position": "Programmer"
}
```

## 6. Sample Response Body (201 Created)
```json
{
    "id": 1,
    "first_name": "Juan",
    "last_name": "Dela Cruz",
    "email": "juan@example.com",
    "department": "IT",
    "position": "Programmer",
    "created_at": "2026-08-04T10:00:00Z"
}
```

## 7. Status Code Plan
| Code | When this API returns it |
| --- | --- |
| 200 OK | Successful GET, PUT, DELETE |
| 201 Created | Employee created with POST |
| 400 Bad Request | Malformed request (for example, broken JSON) |
| 401 Unauthorized | No valid login token |
| 403 Forbidden | Logged in but not allowed to do the action |
| 404 Not Found | Employee ID does not exist |
| 422 Unprocessable Entity | Missing or invalid fields, duplicate email |
| 500 Internal Server Error | Unexpected error on the server |
