# Auth

```php
$authController = $client->getAuthController();
```

## Class Name

`AuthController`

## Methods

* [Register](/doc/controllers/auth.md#register)
* [Logout](/doc/controllers/auth.md#logout)
* [Reset Password](/doc/controllers/auth.md#reset-password)
* [Change Password](/doc/controllers/auth.md#change-password)
* [Login](/doc/controllers/auth.md#login)


# Register

:information_source: **Note** This endpoint does not require authentication.

```php
function register(
    string $accept,
    string $email,
    string $name,
    string $password,
    string $passwordConfirmation,
    string $role,
    string $gender,
    string $address,
    string $username,
    string $telephone
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `email` | `string` | Form, Required | - |
| `name` | `string` | Form, Required | - |
| `password` | `string` | Form, Required | - |
| `passwordConfirmation` | `string` | Form, Required | - |
| `role` | `string` | Form, Required | - |
| `gender` | `string` | Form, Required | - |
| `address` | `string` | Form, Required | - |
| `username` | `string` | Form, Required | - |
| `telephone` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$email = 'admin@mail';
$name = 'admin';
$password = 'admin';
$passwordConfirmation = 'admin';
$role = 'admin';
$gender = 'male';
$address = 'admin address';
$username = 'admin123';
$telephone = '08123456789010';

$result = $authController->register($accept, $email, $name, $password, $passwordConfirmation, $role, $gender, $address, $username, $telephone);
```


# Logout

:information_source: **Note** This endpoint does not require authentication.

```php
function logout(string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = 'f47ea6194bc92f57cb1138b043a389167591be763048f22fdfb79f0de7bb3e481fc2fb896c29b6c8';
$accept = '*/*';

$result = $authController->logout($token, $accept);
```


# Reset Password

```php
function resetPassword(string $accept, string $email)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `email` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$email = 'iilmaulana04@gmail.com';

$result = $authController->resetPassword($accept, $email);
```


# Change Password

```php
function changePassword(string $accept, int $password, int $passwordConfirmation)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `password` | `int` | Form, Required | - |
| `passwordConfirmation` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$password = 1234;
$passwordConfirmation = 1234;

$result = $authController->changePassword($accept, $password, $passwordConfirmation);
```


# Login

:information_source: **Note** This endpoint does not require authentication.

```php
function login(string $accept, string $email, string $password)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `email` | `string` | Form, Required | - |
| `password` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$email = 'iilmaulana04@gmail.com';
$password = 'ilham123';

$result = $authController->login($accept, $email, $password);
```

