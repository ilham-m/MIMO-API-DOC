# User

```php
$userController = $client->getUserController();
```

## Class Name

`UserController`

## Methods

* [Make Account](/doc/controllers/user.md#make-account)
* [Get Profile](/doc/controllers/user.md#get-profile)
* [Customer List](/doc/controllers/user.md#customer-list)
* [Admin List](/doc/controllers/user.md#admin-list)
* [Warehouse List](/doc/controllers/user.md#warehouse-list)
* [Get Customer Detail](/doc/controllers/user.md#get-customer-detail)
* [Get Warehouse Detail](/doc/controllers/user.md#get-warehouse-detail)
* [Get Admin Detail](/doc/controllers/user.md#get-admin-detail)
* [Upload Profile Picture](/doc/controllers/user.md#upload-profile-picture)
* [Update Profile Picture](/doc/controllers/user.md#update-profile-picture)
* [Get Profile Picture](/doc/controllers/user.md#get-profile-picture)


# Make Account

```php
function makeAccount(
    string $accept,
    string $email,
    string $name,
    string $role,
    string $gender,
    string $address,
    string $username,
    int $telephone
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `email` | `string` | Form, Required | - |
| `name` | `string` | Form, Required | - |
| `role` | `string` | Form, Required | - |
| `gender` | `string` | Form, Required | - |
| `address` | `string` | Form, Required | - |
| `username` | `string` | Form, Required | - |
| `telephone` | `int` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$email = 'iilmaulana123@gm.com';
$name = 'ilham';
$role = 'customers';
$gender = 'male';
$address = 'tajur';
$username = 'ilham123';
$telephone = 1234543;

$result = $userController->makeAccount($accept, $email, $name, $role, $gender, $address, $username, $telephone);
```


# Get Profile

```php
function getProfile(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->getProfile($token, $accept);
```


# Customer List

```php
function customerList(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->customerList($token, $accept);
```


# Admin List

```php
function adminList(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->adminList($token, $accept);
```


# Warehouse List

```php
function warehouseList(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->warehouseList($token, $accept);
```


# Get Customer Detail

```php
function getCustomerDetail(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->getCustomerDetail($token, $accept);
```


# Get Warehouse Detail

```php
function getWarehouseDetail(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->getWarehouseDetail($token, $accept);
```


# Get Admin Detail

```php
function getAdminDetail(string $token, string $accept)
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
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->getAdminDetail($token, $accept);
```


# Upload Profile Picture

```php
function uploadProfilePicture(string $accept, string $image)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `image` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = 'application/json';
$image = 'image6';

$result = $userController->uploadProfilePicture($accept, $image);
```


# Update Profile Picture

```php
function updateProfilePicture(string $token, string $xHttpMethodOverride, string $accept, string $image)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `token` | `string` | Header, Required | - |
| `xHttpMethodOverride` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |
| `image` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$xHttpMethodOverride = 'patch';
$accept = '*/*';
$image = 'image6';

$result = $userController->updateProfilePicture($token, $xHttpMethodOverride, $accept, $image);
```


# Get Profile Picture

```php
function getProfilePicture(string $name, string $token, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string` | Query, Required | - |
| `token` | `string` | Header, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$name = 'profile_picture_1.jpg';
$token = '12c9c8c057d06482184c1b75e3f74a823b15d9d09c653ba323fa0bf269489d0cac41b20dd2b1aa80';
$accept = '*/*';

$result = $userController->getProfilePicture($name, $token, $accept);
```

