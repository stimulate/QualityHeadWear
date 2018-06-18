<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Http\Models\Cap
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property float $price
 * @property int $id
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Http\Models\Category $category
 * @property-read \App\Http\Models\Order_item $Order_item
 * @property-read \App\Http\Models\Category $supplier
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Cap whereUpdatedAt($value)
 */
	class Cap extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\CartItem
 *
 * @property int $id
 * @property int $id
 * @property int $count
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\CartItem whereUpdatedAt($value)
 */
	class CartItem extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Cap[] $caps
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Category whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\Order
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $address
 * @property string $city
 * @property string $postalCode
 * @property string $state
 * @property string $phoneNumber
 * @property string $orderDate
 * @property float $subtotal
 * @property float $gst
 * @property float $grandtotal
 * @property string|null $status
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Order_item[] $order_items
 * @property-read \App\Http\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereGrandtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereGst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\Order_item
 *
 * @property int $id
 * @property int $id
 * @property int $quantity
 * @property int $id
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Http\Models\Cap $caps
 * @property-read \App\Http\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Order_item whereUpdatedAt($value)
 */
	class Order_item extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\ShoppingCart
 *
 */
	class ShoppingCart extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string $phoneNumber
 * @property string $email
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Cap[] $caps
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier whereid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Supplier whereUpdatedAt($value)
 */
	class Supplier extends \Eloquent {}
}

namespace App{
/**
 * App\Http\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Order[] $orders
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

