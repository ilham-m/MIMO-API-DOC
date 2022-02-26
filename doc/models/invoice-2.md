
# Invoice 2

## Structure

`Invoice2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `carton` | `int` | Required | - | getCarton(): int | setCarton(int carton): void |
| `cbm` | `float` | Required | - | getCbm(): float | setCbm(float cbm): void |
| `pricePerCbm` | `int` | Required | - | getPricePerCbm(): int | setPricePerCbm(int pricePerCbm): void |

## Example (as JSON)

```json
{
  "description": "test description 4",
  "carton": 4,
  "cbm": 3.5,
  "price_per_cbm": 10000
}
```

