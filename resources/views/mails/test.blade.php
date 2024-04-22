@component('mail::message')
# Order Shipped

Your order has been shipped!

@component('mail::button', ['url' => 'https://spatie.be?hey=yo&option=value'])
    View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
