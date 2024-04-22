@component('mail::message')
# Order Shipped

Your order has been shipped!

@component('mail::button', ['url' => \Illuminate\Support\Facades\URL::signedRoute('test')])
    Show me the secrets!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
