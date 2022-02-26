# Delivery Proof

```php
$deliveryProofController = $client->getDeliveryProofController();
```

## Class Name

`DeliveryProofController`

## Methods

* [Index Delivery Proof](/doc/controllers/delivery-proof.md#index-delivery-proof)
* [Upload Delivery Proof](/doc/controllers/delivery-proof.md#upload-delivery-proof)
* [Image 1 Delivery Proof](/doc/controllers/delivery-proof.md#image-1-delivery-proof)
* [Image 2 Delivery Proof](/doc/controllers/delivery-proof.md#image-2-delivery-proof)


# Index Delivery Proof

```php
function indexDeliveryProof(string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';

$result = $deliveryProofController->indexDeliveryProof($accept);
```


# Upload Delivery Proof

```php
function uploadDeliveryProof(
    string $accept,
    int $packageId,
    string $image1,
    string $image2,
    string $recipientName
)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accept` | `string` | Header, Required | - |
| `packageId` | `int` | Form, Required | - |
| `image1` | `string` | Form, Required | - |
| `image2` | `string` | Form, Required | - |
| `recipientName` | `string` | Form, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$accept = '*/*';
$packageId = 1;
$image1 = 'image_10';
$image2 = 'image_20';
$recipientName = 'ilham';

$result = $deliveryProofController->uploadDeliveryProof($accept, $packageId, $image1, $image2, $recipientName);
```


# Image 1 Delivery Proof

```php
function image1DeliveryProof(string $name, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string` | Query, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$name = 'delivery_proof_1_MIMO-000001.jpg';
$accept = '*/*';

$result = $deliveryProofController->image1DeliveryProof($name, $accept);
```


# Image 2 Delivery Proof

```php
function image2DeliveryProof(string $name, string $accept)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `name` | `string` | Query, Required | - |
| `accept` | `string` | Header, Required | - |

## Response Type

`mixed`

## Example Usage

```php
$name = 'delivery_proof_2_MIMO-000001.jpg';
$accept = '*/*';

$result = $deliveryProofController->image2DeliveryProof($name, $accept);
```

