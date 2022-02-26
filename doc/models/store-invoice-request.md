
# Store Invoice Request

## Structure

`StoreInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `packageId` | `int` | Required | - | getPackageId(): int | setPackageId(int packageId): void |
| `invoice` | [`Invoice[]`](/doc/models/invoice.md) | Required | - | getInvoice(): array | setInvoice(array invoice): void |

## Example (as JSON)

```json
{
  "package_id": 3,
  "invoice": [
    {
      "description": "test description 1",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 140000
    },
    {
      "description": "test description 2",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 140000
    },
    {
      "description": "test description 3",
      "carton": 4,
      "cbm": 3.5,
      "price_per_cbm": 10000,
      "total": 140000
    }
  ]
}
```

