# Tavaan Engine — Optimizer

> **بهینه‌سازی** — موتور Optimizer در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.optimizer` |
| نام | `Optimizer` |
| عنوان فارسی | بهینه‌سازی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Optimizer` |
| نوع | `engine` |

## کلاس‌های اصلی

- `src/Optimizer.php`
- `src/OptimizerResult.php`

## Service Providerها

- `Tavaan\Engine\Optimizer\OptimizerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `console`

## دستورات CLI

- `optimize`
- `optimize:clear`

## پیکربندی

- فایل پیکربندی: `config/optimizer.php`
- کلید: `optimizer`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Optimizer.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Optimizer`** (این مخزن) | موتور Optimizer |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
