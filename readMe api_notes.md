Perfect—now you need something you can **show to your guide live + explain confidently**.
I’ll give you **clean, viva-ready notes + demo steps (Postman)**.

---

# 📘 **Slang Management System – REST API Notes (Laravel)**

---

## 🔹 1. What we built

👉 We converted a Laravel **web application (Blade-based)** into a **REST API system**

### ✔ Features:

* User Registration & Login (Token-based)
* Slang CRUD (Create, Read, Update, Delete)
* Search functionality
* Admin approval system
* Secure API using tokens

---

## 🔹 2. Technologies Used

* Laravel 12
* REST API architecture
* JSON data format
* Laravel Sanctum (Authentication)
* Postman (Testing) → Postman

---

## 🔹 3. What is REST API?

👉 REST API is a system where:

* Client sends request (GET, POST, PUT, DELETE)
* Server returns response in JSON format

---

## 🔹 4. API Endpoints (Main)

### 🔐 Authentication APIs

| Method | Endpoint      | Description   |
| ------ | ------------- | ------------- |
| POST   | /api/register | Register user |
| POST   | /api/login    | Login user    |
| POST   | /api/logout   | Logout user   |
| GET    | /api/profile  | Get user data |

---

### 📚 Slang APIs

| Method | Endpoint                 | Description    |
| ------ | ------------------------ | -------------- |
| GET    | /api/slangs              | Get all slangs |
| POST   | /api/slangs              | Add slang      |
| GET    | /api/slangs/{id}         | Get one slang  |
| PUT    | /api/slangs/{id}         | Update slang   |
| DELETE | /api/slangs/{id}         | Delete slang   |
| PATCH  | /api/slangs/{id}/approve | Approve slang  |
| GET    | /api/slangs/search       | Search slang   |

---

# 🎯 **LIVE DEMO (Postman Steps)**

---

## 🔥 Step 1: Register User

👉 POST

```
http://127.0.0.1:8000/api/register
```

### Body (JSON):

```json
{
  "name": "Vivek",
  "email": "vivek@test.com",
  "password": "123456",
  "password_confirmation": "123456"
}
```

✔ Response:

```json
{
  "token": "xxxx"
}
```

👉 Copy token

---

## 🔥 Step 2: Login User

👉 POST

```
/api/login
```

```json
{
  "email": "vivek@test.com",
  "password": "123456"
}
```

✔ Copy token again

---

## 🔥 Step 3: Add Token in Postman

👉 Go to **Headers**

```
Authorization: Bearer YOUR_TOKEN
```

---

## 🔥 Step 4: Test Protected API

---

### ✅ Add Slang

POST:

```
/api/slangs
```

```json
{
  "word": "lit",
  "meaning": "very exciting",
  "example": "Party was lit"
}
```

---

### ✅ Get Slangs

GET:

```
/api/slangs
```

---

### ✅ Search

GET:

```
/api/slangs/search?search=lit
```

---

### ✅ Update

PUT:

```
/api/slangs/1
```

---

### ✅ Delete

DELETE:

```
/api/slangs/1
```

---

### ✅ Approve (Admin)

PATCH:

```
/api/slangs/1/approve
```

---

### ✅ Logout

POST:

```
/api/logout
```

---

# 🔐 5. Security Used

👉 Token-based authentication using **Laravel Sanctum**

* Each user gets a token after login
* Token must be sent in header
* Unauthorized users cannot access protected APIs

---

# ⚠️ Common Errors

| Error            | Reason         | Solution         |
| ---------------- | -------------- | ---------------- |
| 401 Unauthorized | No token       | Add Bearer token |
| 422 Validation   | Missing fields | Check JSON       |
| 404 Not Found    | Wrong route    | Check URL        |
| 419 Error        | CSRF issue     | Use api.php      |

---

# 🧠 Viva Questions (IMPORTANT)

---

### ❓ What is REST API?

👉 API using HTTP methods and JSON data

---

### ❓ What is Sanctum?

👉 Laravel package for token-based authentication

---

### ❓ Difference: Web vs API

| Web          | API        |
| ------------ | ---------- |
| Blade views  | JSON       |
| Session auth | Token auth |

---

### ❓ Why Postman?

👉 To test API endpoints without frontend

---

# 🚀 Final Conclusion

👉 We successfully:

* Converted Laravel app → REST API
* Implemented authentication
* Secured APIs using tokens
* Tested using Postman

---

# 💡 Pro Tip (for your guide)

While showing demo, say:

👉

> “Sir, earlier this was a Blade-based system. Now I have exposed all functionalities as REST APIs, which can be consumed by mobile apps or frontend frameworks like React.”

---

