# Data Structures

We have Users (Clients & staff), Products, Categories and Orders as our main
tables.

Users -o--< Orders >----< Products >---- Categories

It is possible that the Product could have many categories, but for this
example we will say a product has one category.

> Note:
> We may create a 'hierarchical' category structure, such as Hardware contains
> Bathroom, Kitchen, Electrical,
> etc, with Bathroom having its own sub-categories such as Showers, Taps,
> Sinks, Toilets etc.

This needs to be further structured to remove many-to-many relationships:

Users -o--< Orders ---< Order-Products >--- Products

The Order-Products table is a pivot table as it will contain the Order ID, the
Product ID, the Quantity ordered, the
Date of order, the date of packing, the date of shipping, the price sold at,
and possibly other details.

### User

| Field             | Type & Size          | Other Details            |
|-------------------|----------------------|--------------------------|
| id                | Unsigned Big Integer | Primary Key              |
| name              | String               | Required                 |
| email             | string               | Required                 |
| password          | string               | Required, will be hashed |
| email verified at | date time            | Nullable                 |
| deleted at        | date time            | Soft Delete              |

The user has a profile associated with them.

## Profile

| Field       | Type & Size          | Other Details |
|-------------|----------------------|---------------|
| id          | Unsigned Big Integer | Primary Key   |
| given name  | string               | required      |
| family name | string               | nullable      |
| photo       | string               | nullable      |

## Category

| Field       | Type & Size          | Other Details |
|-------------|----------------------|---------------|
| id          | Unsigned Big Integer | Primary Key   |
| name        | string               |               |
| description | string               |               |
| icon        | string               |               |
| category id | big unsigned integer | nullable      |

## Product

| Field       | Type & Size          | Other Details |
|-------------|----------------------|---------------|
| id          | Unsigned Big Integer | Primary Key   |
| name        | string               |               |
| description | text                 |               |
| rrp         | integer              |               |
| shelf price | integer              |               |

## Order

| Field       | Type & Size          | Other Details |
|-------------|----------------------|---------------|
| id          | Unsigned Big Integer | Primary Key   |
| user id     | unsigned big integer |               |
| packaged at | date  time           | nullable      |
| shipped at  | date time            | nullable      |
| address     | string               |               |
| city        | string               |               |
| state       | string               |               |
| postcode    | string               | nullable      |
| country     | string               |               |

## Order-Product

| Field      | Type & Size          | Other Details |
|------------|----------------------|---------------|
| id         | Unsigned Big Integer | Primary Key   |
| order id   | unsigned big integer |               |
| product id | unsigned big integer |               |
| quantity   | integer              |               |
| price      | integer              |               |
