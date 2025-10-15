# Abstract Factory Pattern

This folder demonstrates the **Abstract Factory Pattern** using a farming/gardening metaphor.  
It builds on the ideas from the SOLID principles and shows how to create families of related objects without specifying their concrete classes.

---

## 🧠 Intent

> Provide an interface for creating families of related or dependent objects  
> without specifying their concrete classes.

---

## 🌾 Example: Merchants and Gardens

Two types of merchants — `DrugDealer` and `RiceFarmer` — both produce a **garden** and a **store**,  
but the client never needs to know the details.

Client → GardenMerchant → { DrugDealer | RiceFarmer }
↳ { MarijuanaGarden + MarijuanaStore | RiceGarden + RiceStore }

---

## 📂 Folder Structure
AbstractFactory/
├── Contracts/
│ ├── Garden.php
│ ├── Store.php
│ └── GardenMerchant.php
├── Factories/
│ ├── DrugDealer.php
│ └── RiceFarmer.php
├── Products/
│ ├── MarijuanaGarden.php
│ ├── MarijuanaStore.php
│ ├── RiceGarden.php
│ └── RiceStore.php
└── ClientSimulator.php


---

## 💡 Key Concepts

- **Abstract Factory Interface** — defines methods to create related objects (`createGarden()`, `createStore()`).
- **Concrete Factories** — implement the abstract factory to create specific families of products.
- **Abstract Products** — define the interface for objects the factories create.
- **Concrete Products** — implement those interfaces.

---

## 🧪 How to Run

In `routes/web.php`:

```php
use App\Creational\AbstractFactory\Factories\DrugDealer;
use App\Creational\AbstractFactory\Factories\RiceFarmer;
use App\Creational\AbstractFactory\ClientSimulator;

Route::get('/factory', function () {
    $type = request()->query('type', 'rice');
    $merchant = $type === 'drug' ? new DrugDealer() : new RiceFarmer();
    return response()->json(ClientSimulator::simulate($merchant));
});

Then test in the browser:

http://127.0.0.1:8000/factory?type=drug

http://127.0.0.1:8000/factory?type=rice
